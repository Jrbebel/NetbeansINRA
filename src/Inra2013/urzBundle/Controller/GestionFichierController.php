<?php

/**
 * Description of GestionFichierController
 *  Permet la gestion des fichiers d'importation,d'exportation sur différents formats.
 * @author BEBEL Jean Raynal
 */

namespace Inra2013\urzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Inra2013\urzBundle\Entity\Analyse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class GestionFichierController extends Controller {

    private $path;

    /**
     * Description of UploadAction
     * Permet de faire la validation du fichier xls 
     * @author BEBEL Jean Raynal
     */
    public function __construct() {
        $this->path = dirname(__FILE__) . '/../Resources/Upload';
    }

    public function UploadAction() {


        if ($this->getRequest()->getMethod() == 'POST') {
            $protocole = $this->get('Request')->get('protocole'); // on recupère le protocole courant
            /** Recupération des informations du fichier avec les differents type d'erreur   * */
            if ($_FILES['files']['error']) {

                switch (($_FILES['files']['error'])) {
                    case 1: // UPLOAD_ERR_INI_SIZE     
                        return new Response("Le fichier dépasse la limite autorisée par le serveur ");
                        break;
                    case 2: // UPLOAD_ERR_FORM_SIZE     
                        return new Response("Le fichier dépasse la limite autorisée dans le formulaire HTML !");
                        break;
                    case 3: // UPLOAD_ERR_PARTIAL     
                        return new Response("L'envoi du fichier a été interrompu pendant le transfert !");
                        break;
                    case 4: // UPLOAD_ERR_NO_FILE     

                        return new Response("Le fichier que vous avez envoyé a une taille nulle !");

                        break;
                }
            }
            /*             * On regarde si le fichier est aux bon format qui est le csv(text/csv)* */ else {

                $sheet = $this->ReadExcelAction($_FILES);

                $tmp_name = $_FILES['files']["tmp_name"];

                move_uploaded_file($tmp_name, $this->path . "/" . $_FILES['files']['name']); /*                 * On bouge le fichier dans la section Resources/Upload pour pourvoir l utilisé pour l'enregistrement* */

                return $this->render("Inra2013urzBundle:Default:edit.html.twig", array('xls' => $sheet, 'file' => $_FILES['files']['name'], "protocole" => $protocole));
            }
        }


        return $this->render("Inra2013urzBundle:Default:edit.html.twig");
    }

    /**
     * Description of ReadExcelAction
     * Permet de faire lire le fichier xls
     * @param $file : fichier upload 
     * @author BEBEL Jean Raynal
     */
    public function ReadExcelAction($files) {

        $excelObj = $this->get('xls.load_xls5')->load($files['files']["tmp_name"]);
        $page = 0;
        $sheet = $excelObj->getSheet($page);
        return $sheet;
    }

    /**
     * Description of SaveExcel
     * Permet d'enregistrer le fichier excel dans la base de données
     * 
     * @author BEBEL Jean Raynal
     */
    public function SaveExcelAction() {

        $files['files']["tmp_name"] = $this->path . "/" . $_POST['files'];
        $sheet = $this->ReadExcelAction($files); //On lit le fichier excel
        $entityName = "Inra2013urzBundle:Protocole";
        $numProtocole = $this->get('request')->get('NumProtocole');
        /*         * On recupere l entité protocole correspondant au numero de protocole* */
        $Protocole = $this->getDoctrine()->getEntityManager()->getRepository($entityName)->findBy(array('id' => $numProtocole));

        $em = $this->getDoctrine()->getManager();  // On récupére l'EntityManager
        $i = 0;

        foreach ($sheet->getRowIterator() as $row) {
            $Analyse[$i] = new Analyse();

// On prend pas la première ligne du tableau,c'est les titre du tableau

            foreach ($row->getCellIterator() as $cell) {

                $Analyse[$i]->setProtocole($Protocole[0]);


                if ($row->getRowIndex() != 1) {
                    if ($cell->getColumn() == 'A') {

                        $rest = substr($cell->getValue(), -4);
                        $Analyse[$i]->setCodeLabo($rest);
                    } elseif ($cell->getColumn() == 'B') {

                        $Animal = $cell->getValue();
                        $Analyse[$i]->setAnimal($Animal);
                    } elseif ($cell->getColumn() == 'G') {

                        if ($cell->getValue() != "Date prvt") {

                            $date = $sheet->getStyle('G1')->getNumberFormat()->toFormattedString($cell->getValue(), "M/D/YYYY"); //Etant donné que le format récuperé est un float,on utilise cette fonction pour le mettre aux format date
                            $Analyse[$i]->setDatePrelev(new \DateTime($date));
                        }
                    } elseif ($cell->getColumn() == 'H') {

                        if ($cell->getValue() != "Date analyse") {

                            $dateAnalyse = $sheet->getStyle('H1')->getNumberFormat()->toFormattedString($cell->getValue(), "M/D/YYYY"); //Etant donné que le format récuperé est un float,on utilise cette fonction pour le mettre aux format date
                            $Analyse[$i]->setDateAnalyse(new \DateTime($dateAnalyse));
                        }
                    }

                    /*                     * On enregistre les codelabo dans les différents type d'analyse* */
                    $ResultTypeAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($numProtocole);
                    foreach ($ResultTypeAnalyse as $Resultat => $Key) {

                        $analyse = "\Inra2013\urzBundle\Entity\Ana" . $Key['Nom'];

                        $TypeAnalyse[$Resultat] = new $analyse();
                        \Doctrine\Common\Util\Debug::dump($Resultat);

                        $TypeAnalyse[$Resultat]->setCodeLabo($Analyse[$i]);
                        $em->persist($TypeAnalyse[$Resultat]); //on persist l'objet analyse
                   
                    }
   

                    $em->persist($Analyse[$i]); //on persist l'objet analyse
                }  $em->flush();
            }




            $i++;
            $em->flush(); //on sauvegarde dans la base
            /* faut que je supprime le fichier uploader qui est enregistrer sur le serveur* */
        }

        return $this->render('Inra2013urzBundle:Default:edit.html.twig', array("Status" => "Enregistrement", "protocole" => $numProtocole));
    }

    /**
     * Description of CreateExcelAction
     * Permet de creer un fichier excel avec un protocole donnée
     * @param $file : fichier upload 
     * @author BEBEL Jean Raynal
     */
    public function CreateExcelAction() {

        if ($this->getRequest()->getMethod() == 'GET') {  //si c est un GET alors on affiche le formulaire de recherche de protocole
            return $this->render("Inra2013urzBundle:Analyse:CreatExcel.html.twig", array('type' => 'createxcel'));
        } else if ($this->getRequest()->getMethod() == 'POST') // si c est un POST alors on traite la demande de creation de la fiche
            $id = $this->get('request')->get('NumProtocole');

        $excelService = $this->get('xls.service_xls5');

        /*         * Creation des variable pour les titres obligatoires** */
        $A = "CodeLabo";
        $B = "N° Protocol";
        $C = "Nature";
        $D = "Type";
        $E = "Espèce Animal";
        $F = "Espèce végetale";
        $G = "Identif Animale";
        $H = "Traitement ou régime";
        $I = "Date de prélèvt";
        $J = "Analyse à faire";
        /*         * Limite du debut et de la fin des champs obligatoire** */
        $LimiteDebutObli = "A";
        $LimiteFinObli = "J";
        /*         * Couleur des champs obligatoire* */
        $ColorObli = "ebf2df";

        /* Création des variables pour les titres optionnels* */

        $K = "Période";
        $L = "Taille du broyage";
        $M = "Lot";
        $N = "Groupe";
        /*         * Limite de dubut et de la fin des champs optionnels* */
        $LimiteDebutOpt = "K";
        $LimiteFinOpt = "N";
        /*         * Couleur des champs optionnels* */
        $ColorOpti = "ededed";

        /*         * Creation des variables pour la description du fichier* */

        $Auteur = "Jean Raynal BEBEL";
        $Title = "Un titre quelconque";
        $Subject = "Teste document";
        $Description = "Description test";
        $NameFile = "Essai";
        /*         * Propriété pour la hauteur de la cellule,par default c'est la première ligne.pour modification des celle ci mettre argument dans la fct getRowDimension() */
        $pts = 24; //hauteur de la cellule exprimé en point
//
        // create the object see http://phpexcel.codeplex.com documentation
        $excelService->excelObj->getProperties()->setCreator($Auteur)
                ->setLastModifiedBy($Auteur)
                ->setTitle($Title)
                ->setSubject($Subject)
                ->setDescription($Description);
// ->setKeywords("office 2005 openxml php")
//->setCategory("Test result file");
        $Protocole = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($id);
// $IdProtocole = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->findBy(array('id' => $id));


        foreach ($Protocole as $Resultat => $Key) {


            $objWorkSheet[$Resultat] = $excelService->excelObj->createSheet();
            $excelService->excelObj->setActiveSheetIndex($Resultat)
                    /*                     * Valeur pour les champs obligatoires* */
                    ->setCellValue('A1', $A)
                    ->setCellValue('B1', $B)
                    ->setCellValue('C1', $C)
                    ->setCellValue('D1', $D)
                    ->setCellValue('E1', $E)
                    ->setCellValue('F1', $F)
                    ->setCellValue('G1', $G)
                    ->setCellValue('H1', $H)
                    ->setCellValue('I1', $I)
                    ->setCellValue('J1', $J)
                    /*                     * Valeur pour les champs optionnels* */
                    ->setCellValue('K1', $K)
                    ->setCellValue('L1', $L)
                    ->setCellValue('M1', $M)
                    ->setCellValue('N1', $N);



            /*             * On ajoute les valeurs de la BDD dans la fiche excel par rapport au numéro du protocole (Pour les champs allant de A à N )* */
            /*             * Key['Nom'] = OPG,EOsino ... * */
            $AnalyseProto = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->CodeLaboProtocole($Key['Nom'], $id);


            /*             * Les valeurs recuperer,on les mets dans les champs prévu* */
            foreach ($AnalyseProto as $i => $analyse) {


                $resultatA = $analyse->getCodeLabo()->getCodeLabo();
                $resultatB = NULL;
                $resultatC = NULL;
                $resultatD = NULL;
                $resultatE = NULL;
                $resultatF = NULL;
                $resultatG = NULL;
                $resultatH = NULL;
                $resultatI = $analyse->getCodeLabo()->getDatePrelev()->format('d-m-Y');
                $resultatJ = $analyse->getCodeLabo()->getDateAnalyse()->format('d-m-Y');
                $resultatK = NULL;
                $resultatL = NULL;
                $resultatM = NULL;
                $resultatN = NULL;



                /*                 * On commence a partir de la ligne 2,la première ligne sont les titres* */

                $excelService->excelObj->setActiveSheetIndex($Resultat)
                        /*                         * Valeur pour les champs obligatoires* */
                        ->setCellValue('A' . ($i + 2), $resultatA)
                        ->setCellValue('B' . ($i + 2), $resultatB)
                        ->setCellValue('C' . ($i + 2), $resultatC)
                        ->setCellValue('D' . ($i + 2), $resultatD)
                        ->setCellValue('E' . ($i + 2), $resultatE)
                        ->setCellValue('F' . ($i + 2), $resultatF)
                        ->setCellValue('G' . ($i + 2), $resultatG)
                        ->setCellValue('H' . ($i + 2), $resultatH)
                        ->setCellValue('I' . ($i + 2), $resultatI)
                        ->setCellValue('J' . ($i + 2), $resultatJ)
                        /*                         * Valeur pour les champs optionnels* */
                        ->setCellValue('K' . ($i + 2), $resultatK)
                        ->setCellValue('L' . ($i + 2), $resultatL)
                        ->setCellValue('M' . ($i + 2), $resultatM)
                        ->setCellValue('N' . ($i + 2), $resultatN);



                $Type = "Cell" . $Key['Nom']; //ON AJOUTE LES CHAMPS PAR RAPPORT AU TYPE D ANALYSE TROUVÉ
                $this->$Type($excelService->excelObj, $Resultat, $AnalyseProto);
            }






            /*             * On creer les feuille pour les differentes analyse du protocole* */
            $excelService->excelObj->getActiveSheet()->setTitle($Key['Nom']);

            /*             * Un peut de style dans les cellules qui contient les titres les obligatoire seront en vert et les optionnels en gris * */

            $excelService->excelObj->getActiveSheet()->getRowDimension()->setRowHeight($pts);

            /*             * Pour les champs obligatoires* */
            foreach (range($LimiteDebutObli, $LimiteFinObli) as $i) { //Boucle jusqu'a J pour applique le style
//
                //  $excelService->excelObj->getActiveSheet()->getStyle($i.'1' )->getProtection()->setLocked('PROTECTION_PROTECTED');
                $excelService->excelObj->getActiveSheet()->getColumnDimension($i)->setAutoSize(true); //autosize pour les colonnes
                $excelService->excelObj->getActiveSheet()->getStyle($i . '1')->applyFromArray(
                        array('fill' =>
                            array('type' => "solid", 'color' =>
                                array('rgb' => $ColorObli)
                            ), 'font' => array('bold' => true)
                        )
                );

                $excelService->excelObj->getActiveSheet()->getStyle($i . '1')->getBorders()->getAllBorders()->setBorderStyle('medium');
            }

            /*             * Pour les champs optionnels* */

            foreach (range($LimiteDebutOpt, $LimiteFinOpt) as $i) { //Boucle jusqu'a J pour applique le style
                $excelService->excelObj->getActiveSheet()->getColumnDimension($i)->setAutoSize(true); //autosize pour les colonnes
                $excelService->excelObj->getActiveSheet()->getStyle($i . '1')->applyFromArray(
                        array('fill' =>
                            array('type' => "solid", 'color' =>
                                array('rgb' => $ColorOpti)
                            ), 'font' => array('bold' => true)
                        )
                );
                $excelService->excelObj->getActiveSheet()->getStyle($i . '1')->getBorders()->getAllBorders()->setBorderStyle('medium');
            }
        }




//create the response

        $response = $excelService->getResponse();
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=' . $NameFile . '.xls');

// If you are using a https connection, you have to set those two headers for compatibility with IE <9
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        return $response;
    }

    /**
     * Description of CellEosino
     * Permet de creer les champs dans la feuille excel pour ce type d'analyse 
     * @param $file : Feuille,Resultat
     * @author BEBEL Jean Raynal
     */
    public function CellEosino($feuille, $Resultat, $AnalyseProto) {

        $LimiteDebut = "O";
        $LimiteFin = "P";
        $O = "Eosino lu";
        $P = "Eosino val";

        $this->getStyleCell($feuille, $LimiteDebut, $LimiteFin);

        foreach (range($LimiteDebut, $LimiteFin) as $lettre) {

            $feuille->setActiveSheetIndex($Resultat)
                    ->setCellValue($lettre . '1', $$lettre);

            foreach ($AnalyseProto as $i => $analyse) {
                $feuille->setActiveSheetIndex($Resultat)
                        /*                         * Valeur pour les champs obligatoires* */
                        ->setCellValue("O" . ($i + 2), $analyse->getEosinoLu())
                        ->setCellValue("P" . ($i + 2), $analyse->getEosinoVal());
            }
        }
    }

    /**
     * Description of CellOPG
     * Permet de creer les champs dans la feuille excel pour ce type d'analyse 
     * @param $file : Feuille,Resultat
     * @author BEBEL Jean Raynal
     */
    public function CellOPG($feuille, $Resultat, $AnalyseProto) {

        $LimiteDebut = "O";
        $LimiteFin = "U";
        $O = "Prise d'essai KK(g)";
        $P = "Oeufs lu";
        $Q = "volume lu";
        $R = "OPG";
        $S = "Coccidies";
        $T = "Monezia";
        $U = "Strongyloides";



        $this->getStyleCell($feuille, $LimiteDebut, $LimiteFin);
        foreach (range($LimiteDebut, $LimiteFin) as $lettre) {

            $feuille->setActiveSheetIndex($Resultat)
                    ->setCellValue($lettre . '1', $$lettre);
        }
        foreach ($AnalyseProto as $i => $analyse) {
            $feuille->setActiveSheetIndex($Resultat)
                    /*                     * Valeur pour les champs obligatoires* */
                    ->setCellValue("O" . ($i + 2), $analyse->getPrisEssai())
                    ->setCellValue("P" . ($i + 2), $analyse->getOeufLu())
                    ->setCellValue("Q" . ($i + 2), $analyse->getVolLu())
                    ->setCellValue("R" . ($i + 2), $analyse->getOpg())
                    ->setCellValue("S" . ($i + 2), $analyse->getConccidies())
                    ->setCellValue("T" . ($i + 2), $analyse->getMonezia())
                    ->setCellValue("U" . ($i + 2), $analyse->getStrongeledia());
        }
    }

    /**
     * Description of CellPVC
     * Permet de creer les champs dans la feuille excel pour ce type d'analyse 
     * @param $file : Feuille,Resultat
     * @author BEBEL Jean Raynal
     */
    public function CellPCV($feuille, $Resultat) {

        $LimiteDebut = "O";
        $LimiteFin = "O";
        $O = "PVC";
        $this->getStyleCell($feuille, $LimiteDebut, $LimiteFin);
        foreach (range($LimiteDebut, $LimiteFin) as $lettre) {
            $feuille->setActiveSheetIndex($Resultat)
                    ->setCellValue($lettre . '1', $$lettre);

            ;
        }
    }

    /**
     * Description of getStyleCell
     * Permet de creer un style pour les champs de resultat
     * @param $file : Feuille,limitedebut,limitefin
     * @author BEBEL Jean Raynal
     */
    public function getStyleCell($feuille, $LimiteDebut, $LimiteFin) {

        $ColorObli = "ded43c";
        $pts = 24;

        $feuille->getActiveSheet()->getRowDimension()->setRowHeight($pts);
        /*         * Pour les champs obligatoires* */
        foreach (range($LimiteDebut, $LimiteFin) as $i) { //Boucle jusqu'a J pour applique le style
//
            //  $excelService->excelObj->getActiveSheet()->getStyle($i.'1' )->getProtection()->setLocked('PROTECTION_PROTECTED');
            $feuille->getActiveSheet()->getColumnDimension($i)->setAutoSize(true); //autosize pour les colonnes
            $feuille->getActiveSheet()->getStyle($i . '1')->applyFromArray(
                    array('fill' =>
                        array('type' => "solid", 'color' =>
                            array('rgb' => $ColorObli)
                        ), 'font' => array('bold' => true)
                    )
            );

            $feuille->getActiveSheet()->getStyle($i . '1')->getBorders()->getAllBorders()->setBorderStyle('medium');
        }
    }

    /**
     * Description of ImportListing
     * Permet d'importer un listing de codelabo pour un protocole et des analyse corespondant
     * 
     * @author BEBEL Jean Raynal
     */
    public function ImportListingAction() {


        if ($this->getRequest()->getMethod() == 'GET') {  //si c est un GET alors on affiche le formulaire de recherche de protocole
            return $this->render('Inra2013urzBundle:Analyse:CreatExcel.html.twig', array('type' => 'listing'));
        } else if ($this->getRequest()->getMethod() == 'POST') {
            $analyse = new AnalyseController();
            $protocole = $this->get('request')->get('NumProtocole');
            return $this->render("Inra2013urzBundle:Default:edit.html.twig", array("protocole" => $protocole));
        }
    }

}

