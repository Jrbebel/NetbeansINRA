<?php

/**
 * Description of AgentrController
 *  Permet de gerer l'agent comme la creation,la suppression ou la modification.
 *
 * @author BEBEL Jean Raynal
 */

namespace Inra2013\urzBundle\Controller;

use FOS\UserBundle\Util\UserManipulator;
use Inra2013\urzBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Form\Handler\RegistrationFormHandler;
use Symfony\Component\HttpFoundation\Response;

class AgentController extends Controller {

    /**
     * function description
     * Page d'accueil pour les agents 
     */
    public function IndexAction() {


        return $this->render('Inra2013urzBundle:Default:index.html.twig');
    }

    /**
     * function description
     * Montre la liste de tout les Agents 
     */
    public function ShowAgentAction($default = "Default") {

        $paginator = $this->get('knp_paginator');
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUsers();
        $pagination = $paginator->paginate($user, $this->get('request')->query->get('page', 1)/* page number */, 10/* limit per page */
        );

        return $this->render('Inra2013urzBundle:Registration:ListeAgent.html.twig', array('liste_user' => $user, 'Status' => $default, "pagination" => $pagination));
    }
    
    /**
     * function description
     * Montre la liste de tout les Agents 
     */
    public function AccueilAction ($vide="vide"){
     
    $paginator = $this->get('knp_paginator');
    $agents=$this->get('fos_user.user_manager');
    $user=$agents->findUsers();
       
    $resultat=$paginator->paginate($user,$this->get('request')->query->get('page',1),10);
         
        return $this->render('Inra2013urzBundle:Default:index.html.twig',array('user'=>$user,'statut'=>$vide,'resultat'=>$resultat));
        
    }

    /**
     * function description
     * Activation de l'Agent pour sa connexion 
     */
    public function ActivateAgentAction($username, $enable) {

        $userManager = $this->get('fos_user.user_manager');
        $userManipulator = new UserManipulator($userManager);

        if ($enable == 1) {

            $active = $userManipulator->deactivate($username);
        } else {

            $active = $userManipulator->activate($username);
        }
        return $this->ShowAgentAction($default = "Default");
    }

    /**
     * function description
     * Creation d'un Agent 
     */
    public function CreateAgentAction() {

        $userManager = $this->get('fos_user.user_manager');
        $userMail = $this->get('fos_user.mailer');
        $formbuilder = $this->createForm(new UserType($userManager->getClass()));
        $formhandler = new RegistrationFormHandler($formbuilder, $this->get('request'), $userManager, $userMail, $this->container->get('fos_user.util.token_generator'));

        if ($formhandler->process()) {

            return $this->render('Inra2013urzBundle:Registration:save.html.twig', array('Status' => "Create"));
        }

        return $this->render('Inra2013urzBundle:Registration:register.html.twig', array('form' => $formbuilder->createView()));
    }

    /** function description
     * Mise à jour des informations de l'agent 
     */
    public function UpdateAgentAction($id) {

        $userManager = $this->get('fos_user.user_manager');
        $userMail = $this->get('fos_user.mailer');
        $user = $userManager->findUserBy(array('id' => $id));
        $formbuilder = $this->createForm(new UserType($userManager->getClass()), $user);
        $formhandler = new RegistrationFormHandler($formbuilder, $this->get('request'), $userManager, $userMail, $this->container->get('fos_user.util.token_generator'));

        if ($this->getRequest()->getMethod() == 'POST') {

            $capture = $this->getRequest()->get('Inra2013_user_registration');

            $user->setUsername($capture['username']);
            $user->setNom($capture['Nom']);
            $user->setPrenom($capture['Prenom']);
            $user->setRoles($capture['Roles']);
            $user->setEmail($capture['email']);
            $user->setPlainPassword($capture['plainPassword']['first']);
            $userManager->updateUser($user);

            return $this->render('Inra2013urzBundle:Registration:save.html.twig', array('Status' => "Update"));
        }
        return $this->render('Inra2013urzBundle:Registration:register.html.twig', array('form' => $formbuilder->createView()));
    }

    /** function description
     * Mise à jour des informations de l'agent 
     */
    public function DeleteAgentAction($id) {

        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));
        $userManager->deleteUser($user);
        $default = "Delete";
        return $this->ShowAgentAction($default);
    }

    /** function description
     * Redirection de l'agent selon sa fonction
     */
    public function RedirectionagentAction() {

        $user = $this->container->get('security.context')->getToken()->getUser()->getFonction(); // on récupere la fonction de l'utilisateur connecté
        $userId = $this->container->get('security.context')->getToken()->getUser()->getId(); // on récupere la fonction de l'utilisateur connecté
        $StatusProto = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->StatusEncours();
        $StatusProtoId = $this->getDoctrine()->getEntityManager()->getRepository('Inra2013urzBundle:Protocole')->StatusEncoursId($userId);
       
        if ($this->get('security.context')->isGranted('ROLE_ADMINISTRATEUR')) {
            return $this->render("Inra2013urzBundle:Default:IndexAdmin.html.twig");
        } elseif ($this->get('security.context')->isGranted('ROLE_RESPONSABLE')) {

            if ($user == "Laborantin(e)") {

                return $this->render("Inra2013urzBundle:Default:IndexUser.html.twig", array('response' => $StatusProto));
                
            } else if ($user == "Chercheur") {

                return $this->render("Inra2013urzBundle:Default:IndexChercheur.html.twig", array('response' => $StatusProtoId));
            }
        } elseif ($this->get('security.context')->isGranted('ROLE_UTILISATEUR')) {

            if ($user == "Laborantin(e)") {

                return $this->render("Inra2013urzBundle:Default:IndexUser.html.twig", array('response' => $StatusProto));
            } else if ($user == "Chercheur") {

   return $this->render("Inra2013urzBundle:Default:IndexChercheur.html.twig", array('response' => $StatusProtoId));
            }
        }
    }

}
