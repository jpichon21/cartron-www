<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/admin')) {
            // site_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'site_admin_homepage');
                }

                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'site_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/manage')) {
                // site_admin_homepage_add_article
                if ($pathinfo === '/admin/manageArticle') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterArticleAction',  '_route' => 'site_admin_homepage_add_article',);
                }

                // site_admin_homepage_add_video
                if ($pathinfo === '/admin/manageVideoHp') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterVideoHpAction',  '_route' => 'site_admin_homepage_add_video',);
                }

            }

            // site_admin_collection
            if ($pathinfo === '/admin/collection') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::collectionAction',  '_route' => 'site_admin_collection',);
            }

            // site_admin_add_collection
            if ($pathinfo === '/admin/manageCollection') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterCollectionAction',  '_route' => 'site_admin_add_collection',);
            }

            // site_admin_sous_menu
            if ($pathinfo === '/admin/sousMenu') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::sousMenuAction',  '_route' => 'site_admin_sous_menu',);
            }

            // site_admin_add_sous_menu
            if ($pathinfo === '/admin/manageSousMenuCollection') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterSousMenuAction',  '_route' => 'site_admin_add_sous_menu',);
            }

            // site_admin_degustation
            if ($pathinfo === '/admin/degustation') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::degustationAction',  '_route' => 'site_admin_degustation',);
            }

            // site_admin_add_degustation
            if ($pathinfo === '/admin/manageDegustation') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterDegustationAction',  '_route' => 'site_admin_add_degustation',);
            }

            // site_admin_sous_menu_degustation
            if ($pathinfo === '/admin/sousMenuDegustation') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::sousMenuDegustationAction',  '_route' => 'site_admin_sous_menu_degustation',);
            }

            // site_admin_add_sous_menu_degustation
            if ($pathinfo === '/admin/manageSousMenuDegustation') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterSousMenuDegustationAction',  '_route' => 'site_admin_add_sous_menu_degustation',);
            }

            // site_admin_produit_pro
            if (preg_match('#^/admin/(?P<id>[^/]++)/(?P<type>[^/]++)/espace_pro_produits$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_admin_produit_pro')), array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::produitAction',));
            }

            if (0 === strpos($pathinfo, '/admin/espace_pro_')) {
                if (0 === strpos($pathinfo, '/admin/espace_pro_manage')) {
                    // site_admin_manage_produits_pro
                    if ($pathinfo === '/admin/espace_pro_manageProduits') {
                        return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterProduitAction',  '_route' => 'site_admin_manage_produits_pro',);
                    }

                    // site_admin_manage_degustation_pro
                    if ($pathinfo === '/admin/espace_pro_manageDegustation') {
                        return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterProduitAction',  '_route' => 'site_admin_manage_degustation_pro',);
                    }

                }

                // site_admin_degustation_pro
                if ($pathinfo === '/admin/espace_pro_degustation') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::degustationProAction',  '_route' => 'site_admin_degustation_pro',);
                }

                // site_admin_sous_menu_produit_pro
                if ($pathinfo === '/admin/espace_pro_sous_menu_produit') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::sousMenuProduitAction',  '_route' => 'site_admin_sous_menu_produit_pro',);
                }

                if (0 === strpos($pathinfo, '/admin/espace_pro_m')) {
                    if (0 === strpos($pathinfo, '/admin/espace_pro_manage_sous_menu_')) {
                        // site_admin_manage_sous_menu_produit_pro
                        if ($pathinfo === '/admin/espace_pro_manage_sous_menu_produit') {
                            return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterSousMenuProduitAction',  '_route' => 'site_admin_manage_sous_menu_produit_pro',);
                        }

                        // site_admin_manage_sous_menu_degustation_pro
                        if ($pathinfo === '/admin/espace_pro_manage_sous_menu_degustation_pro') {
                            return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterSousMenuDegustationProAction',  '_route' => 'site_admin_manage_sous_menu_degustation_pro',);
                        }

                    }

                    // site_admin_menu_pro
                    if ($pathinfo === '/admin/espace_pro_menu_pro') {
                        return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::autreMenuAction',  '_route' => 'site_admin_menu_pro',);
                    }

                    // site_admin_manage_menu_pro
                    if ($pathinfo === '/admin/espace_pro_manage_menu_pro') {
                        return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterAutreMenuAction',  '_route' => 'site_admin_manage_menu_pro',);
                    }

                }

            }

            // listes_pays
            if ($pathinfo === '/admin/pays') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::paysAction',  '_route' => 'listes_pays',);
            }

            // ajout_pays
            if ($pathinfo === '/admin/managePays') {
                return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterPaysAction',  '_route' => 'ajout_pays',);
            }

            // supprimer
            if (0 === strpos($pathinfo, '/admin/supprimer') && preg_match('#^/admin/supprimer/(?P<table>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::supprimerAction',));
            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                // login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
                }

            }

        }

        // site_cartron_archive
        if (preg_match('#^/(?P<demande>[^/]++)/archive$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_cartron_archive')), array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::zipArchiverAction',));
        }

        // site_cartron_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site_cartron_homepage');
            }

            return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::indexAction',  '_route' => 'site_cartron_homepage',);
        }

        if (0 === strpos($pathinfo, '/co')) {
            // site_cartron_contact
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::contactAction',  '_route' => 'site_cartron_contact',);
            }

            // site_cartron_collection
            if ($pathinfo === '/collection') {
                return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::collectionAction',  '_route' => 'site_cartron_collection',);
            }

        }

        // site_cartron_collection_produit
        if (preg_match('#^/(?P<id>[^/]++)/collection_produit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_cartron_collection_produit')), array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::collectionProduitAction',));
        }

        // site_cartron_degustation
        if ($pathinfo === '/degustation') {
            return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::degustationAction',  '_route' => 'site_cartron_degustation',);
        }

        // site_cartron_degustation_produit
        if (preg_match('#^/(?P<id>[^/]++)/degustation_produit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_cartron_degustation_produit')), array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::degustationProduitAction',));
        }

        // site_cartron_first_connexion
        if ($pathinfo === '/premier_connexion') {
            return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::firstConnexionAction',  '_route' => 'site_cartron_first_connexion',);
        }

        // site_cartron_get_news
        if ($pathinfo === '/get_news') {
            return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::getNewsAction',  '_route' => 'site_cartron_get_news',);
        }

        // site_cartron_creer_compte_pro
        if ($pathinfo === '/compte') {
            return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::creerCompteAction',  '_route' => 'site_cartron_creer_compte_pro',);
        }

        // site_cartron_login_pro
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::loginAction',  '_route' => 'site_cartron_login_pro',);
        }

        // site_cartron_mpo_pro
        if ($pathinfo === '/mot_passe_oublie') {
            return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::motPasseOublieAction',  '_route' => 'site_cartron_mpo_pro',);
        }

        // site_cartron_hp_pro
        if ($pathinfo === '/accueil_pro') {
            return array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::hpProAction',  '_route' => 'site_cartron_hp_pro',);
        }

        // site_cartron_detail_produit_pro
        if (preg_match('#^/(?P<id>[^/]++)/detail_produit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_cartron_detail_produit_pro')), array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::detailProduitAction',));
        }

        // site_cartron_liste_produit_pro
        if (preg_match('#^/(?P<type>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_cartron_liste_produit_pro')), array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::listProduitAction',));
        }

        // site_cartron_page_statique
        if (preg_match('#^/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_cartron_page_statique')), array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::pageStatiqueAction',));
        }

        // myapp_choisir_langue
        if (preg_match('#^/(?P<langue>[^/]++)/choisir\\-langue/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'myapp_choisir_langue');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_choisir_langue')), array (  '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::choisirLangueAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

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

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
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

                }

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
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

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
