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
                          
                move_uploaded_file($tmp_name, $this->path . "/" . $_FILES['files']['name']); /**On bouge le fichier dans la section Resources/Upload pour pourvoir l utilisé pour l'enregistrement**/
       
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
             
      if($row->getRowIndex() != 1 )  {   
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
                        
                        $dateAnalyse = $sheet->getStyle('H1')->getNumberFormat()->toFormattedString($cell->getValue(), "M/D/YYYY");//Etant donné que le format récuperé est un float,on utilise cette fonction pour le mettre aux format date
                        $Analyse[$i]->setDateAnalyse(new \DateTime($dateAnalyse));
                        
                    }
                }

                $em->persist($Analyse[$i]); //on persist l'objet analyse
                
                 }
            }

            $i++;
            $em->flush(); //on sauvegarde dans la base
            
        }

    return $this->render('Inra2013urzBundle:Default:edit.html.twig',array("Status"=>"Enregistrement"));
    
    
    }

}

