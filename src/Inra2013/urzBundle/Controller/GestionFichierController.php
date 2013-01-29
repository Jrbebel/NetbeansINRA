<?php

/**
 * Description of GestionFichierController
 *  Permet la gestion des fichiers d'importation,d'exportation sur différents formats.
 * @author BEBEL Jean Raynal
 */

namespace Inra2013\urzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GestionFichierController extends Controller {

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
            /*             * On regarde si le fichier est aux bon format qui est le csv(text/csv)* */ 
            
            else {
// $_FILES['nom_du_fichier']['error'] vaut 0 soit UPLOAD_ERR_OK   
                $sheet = $this->ReadExcelAction($_FILES);

                return $this->render("Inra2013urzBundle:Default:edit.html.twig", array('xls' => $sheet));
            }
            
        }







        return $this->render("Inra2013urzBundle:Default:edit.html.twig");
    }

    public function ReadExcelAction($files) {

        $excelObj = $this->get('xls.load_xls5')->load($files['files']["tmp_name"]); //load le fichier xls
//$excelObj->getActiveSheet()->getStyle('I')->getNumberFormat()->applyFromArray(
//			array(
//			'code' => PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE
//			));
        $page = 0;

        $sheet = $excelObj->getSheet($page);

        return $sheet;

        print_r('<table border="1">');

// On boucle sur les lignes
        foreach ($sheet->getRowIterator() as $row) {

            print_r('<tr>');

// On boucle sur les cellule de la ligne
            foreach ($row->getCellIterator() as $cell) {

                if ($cell->getColumn() == 'G') {

                    print_r('<td>');
                    ;
                    print_r(date('d-m-y', 41281));
                    print_r('</td>');
                }
            }

            print_r('</tr>');
        }

        print_r('<table>');
    }

}

