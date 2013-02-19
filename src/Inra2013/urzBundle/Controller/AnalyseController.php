<?php

/**
 * Description of AnalyseController
 * Contiendra toutes les functions concernant les analyses
 * @author BEBEL Jean Raynal
 */

namespace Inra2013\urzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AnalyseController extends Controller {

    /**
     * Description of SearchProtocole
     * Permet de recherche le protocole a partir de son id 
     * à partir d'un champ input avec autocomplétion
     * @author BEBEL Jean Raynal
     */
    public function SearchProtocoleAction() {

        $request = $this->get('request');

        if ($request->isXmlHttpRequest()) {

            $id = $request->request->get('id');
            $array = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->SearchProtocole($id);
            $reponse = new Response(json_encode($array));
            $reponse->headers->set('content-Type', 'application/json');
            return $reponse;
        } elseif ($this->getRequest()->getMethod() == "POST") {

            $id = $request->request->get("idprotocole");

            $Protocole = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->findBy(array("id" => $id));


            $Analyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($id);


            return $this->render("Inra2013urzBundle:Analyse:CreatExcel.html.twig", array("protocole" => $Protocole, "Analyse" => $Analyse));
        }
    }

    /**
     * Description of SearchAnalyseCategorie
     * Permet de recherche à partir du type de categorie,les categorie d'analyse associés 
     * renvoie un json.
     * page utilisé:Creer un protocole
     * @author BEBEL Jean Raynal
     */
    public function SearchAnalyseCategorieAction() {

        $request = $this->get('request');

        if ($request->isXmlHttpRequest()) {

            $id = $request->request->get('id');

            $array = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:CategorieAnalyse')->SearchCategorieAnalyse($id);


            $reponse = new Response(json_encode($array));

            $reponse->headers->set('content-Type', 'application/json');
            return $reponse;
        }
    }

    function ValidAnalyseAction() {
        
    }

    /**
     * Description of CreateProtocole
     * Permet de Créer un protocole
     * @author BEBEL Jean Raynal
     */
    function CreateProtocoleAction() {
        //   \Doctrine\Common\Util\Debug::dump($_POST);

        /*         * On crée le formulaire pour la création du protocole* */
        $typeProtocole = new \Inra2013\urzBundle\Entity\Protocole;
        $ProtocoleAnalyse = new \Inra2013\urzBundle\Entity\ProtocoleAnalyse;
        $responsable = $this->container->get('security.context')->getToken()->getUser();
        $typeProtocole->setResponsable($responsable);
        $typeProtocole->setValidation(FALSE);


        $ProtocoleAnalyse->setProtocole($typeProtocole);
        $form = $this->createForm(
                new \Inra2013\urzBundle\Form\ProtocoleType(), $typeProtocole);
        /*         * On crée le formulaire pour les analyse a faire dans le protocole* */
        // $typeAnalyse = new \Inra2013\urzBundle\Entity\ProtocoleAnalyse;
        // $form2 = $this->createForm(new \Inra2013\urzBundle\Form\ProtocoleAnalyseType(), $typeAnalyse);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {

            /*             * On enregistre les analyses pour le protocole * */
        }
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $choix_analyse = $this->get('request')->get('choix_analyse');

            foreach ($choix_analyse as $choix) {

                $CategorieAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:CategorieAnalyse')->findBy(array("id" => $choix));
                $ProtocoleAnalyse->setProtocole($typeProtocole);
               
                $ProtocoleAnalyse->setTypeAnalyse($CategorieAnalyse[0]);
                $em->persist($ProtocoleAnalyse);
            }
  
            $typeProtocole->setAnalyse($ProtocoleAnalyse);
            \Doctrine\Common\Util\Debug::dump($ProtocoleAnalyse);
            $em->persist($typeProtocole);

            $em->flush();

            return $this->render("Inra2013urzBundle:Analyse:CreateProtocole.html.twig", array('Status' => 'Save'));
        }


        return $this->render("Inra2013urzBundle:Analyse:CreateProtocole.html.twig", array('form' => $form->createView()));
    }

    /**
     * Description of CreateAnalyse
     * Permet de rentrer les analyses pour un protocole donnée
     * @author BEBEL Jean Raynal
     */
    function CreateAnalyseAction() {

        return $this->render("Inra2013urzBundle:Analyse:CreateAnalyse.html.twig");
    }

}

?>
