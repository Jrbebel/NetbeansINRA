<?php

/**
 * Description of GestionFichierController
 *  Permet la gestion des fichiers d'importation,d'exportation sur différents formats.
 * @author BEBEL Jean Raynal
 */

namespace Inra2013\urzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Inra2013\urzBundle\Entity\Animal;
use Inra2013\urzBundle\Entity\Analyse;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;

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

                return $this->render("Inra2013urzBundle:Default:edit.html.twig", array('xls' => $sheet, 'file' => $_FILES['files']['name']));
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


        $em = $this->getDoctrine()->getManager();  // On récupére l'EntityManager
        $i = 0;

        foreach ($sheet->getRowIterator() as $row) {
            $Analyse[$i] = new Analyse();

            // On prend pas la première ligne du tableau,c'est les titre du tableau

            foreach ($row->getCellIterator() as $cell) {

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

                    $em->persist($Analyse[$i]); //on persist l'objet analyse
                }
            }

            $i++;
            $em->flush(); //on sauvegarde dans la base
            /* faut que je supprime le fichier uploader qui est enregistrer sur le serveur* */
        }

        return $this->render('Inra2013urzBundle:Default:edit.html.twig', array("Status" => "Enregistrement"));
    }

    /**
     * Description of CreateExcelAction
     * Permet de creer un fichier excel pour l'importation 
     * @param $file : fichier upload 
     * @author BEBEL Jean Raynal
     */
    public function CreateExcelAction() {

        if ($this->getRequest()->getMethod() == 'GET') {  //si c est un GET alors on affiche le formulaire de recherche de protocole
            return $this->render('Inra2013urzBundle:Analyse:CreatExcel.html.twig');
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
        $excelService->excelObj->getActiveSheet()->getRowDimension()->setRowHeight($pts);


        /*         * Un peut de style dans les cellules qui contient les titres les obligatoire seront en vet et les optionnels * */
        /*         * Pour les champs obligatoires* */
        foreach (range($LimiteDebutObli, $LimiteFinObli) as $i) { //Boucle jusqu'a J pour applique le style
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

        /*         * Pour les champs optionnels* */

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


        // create the object see http://phpexcel.codeplex.com documentation
        $excelService->excelObj->getProperties()->setCreator($Auteur)
                ->setLastModifiedBy($Auteur)
                ->setTitle($Title)
                ->setSubject($Subject)
                ->setDescription($Description);
        // ->setKeywords("office 2005 openxml php")
        //->setCategory("Test result file");
        $Protocole = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($id);

        foreach ($Protocole as $Resultat => $Key) {
            $objWorkSheet[$Resultat] = $excelService->excelObj->createSheet();

            $objWorkSheet[$Resultat]->setTitle($Key['Nom']);

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

            /*             * *On recupère toute les resultats du protocole* */




            /*             * Rajouter des feuilles au fichier excel* */
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

}

