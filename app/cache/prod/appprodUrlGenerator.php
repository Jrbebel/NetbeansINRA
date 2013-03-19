<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'Inra2013urzBundle_Homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::IndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Home',    ),  ),),
        'Inra2013urzBundle_Redirectionagent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::RedirectionagentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/redirection/agent',    ),  ),),
        'Inra2013urzBundle_ShowAgent' => array (  0 =>   array (    0 => 'Default',  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::ShowAgentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'Default',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/Show',    ),  ),),
        'Inra2013urzBundle_CreateAgent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::CreateAgentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Create',    ),  ),),
        'Inra2013Bundle_UpdateAgent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::UpdateAgentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/Update',    ),  ),),
        'Inra2013Bundle_DeleteAgent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::DeleteAgentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/Delete',    ),  ),),
        'Inra2013Bundle_ActiveAgent' => array (  0 =>   array (    0 => 'username',    1 => 'enable',  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::ActivateAgentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'enable',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'username',    ),    2 =>     array (      0 => 'text',      1 => '/Admin/Active',    ),  ),),
        'Inra2013Bundle_UploadFile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::UploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/UploadFile',    ),  ),),
        'Inra2013Bundle_SaveFile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::SaveExcelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/SaveFile',    ),  ),),
        'Inra2013Bundle_CreateExcel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::CreateExcelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/CreateExcel',    ),  ),),
        'Inra2013Bundle_ImportListing' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::ImportListingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/ImportListing',    ),  ),),
        'Inra2013Bundle_ImportResultat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::ImportResultatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/ImportResultat',    ),  ),),
        'Inra2013Bundle_SearchProtocole' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::SearchProtocoleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Search/Protocole',    ),  ),),
        'Inra2013Bundle_CreateAnalyse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::CreateAnalyseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/CreateAnalyse',    ),  ),),
        'Inra2013urzBunle_VoirAnalyse' => array (  0 =>   array (    0 => 'numProtocole',  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::VoirAnalyseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'numProtocole',    ),    1 =>     array (      0 => 'text',      1 => '/User/VoirAnalyse',    ),  ),),
        'Inra2013Bundle_CreateProtocole' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::CreateProtocoleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/CreateProtocole',    ),  ),),
        'Inra2013Bundle_SearchCategorieAnalyse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::SearchAnalyseCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Search/CategorieAnalyse',    ),  ),),
        'Inra2013Bundle_SearchTypeAnalyse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::SearchTypeAnalyseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Search/TypeAnalyse',    ),  ),),
        'Inra2013Bundle_ValidAnalyse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::ValidAnalyseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User/Validation',    ),  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
