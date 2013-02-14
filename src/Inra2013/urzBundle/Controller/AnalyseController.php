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

    function ValidAnalyseAction() {
        
    }

    /**
     * Description of CreateProtocole
     * Permet de Créer un protocole
     * @author BEBEL Jean Raynal
     */
    function CreateProtocoleAction() {
        /*         * On crée le formulaire pour la création du protocole* */
        $typeProtocole = new \Inra2013\urzBundle\Entity\Protocole;
        $responsable = $this->container->get('security.context')->getToken()->getUser();
        $typeProtocole->setResponsable($responsable);
        $typeProtocole->setValidation(FALSE);
        $form = $this->createForm(new \Inra2013\urzBundle\Form\ProtocoleType(), $typeProtocole);
        /*         * On crée le formulaire pour les analyse a faire dans le protocole* */
       // $typeAnalyse = new \Inra2013\urzBundle\Entity\ProtocoleAnalyse;
        //$typeAnalyse->setProtocole($typeProtocole);
       // $form2 = $this->createForm(new \Inra2013\urzBundle\Form\ProtocoleAnalyseType(), $typeAnalyse);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($typeProtocole);
              //  $em->persist($typeAnalyse);
                $em->flush();

                return $this->render("Inra2013urzBundle:Analyse:CreateProtocole.html.twig", array('Status' => 'Save'));
            }
        }

        return $this->render("Inra2013urzBundle:Analyse:CreateProtocole.html.twig", array('form' => $form->createView(), 'form2' => $form2->createView()));
    }

    function CreateAnalyseAction() {

        return $this->render("Inra2013urzBundle:Analyse:CreateAnalyse.html.twig");
    }

}

?>
