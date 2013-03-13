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
            $type = $this->get('Request')->get('type'); // on recupere le type pour savoir sur quel methode envoyé le fichier
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
                $sheet->getSheet(0);
                $tmp_name = $_FILES['files']["tmp_name"];

                move_uploaded_file($tmp_name, $this->path . "/" . $_FILES['files']['name']); /*                 * On bouge le fichier dans la section Resources/Upload pour pourvoir l utilisé pour l'enregistrement* */
                if ($type = "ImportResult") {
                    return $this->render("Inra2013urzBundle:Default:edit.html.twig", array('xls' => $sheet, 'file' => $_FILES['files']['name'], "protocole" => $protocole, 'form_path' => 'Inra2013Bundle_ImportResultat'));
                } else if ($type = "") {
                    return $this->render("Inra2013urzBundle:Default:edit.html.twig", array('xls' => $sheet, 'file' => $_FILES['files']['name'], "protocole" => $protocole, 'form_path' => 'Inra2013Bundle_SaveFile'));
                }
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
        // $sheet = $excelObj->getSheet($page);
        //  return $sheet;
        return $excelObj;
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
        $ResultTypeAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($numProtocole);

        $em = $this->getDoctrine()->getManager();  // On récupére l'EntityManager
        $i = 0;
        $a = 0;
        foreach ($sheet->getRowIterator() as $row) {

            $Analyse[$i] = new Analyse();

// On prend pas la première ligne du tableau,c'est les titre du tableau

            foreach ($row->getCellIterator() as $cell) {

                $Analyse[$i]->setProtocole($Protocole[0]);


                if ($row->getRowIndex() != 1) {

                    if ($cell->getColumn() == 'A') {

                        $rest = substr($cell->getValue(), -4); //on recupere le code labo sans la provenance

                        $Analyse[$i]->setCodeLabo($rest);

                        foreach ($ResultTypeAnalyse as $Resultat => $Key) {


                            $TypeAnalyse[$Resultat]->setCodeLabo($Analyse[$i]);
                        }
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
                            /*                             * On enregistre les codelabo dans les différents type d'analyse* */
                            /*                             * On est arrivé à la dernière colonnne,on peut persister l'objet analyse et typeAnalyse * */
                            $Analyse[$i]->setDateAnalyse(new \DateTime($dateAnalyse));
                            $em->persist($Analyse[$i]); //on persist l'objet analyse
                            foreach ($ResultTypeAnalyse as $Resultat => $Key) {
                                $em->persist($TypeAnalyse[$Resultat]); //on persist l'objet Typeanalyse
                            }
                        }
                    }
                }
            }


            $em->flush(); //on sauvegarde dans la base   
            $i++;


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

        $NameFile = "ProtocoleResultat"; // Nom du fichier

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



                // $Type = "Cell" . $Key['Nom']; //ON AJOUTE LES CHAMPS PAR RAPPORT AU TYPE D ANALYSE TROUVÉ

                $this->Champs($Key['Nom'], $excelService->excelObj, $Resultat, $AnalyseProto);

                // $this->$Type($excelService->excelObj, $Resultat, $AnalyseProto);
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
     * Description of Champs
     * Permet de creer les champs dans la feuille excel pour ce type d'analyse 
     * @param $file : Feuille,Resultat,Nom
     * @author BEBEL Jean Raynal
     */
    public function Champs($Nom, $feuille, $Resultat, $AnalyseProto) {

        $LimiteDebut = "O";
        $LimiteFin = "O";



        /*         * Faut recherché les champs pour les différentes analyses */

        $ChampsAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:TypeAnalyse')->findBy(array("Nom" => $Nom));
        /*         * On applique le style pour les différents champs qui viennent d'etre génerer** */
        foreach ($ChampsAnalyse[0]->getChamps() as $po) {

            $feuille->setActiveSheetIndex($Resultat)
                    ->setCellValue($LimiteFin . '1', $po->getChamp());
            $this->getStyleCell($feuille, $LimiteDebut, $LimiteFin);
            ++$LimiteFin;
        }

        /*         * *On rempli les champs avec les valeurs de la BDD***** */
        foreach ($AnalyseProto as $i => $analyse) {

            $LimiteFin = "O"; //on commence par la derniere colonne des champs obligatoires
            foreach ($ChampsAnalyse[0]->getChamps() as $value) {
                $getChamp = "get" . $value->getChamp();
                $feuille->setActiveSheetIndex($Resultat)
                        ->setCellValue($LimiteFin . ($i + 2), $analyse->$getChamp());
                ++$LimiteFin; //on incremente l'alphabetF
            }
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
            $NumProtocole = $this->get('request')->get('NumProtocole');

            return $this->render("Inra2013urzBundle:Default:edit.html.twig", array("protocole" => $NumProtocole, "form" => 'Inra2013Bundle_SaveFile'));
        }
    }

    /**
     * Description of ImpprtResultat
     * Permet d'importer un listing de codelabo pour un protocole et des analyse corespondant
     * 
     * @author BEBEL Jean Raynal
     */
    public function ImportResultatAction() {

        if ($this->getRequest()->getMethod() == 'GET') {  //si c est un GET alors on affiche le formulaire de recherche de protocole
            return $this->render('Inra2013urzBundle:Analyse:CreatExcel.html.twig', array('type' => 'ImportResultat'));
        } elseif ($this->getRequest()->getMethod() == 'POST') {

            $NumProtocole = $this->get('request')->get('NumProtocole');
            $Status = $this->get('request')->get('Status');
            $entityName = "Inra2013urzBundle:Protocole";
            $em = $this->getDoctrine()->getManager();
            if ($Status == "Enregistrement") {
                $Protocole = $this->getDoctrine()->getEntityManager()->getRepository($entityName)->findBy(array('id' => $NumProtocole));
                $ResultTypeAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($NumProtocole);
                $files['files']["tmp_name"] = $this->path . "/" . $_POST['files'];
                $sheet = $this->ReadExcelAction($files); //On lit le fichier excel

                foreach ($ResultTypeAnalyse as $Value) {



                    $feuille = $sheet->getSheetByName($Value['Nom']);
                    /*                     * Faut recherché les champs pour les différentes analyses */


                    $CodeLabo = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->CodeLaboProtocole($Value['Nom'], $NumProtocole);

                    $ChampsAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:TypeAnalyse')->findBy(array("Nom" => $Value['Nom']));

                    foreach ($feuille->getRowIterator() as $key => $row) {
                        $analyse = "\Inra2013\urzBundle\Entity\Ana" . $Value['Nom'];
                        if ($key != 1) {
                            $Analyse[$key] = new $analyse();
                           
                        }


                        $LimiteDebut = "O"; // On sait que le point départ des champs ajouté est a partir de la colonne O,sert aussi a initialisé a chaque passage de ligne

                        $Champs = 0;
                        foreach ($row->getCellIterator() as $cell) {



                            if ($row->getRowIndex() != 1) { //on regarde pas la premiere ligne du tableur ,c'est les titres des colonnes
                                $value = $ChampsAnalyse[0]->getChamps();

                                if ($cell->getColumn() == "A") {
                                    $Analyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Ana' . $Value['Nom'])->findBy(array("CodeLabo" => $cell->getValue()));


                                    $Analyse[0]->setCodeLabo($Analyse[0]->getCodeLabo());
                                }

                                /*                                 * *On lit le tableau et pour chaque codelabo on va rentrer les valeurs voulu* */ elseif ($cell->getColumn() == $LimiteDebut) {

                                    $Champ = "set" . $value[$Champs]->getChamp();

                                    $Analyse[0]->$Champ($cell->getValue());
                                    ++$LimiteDebut;
                                    $Champs++;
                                }
                            }
                        }
                     
                        if ($key != 1) {
                            $em->persist($Analyse[0]);
                        }
                    }
                }
                $em->flush();


                return $this->render("Inra2013urzBundle:Analyse:Save.html.twig", array('Status' => 3));
            }
            return $this->render("Inra2013urzBundle:Default:edit.html.twig", array("protocole" => $NumProtocole, "form_path" => 'Inra2013Bundle_ImportResultat', 'type' => 'ImportResult'));
        }
    }

}

