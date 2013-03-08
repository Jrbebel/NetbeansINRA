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
            $type = $request->request->get('demande');

            $Protocole = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->findBy(array("id" => $id));


            $Analyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($id);

            if ($type == "listing") {
                return $this->render("Inra2013urzBundle:Analyse:CreatExcel.html.twig", array("protocole" => $Protocole, "Analyse" => $Analyse, 'form_path' => 'Inra2013Bundle_ImportListing', 'form_value' => 'Importer listing', 'type' => $type, 'protocole' => $Protocole));
            } elseif ($type == "createxcel") {
                return $this->render("Inra2013urzBundle:Analyse:CreatExcel.html.twig", array("protocole" => $Protocole, "Analyse" => $Analyse, 'form_path' => 'Inra2013Bundle_CreateExcel', 'form_value' => 'Générer Fichier Excel', 'type' => $type, 'protocole' => $Protocole));
            } elseif ($type == "createanalyse") {

                return $this->render("Inra2013urzBundle:Analyse:CreatExcel.html.twig", array("protocole" => $Protocole, "Analyse" => $Analyse, 'form_path' => 'Inra2013Bundle_CreateAnalyse', 'form_value' => 'Créer analyse', 'type' => $type, 'protocole' => $Protocole));
            }
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

    /**
     * Description of SearchTypeAnalyse
     * Permet de recherche à partir du type d'analyse qui est associe a une catégorie 
     * renvoie un json.
     * page utilisé:Creer un protocole
     * @author BEBEL Jean Raynal
     */
    public function SearchTypeAnalyseAction() {

        $request = $this->get('request');

        if ($request->isXmlHttpRequest()) {

            $id = $request->request->get('id');
            $array = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:TypeAnalyse')->SearchTypeAnalyse($id);
            $reponse = new Response(json_encode($array));
            $reponse->headers->set('content-Type', 'application/json');
            return $reponse;
        }
    }

    /**
     * Description of ValidAnalyse
     * Permet de valider un protocole par un laboratin
     * @author BEBEL Jean Raynal
     */
    function ValidAnalyseAction($id) {

        /**
         * 3 etats:1 pour validation,2 pour en cours,3 pour refusée
         * 
         * * */
        $em = $this->getDoctrine()->getManager();  // On récupére l'EntityManager
        /*         * On cherche le protocole avec son Id* */
        $criteria = array('id' => $id);
        $Protocole = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->findBy($criteria);
        $Protocole[0]->setValidation(2);
        $em->persist($Protocole[0]);
        $em->flush();
        return $this->render('Inra2013urzBundle:Analyse:Save.html.twig', array('Status' => 'Encours'));
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



        $form = $this->createForm(
                new \Inra2013\urzBundle\Form\ProtocoleType(), $typeProtocole);
        /*         * On crée le formulaire pour les analyse a faire dans le protocole* */
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {

            /*             * On enregistre les analyses pour le protocole * */

            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $choix_analyse = $this->get('request')->get('choix_analyse');


                foreach ($choix_analyse as $i => $choix) {

                    $ProtocoleAnalyse[$i] = new \Inra2013\urzBundle\Entity\ProtocoleAnalyse;
                    $ProtocoleAnalyse[$i]->setProtocole($typeProtocole);
                    $TypeAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:TypeAnalyse')->findBy(array("id" => $choix));
                    $ProtocoleAnalyse[$i]->setProtocole($typeProtocole);

                    $ProtocoleAnalyse[$i]->setTypeAnalyse($TypeAnalyse[0]);
                    $em->persist($ProtocoleAnalyse[$i]);
                }


                $em->persist($typeProtocole);

                $em->flush(); //on sauvegarde le tous 

                return $this->render("Inra2013urzBundle:Analyse:CreateProtocole.html.twig", array('Status' => 'Save'));
            }
        }
        return $this->render("Inra2013urzBundle:Analyse:CreateProtocole.html.twig", array('form' => $form->createView()));
    }

    /**
     * Description of CreateAnalyse
     * Permet de rentrer les analyses pour un protocole donnée
     * @author BEBEL Jean Raynal
     */
    function CreateAnalyseAction() {

        $Status = $this->get('request')->get('Status');
        $user = $this->container->get('security.context')->getToken()->getUser(); // on récupere la fonction de l'utilisateur connecté

        $em = $this->getDoctrine()->getManager();  // On récupére l'EntityManager
        if ($this->getRequest()->getMethod() == 'GET') {  //si c est un GET alors on affiche le formulaire de recherche du protocole
            return $this->render('Inra2013urzBundle:Analyse:CreatExcel.html.twig', array('type' => 'createanalyse'));
        } else if ($this->getRequest()->getMethod() == 'POST') {


            $numProtocole = $this->get('request')->get('NumProtocole');
            $ResultTypeAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($numProtocole);



            /*             * On fait l'enregistrement des valeurs saisie pour les resultats(stade final du formulaire)* */
            if ($Status == "Enregistrer") {

                /*                 * **On crée l'objet pour l'enregistrement*
                 * $ResultTypeAnalyse renvoie les différents type analyse qui sont pour le protocole(Ex:Eosinophile,OPG,PVC)
                 * 
                 *  ** */
                foreach ($ResultTypeAnalyse as $value) {

                    /*                     * Pour chaque analyse* */


                    $CodeLabo = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->CodeLaboProtocole($value['Nom'], $numProtocole);

                    /*                     * Faut rechercher les champs pour les différent analyse(Ex: pour Eosino,il y a deux champs EosinoVal et EosinoLu)* */
                    $ChampsAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:TypeAnalyse')->findBy(array("Nom" => $value['Nom']));

                    /*                     * On a les valeurs des champs de chaque analyse* */
                    //    \Doctrine\Common\Util\Debug::dump($ChampsAnalyse);
                    foreach ($CodeLabo as $result) {

                        /*                         * ***if la valeur du $POST[Codelabo] est vide,c'est que la valeur n'a pas été rentrer** */


                        $Analyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Ana' . $value['Nom'])->findBy(array("CodeLabo" => $result->getCodeLabo()));



                        /*                         * *A partir des valeurs recu, on recupere par rapport au champs(Ex:$_POST[EsoinoVal]* */
                        /*                         * Ce sont les champs spécifiques à chaque analyse* */

                        foreach ($ChampsAnalyse[0]->getChamps() as $po) {


                            if (isset($_POST[$po->getChamp()])) { // on persist pas si le tableau de donnée est vide(pas de valeur rentré dans le formulaire)

                                /*                                 * Il faut regardé si le champ qui contient les valeurs n"est pas vide* */


                                $ValeurChamps = $_POST[$po->getChamp()]; //récupere le tableau de valeur pour le champ s en question 





                                if (!empty($ValeurChamps[$result->getCodeLabo()->getCodeLabo()])) {
                                    /*
                                     *           * Ce sont les champs qui sont recurent dans les analyses* */
                                    $Analyse[0]->setCodeLabo($result->getCodeLabo());
                                    $Analyse[0]->setUser($user);

                                    $champs = "set" . $po->getChamp(); //set du champs
                                    $Analyse[0]->$champs($ValeurChamps[$result->getCodeLabo()->getCodeLabo()]);
                                }
                            }
                        }
                    }
                }
                /*                 * *On persit l'objet et on sauvegarde le tout ** */
                $em->persist($Analyse[0]);
                $em->flush();

                return $this->render("Inra2013urzBundle:Analyse:Save.html.twig");



                /*                 * *********************************************** */
            }

            /*             * On crée les formulaires pour les différents type d'analyse* */
            /*             * Une boucle pour créer les formulaires des types analyses * */
            $CodeLabo = array();
            $Champs = array();


            foreach ($ResultTypeAnalyse as $value) {

                $ResultCodeLabo = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->CodeLaboProtocole($value['Nom'], $numProtocole);
                $CodeLabo[$value['Nom']] = $ResultCodeLabo;
                $Champs[$value['Nom']] = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Champ')->FindChampAnalyse($value['id']);
            }

            return $this->render("Inra2013urzBundle:Analyse:CreateAnalyse.html.twig", array('TypeAnalyse' => $ResultTypeAnalyse, 'ResultatCodeLabo' => $CodeLabo, 'Champs' => $Champs, 'NumProtocole' => $numProtocole));
        }
    }

    public function StatusProtocoleAction() {

        return $StatusProto;
    }

}