<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/')) {
            // Inra2013urzBundle_Homepage
            if ($pathinfo === '/Home') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::IndexAction',  '_route' => 'Inra2013urzBundle_Homepage',);
            }

            // Inra2013urzBundle_Redirectionagent
            if ($pathinfo === '/redirection/agent') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::RedirectionagentAction',  '_route' => 'Inra2013urzBundle_Redirectionagent',);
            }

            // Inra2013urzBundle_ShowAgent
            if (0 === strpos($pathinfo, '/Admin/Show') && preg_match('#^/Admin/Show/(?P<Default>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::ShowAgentAction',)), array('_route' => 'Inra2013urzBundle_ShowAgent'));
            }

            // Inra2013urzBundle_CreateAgent
            if ($pathinfo === '/Admin/Create') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::CreateAgentAction',  '_route' => 'Inra2013urzBundle_CreateAgent',);
            }

            // Inra2013Bundle_UpdateAgent
            if (0 === strpos($pathinfo, '/Admin/Update') && preg_match('#^/Admin/Update/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::UpdateAgentAction',)), array('_route' => 'Inra2013Bundle_UpdateAgent'));
            }

            // Inra2013Bundle_DeleteAgent
            if (0 === strpos($pathinfo, '/Admin/Delete') && preg_match('#^/Admin/Delete/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::DeleteAgentAction',)), array('_route' => 'Inra2013Bundle_DeleteAgent'));
            }

            // Inra2013Bundle_ActiveAgent
            if (0 === strpos($pathinfo, '/Admin/Active') && preg_match('#^/Admin/Active/(?P<username>[^/]+)/(?P<enable>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AgentController::ActivateAgentAction',)), array('_route' => 'Inra2013Bundle_ActiveAgent'));
            }

            // Inra2013Bundle_UploadFile
            if ($pathinfo === '/User/UploadFile') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::UploadAction',  '_route' => 'Inra2013Bundle_UploadFile',);
            }

            // Inra2013Bundle_SaveFile
            if ($pathinfo === '/User/SaveFile') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::SaveExcelAction',  '_route' => 'Inra2013Bundle_SaveFile',);
            }

            // Inra2013Bundle_CreateExcel
            if ($pathinfo === '/User/CreateExcel') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::CreateExcelAction',  '_route' => 'Inra2013Bundle_CreateExcel',);
            }

            // Inra2013Bundle_ImportListing
            if ($pathinfo === '/User/ImportListing') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::ImportListingAction',  '_route' => 'Inra2013Bundle_ImportListing',);
            }

            // Inra2013Bundle_ImportResultat
            if ($pathinfo === '/User/ImportResultat') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\GestionFichierController::ImportResultatAction',  '_route' => 'Inra2013Bundle_ImportResultat',);
            }

            // Inra2013Bundle_SearchProtocole
            if ($pathinfo === '/Search/Protocole') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::SearchProtocoleAction',  '_route' => 'Inra2013Bundle_SearchProtocole',);
            }

            // Inra2013Bundle_CudAnalyse
            if ($pathinfo === '/User/CudAnalyse') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::CudAnalyseAction',  '_route' => 'Inra2013Bundle_CudAnalyse',);
            }

            // Inra2013Bundle_VoirAnalyse
            if ($pathinfo === '/User/VoirAnalyse') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::VoirAnalyseAction',  '_route' => 'Inra2013Bundle_VoirAnalyse',);
            }

            // Inra2013Bundle_VoirAnalyseChercheur
            if ($pathinfo === '/User/VoirAnalyseFini') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::VoirAnalyseChercheurAction',  '_route' => 'Inra2013Bundle_VoirAnalyseChercheur',);
            }

            // Inra2013Bundle_CreateAnalyse
            if ($pathinfo === '/User/CreateAnalyse') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::CreateAnalyseAction',  '_route' => 'Inra2013Bundle_CreateAnalyse',);
            }

            // Inra2013Bundle_UpdateAnalyse
            if ($pathinfo === '/User/UpdateAnalyse') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::UpdateAnalyseAction',  '_route' => 'Inra2013Bundle_UpdateAnalyse',);
            }

            // Inra2013Bundle_CreateProtocole
            if ($pathinfo === '/CreateProtocole') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::CreateProtocoleAction',  '_route' => 'Inra2013Bundle_CreateProtocole',);
            }

            // Inra2013Bundle_SearchCategorieAnalyse
            if ($pathinfo === '/Search/CategorieAnalyse') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::SearchAnalyseCategorieAction',  '_route' => 'Inra2013Bundle_SearchCategorieAnalyse',);
            }

            // Inra2013Bundle_SearchTypeAnalyse
            if ($pathinfo === '/Search/TypeAnalyse') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::SearchTypeAnalyseAction',  '_route' => 'Inra2013Bundle_SearchTypeAnalyse',);
            }

            // Inra2013Bundle_SearchChamp
            if ($pathinfo === '/Search/Champ') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::SearchChampAction',  '_route' => 'Inra2013Bundle_SearchChamp',);
            }

            // Inra2013Bundle_ValidAnalyse
            if ($pathinfo === '/User/Validation') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::ValidAnalyseAction',  '_route' => 'Inra2013Bundle_ValidAnalyse',);
            }

            // Inra2013Bundle_CreateAnalyseBdd
            if ($pathinfo === '/User/AnalyseCreate') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::CreateAnalyseBddAction',  '_route' => 'Inra2013Bundle_CreateAnalyseBdd',);
            }

            // Inra2013Bundle_FormuleChamp
            if ($pathinfo === '/User/FormuleChamp') {
                return array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::FormuleChampAction',  '_route' => 'Inra2013Bundle_FormuleChamp',);
            }

            // Inra2013Bundle_Save
            if (0 === strpos($pathinfo, '/User/Save') && preg_match('#^/User/Save/(?P<Status>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Inra2013\\urzBundle\\Controller\\AnalyseController::SaveAction',)), array('_route' => 'Inra2013Bundle_Save'));
            }

        }

        if (0 === strpos($pathinfo, '/')) {
            // fos_user_security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
