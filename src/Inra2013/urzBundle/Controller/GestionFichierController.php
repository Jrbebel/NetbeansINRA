<?php

/**
 * Description of GestionFichierController
 *  Permet la gestion des fichiers d'importation,d'exportation sur différents formats.
 *
 * @author BEBEL Jean Raynal
 */

namespace Inra2013\urzBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PunkAve;
use PunkAve\FileUploaderBundle\Services;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class  GestionFichierController extends Controller {
    
    
    
    public function EditAction(){
$fileUploader = $this->get('punk_ave.file_uploader');

$fileUploader->syncFiles(
    array('from_folder' => '/tmp/attachments/1',
    'to_folder' => '/attachments/1',
    'remove_from_folder' => true,
    'create_to_folder' => true));
        
        return $this->render("Inra2013urzBundle:Default:edit.html.twig",array());
        
        
        
        }
    
    
 /**
 *
 * @Route("/upload", name="upload")
 * @Template()
 */
public function uploadAction()
{
    $editId = $this->getRequest()->get('editId');
    if (!preg_match('/^\d+$/', $editId))
    {
        throw new Exception("Bad edit id");
    }

    $this->get('punk_ave.file_uploader')->handleFileUpload(array('folder' => 'tmp/attachments/' . $editId));
 
}
    
    
    
}
