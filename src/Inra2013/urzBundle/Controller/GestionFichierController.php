<?php

/**
 * Description of GestionFichierController
 *  Permet la gestion des fichiers d'importation,d'exportation sur différents formats.
 *
 * @author BEBEL Jean Raynal
 */

namespace Inra2013\urzBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class  GestionFichierController extends Controller {
    
    
    
    public function UploadfileAction(){
        
        
        return $this->render("Inra2013urzBundle:Default:Uploadfiles.html.twig");
        
        
        
        }
    
    
    
    
    
    
}
