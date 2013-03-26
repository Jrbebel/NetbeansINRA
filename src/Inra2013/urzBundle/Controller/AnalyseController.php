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

    //private $em;


    public function __construct() {

        // $this->em=  $this->getDoctrine()->getEntityManager();
    }

    /**
     * Description of SearchProtocole
     * Permet de recherche le protocole a partir de son id 
     * à partir d'un champ input avec autocomplétion
     * @author BEBEL Jean Raynal
     */
    public function SearchProtocoleAction() {

        $request = $this->getRequest();

        if ($request->isXmlHttpRequest()) {

            $id = $_REQUEST['id'];

            $array = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->SearchProtocole($id);

            if (empty($array)) {
                $array = array(array("NomProtocole" => "Aucun protocole trouvé"));
            }
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
            } elseif ($type == "ImportResultat") {
                return $this->render("Inra2013urzBundle:Analyse:CreatExcel.html.twig", array("protocole" => $Protocole, "Analyse" => $Analyse, 'form_path' => 'Inra2013Bundle_ImportResultat', 'form_value' => 'Importer Resultat', 'type' => $type, 'protocole' => $Protocole));
            } elseif ($type == "UpdateAnalyse") {
                return $this->render("Inra2013urzBundle:Analyse:CreatExcel.html.twig", array("protocole" => $Protocole, "Analyse" => $Analyse, 'form_path' => 'Inra2013Bundle_UpdateAnalyse', 'form_value' => 'Modification Resultat', 'type' => $type, 'protocole' => $Protocole));
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

            // $id = $request->request->get('id');
            $id = $_REQUEST['id'];
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
            $id = $_REQUEST['id'];
            // $id = $request->request->get('id');
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
    function ValidAnalyseAction() {

        $NumProtocole = $this->get('request')->get('NumProtocole');
        $Status = $this->get('request')->get('Status');
        $Commentaire = $this->get('request')->get('Commentaire');
        $responsable = $this->container->get('security.context')->getToken()->getUser();
        /**
         * 3 etats:1 pour validation,2 pour en cours,3 pour refusée
         * 
         * * */
        $em = $this->getDoctrine()->getManager();  // On récupére l'EntityManager
        /*         * On cherche le protocole avec son Id* */
        $criteria = array('id' => $NumProtocole);
        $Protocole = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->findBy($criteria);
        $Protocole[0]->setValidation($Status);
        if ($Status == 2) {
            $Protocole[0]->setCommentaire($Protocole[0]->getCommentaire()); // si le commentaire est null
        } else {
            $Protocole[0]->setCommentaire($Commentaire . " Editer par " . $responsable->getPrenom() . " " . $responsable->getNom());
        }
        $em->persist($Protocole[0]);
        $em->flush();
        $this->MailerAction($Protocole);
        return $this->render('Inra2013urzBundle:Analyse:Save.html.twig', array('Status' => $Protocole[0]->getValidation()));
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
                $Protocole = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->find($typeProtocole->getNomProtocole());

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

                return $this->render("Inra2013urzBundle:Analyse:CreateProtocole.html.twig", array('Status' => 'Save', 'Num' => $typeProtocole->getNomProtocole()));
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
        $numProtocole = $this->get('request')->get('NumProtocole');
        $ResultTypeAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($numProtocole);
        $em = $this->getDoctrine()->getManager();  // On récupére l'EntityManager
        if ($this->getRequest()->getMethod() == 'GET') {  //si c est un GET alors on affiche le formulaire de recherche du protocole
            return $this->render('Inra2013urzBundle:Analyse:CreatExcel.html.twig', array('type' => 'createanalyse'));
        } else if ($this->getRequest()->getMethod() == 'POST') {


            /*             * On fait l'enregistrement des valeurs saisie pour les resultats(stade final du formulaire)* */

            if ($Status == "Enregistrer") {

                $numProtocole = $this->get('request')->get('NumProtocole');
                $ResultTypeAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($numProtocole);

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

                return $this->render("Inra2013urzBundle:Analyse:Save.html.twig", array("Status" => "SaveAnalyse"));
            }

            return $this->VoirAnalyseAction($numProtocole, $ResultTypeAnalyse);
        }
    }

    public function UpdateAnalyseAction() {


        if ($this->getRequest()->getMethod() == "POST") {

            if (isset($_POST['pk'])) {
                $Analyse = $_REQUEST['name'];
                $value = $_REQUEST['value'];
                $em = $this->getDoctrine()->getManager();
                $analyseDecompose = explode(';', $Analyse);
                $set = "set" . $analyseDecompose[1];
                $ModifAnalyse = $this->getDoctrine()->getEntityManager()->getRepository("Inra2013urzBundle:Ana" . $analyseDecompose[0])->find($analyseDecompose[2]);
                $ModifAnalyse->$set($value);
                $em->persist($ModifAnalyse);
                $em->flush();
                return new Response("OK");
            } else {
                $type = "UpdateAnalyse";
                $numProtocole = $this->get('request')->get('NumProtocole', $type);
                return $this->VoirAnalyseAction($numProtocole, $type);
            }
        } elseif ($this->getRequest()->getMethod() == 'GET') {

            return $this->render('Inra2013urzBundle:Analyse:CreatExcel.html.twig', array('type' => 'UpdateAnalyse'));
        }
    }

    public function VoirAnalyseAction($numProtocole, $type = null) {

        $ResultTypeAnalyse = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->AnalyseProtocole($numProtocole);
        $User = $this->container->get('security.context')->getToken()->getUser()->getRoles();

        $Protocole = $this->getDoctrine()->getEntityManager()->getRepository("Inra2013urzBundle:Protocole")->findBy(array('id' => $numProtocole));

        /*         * On crée les formulaires pour les différents type d'analyse* */
        /*         * Une boucle pour créer les formulaires des types analyses * */
        $CodeLabo = array();
        $Champs = array();


        foreach ($ResultTypeAnalyse as $value) {

            $ResultCodeLabo = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->CodeLaboProtocole($value['Nom'], $numProtocole);
            $CodeLabo[$value['Nom']] = $ResultCodeLabo;
            $Champs[$value['Nom']] = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Champ')->FindChampAnalyse($value['id']);
        }

        return $this->render("Inra2013urzBundle:Analyse:CreateAnalyse.html.twig", array('Resultat' => $ResultCodeLabo, 'TypeAnalyse' => $ResultTypeAnalyse, 'ResultatCodeLabo' => $CodeLabo, 'Champs' => $Champs, 'NumProtocole' => $numProtocole, 'Protocole' => $Protocole, 'Role' => $User[0], 'type' => $type));
    }

    public function MailerAction($Protocole) {

        $user = $this->container->get('security.context')->getToken()->getUser(); // on récupere la fonction de l'utilisateur connecté

        if ($Protocole[0]->getValidation() == 1) {

            $Subject = "Demande de validation pour le protocole " . $Protocole[0]->getNomProtocole() . " dirigé par" . $Protocole[0]->getResponsable()->getNom() . "  " . $Protocole[0]->getResponsable()->getPrenom();
        } elseif ($Protocole[0]->getValidation() == 3) {

            $Subject = "Demande de Refus pour le protocole " . $Protocole[0]->getNomProtocole() . " dirigé par" . $Protocole[0]->getResponsable()->getNom() . "  " . $Protocole[0]->getResponsable()->getPrenom();
        } elseif ($Protocole[0]->getValidation() == 2) {

            $Subject = "Validation du protocole " . $Protocole[0]->getNomProtocole() . " dirigé par" . $Protocole[0]->getResponsable()->getNom() . "  " . $Protocole[0]->getResponsable()->getPrenom();
        }

        $From = $user->getemail();
        $To = "jeanraynal.bebel@gmail.com";
        $body = "essai";
        $message = \Swift_Message::newInstance()
                ->setSubject($Subject)
                ->setFrom($From)
                ->setTo($To)
                ->setBody($this->renderView("Inra2013urzBundle:Analyse:Email.html.twig", array("Protocole" => $Protocole)));
        $this->get('mailer')->send($message);
        //return new Response('message a ete envoyé ');
    }

    public function CreateAnalyseBddAction() {

        $typeCategorie = new \Inra2013\urzBundle\Entity\TypeCategorie();
        $formtypeCategorie = $this->createForm(
                new \Inra2013\urzBundle\Form\TypeCategorieType(), $typeCategorie);
        $CategorieAnalyse = new \Inra2013\urzBundle\Entity\CategorieAnalyse();
        $formCategorieAnalyse = $this->createForm(
                new \Inra2013\urzBundle\Form\CategorieAnalyseType(), $CategorieAnalyse);
        $typeAnalyse = new \Inra2013\urzBundle\Entity\TypeAnalyse();
        $formtypeAnalyse = $this->createForm(
                new \Inra2013\urzBundle\Form\TypeAnalyseType(), $typeAnalyse);
        $Champ = new \Inra2013\urzBundle\Entity\Champ();
        $formChamp = $this->createForm(
                new \Inra2013\urzBundle\Form\ChampType(), $Champ);


        if ($this->get('request')->getMethod() == 'GET') {

            return $this->render("Inra2013urzBundle:Analyse:CreateTypeAnalyse.html.twig", array('form_Categorie' => $formtypeCategorie->createView(),
                        'form_CategorieAnalyse' => $formCategorieAnalyse->createView(), 'form_Champ' => $formChamp->createView(), 'form_Analyse' => $formtypeAnalyse->createView()));
        } elseif ($this->get('request')->getMethod() == 'POST') {
            $request = $this->get('request');
            $typeForm = $request->get('typeForm');
            $em = $this->getDoctrine()->getEntityManager();

            if ($typeForm == "Categorie") {
                $formtypeCategorie->bind($request);
                if ($formtypeCategorie->isValid()) {

                    $em->persist($typeCategorie);
                    $em->flush();
                    return $this->render("Inra2013urzBundle:Analyse:Save.html.twig", array("Status" => "TypeCategorie"));
                } else {
                    return $this->render("Inra2013urzBundle:Analyse:Save.html.twig", array("Status" => "TypeCategorieError"));
                }
            } elseif ($typeForm == "CategorieAnalyse") {
                $formCategorieAnalyse->bind($request);
                if ($formCategorieAnalyse->isValid()) {

                    $em->persist($CategorieAnalyse);
                    $em->flush();
                    return $this->render("Inra2013urzBundle:Analyse:Save.html.twig", array("Status" => "CategorieAnalyse"));
                } else {
                    return $this->render("Inra2013urzBundle:Analyse:Save.html.twig", array("Status" => "CategorieAnalyseError"));
                }
            } elseif ($typeForm == "Analyse") {  
                $formtypeAnalyse->bind($request);
                if ($formtypeAnalyse->isValid()) {
                    
                    // $typeAnalyse->getNom() Nom du fichier
                    //
                    foreach ($typeAnalyse->getChamps() as $value) {
                        $value->setAnalyse($typeAnalyse); 
                        
                     //   \Doctrine\Common\Util\Debug::dump($value->getChamp()); //les champs
                    }
                    
                   
                    $em->persist($typeAnalyse);
                    $em->flush();
                    $this->GenerationAnalyse($typeAnalyse);
                    return $this->render("Inra2013urzBundle:Analyse:Save.html.twig", array("Status" => "Analyse"));
                    
                } else {
                    
                    return $this->render("Inra2013urzBundle:Analyse:Save.html.twig", array("Status" => "AnalyseError"));
                }
            } 
        }


    }
    
    public function GenerationAnalyse($Entity){
      
        /*         * ******On crée un fichier dans le dossier entity******* */
        $path = dirname(__FILE__) . "/../Entity";
        $fichier = fopen($path . "/Ana".$Entity->getNom().".php", "a");
        /*         * *On rentre les information voulue comme les champs etc ** */
        fputs($fichier, '<?php 
   
namespace Inra2013\urzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnaEssai
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ana'.$Entity->getNom().'
{
      /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\Analyse")
     * @ORM\JoinColumn(name="CodeLabo", referencedColumnName="CodeLabo")
     */
    private $CodeLabo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Essai", type="integer", nullable=true)
     */
    private $Essai;
    
  /**
     *  *@ORM\ManyToOne(targetEntity="Inra2013\urzBundle\Entity\User")
     * 
     */
    private $User;

    /**
     * Get id
     *
     * @return integer 
     */
    
     }');


        /*         * *On genere les setters et les getters avec la commande de symfony php console generate:doctrine:entities Inra2013urzBundle:Entity:AnaEssai** */

        $path_console = dirname(__FILE__) . "/../../../../app/";
        $commandeEntities = "console generate:doctrine:entities Inra2013urzBundle:AnaEssai";
        $resultatEntities = exec("php " . $path_console . $commandeEntities);

        /*         * **On la cree dans la base de données** */

        $commandeCreate = "console doctrine:schema:update --force";
        $resultatCreate = exec("php " . $path_console . $commandeCreate);
        //print_r("php " . $path_console . $commande);

        return new Response("je si dans ");  
        
    }

}