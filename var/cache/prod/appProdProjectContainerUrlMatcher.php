<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/basket')) {
            // nurls_basket_index
            if (rtrim($pathinfo, '/') === '/basket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nurls_basket_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NurlBasketController::indexAction',  '_route' => 'nurls_basket_index',);
            }

            // nurls_basket_clear
            if ($pathinfo === '/basket/clear') {
                return array (  '_controller' => 'AppBundle\\Controller\\NurlBasketController::clearAction',  '_route' => 'nurls_basket_clear',);
            }

            // nurls_basket_add
            if (0 === strpos($pathinfo, '/basket/add') && preg_match('#^/basket/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurls_basket_add')), array (  '_controller' => 'AppBundle\\Controller\\NurlBasketController::addToNurlCart',));
            }

            // nurls_basket_delete
            if (0 === strpos($pathinfo, '/basket/delete') && preg_match('#^/basket/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurls_basket_delete')), array (  '_controller' => 'AppBundle\\Controller\\NurlBasketController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/nurl')) {
            // nurl_index
            if (rtrim($pathinfo, '/') === '/nurl') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nurl_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nurl_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NurlController::indexAction',  '_route' => 'nurl_index',);
            }
            not_nurl_index:

            // nurl_new
            if ($pathinfo === '/nurl/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nurl_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NurlController::newAction',  '_route' => 'nurl_new',);
            }
            not_nurl_new:

            // nurl_show
            if (preg_match('#^/nurl/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nurl_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurl_show')), array (  '_controller' => 'AppBundle\\Controller\\NurlController::showAction',));
            }
            not_nurl_show:

            // nurl_edit
            if (preg_match('#^/nurl/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nurl_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurl_edit')), array (  '_controller' => 'AppBundle\\Controller\\NurlController::editAction',));
            }
            not_nurl_edit:

            // nurl_delete
            if (preg_match('#^/nurl/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_nurl_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurl_delete')), array (  '_controller' => 'AppBundle\\Controller\\NurlController::deleteAction',));
            }
            not_nurl_delete:

            // nurl_upvote
            if (preg_match('#^/nurl/(?P<id>[^/]++)/upvote$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nurl_upvote;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurl_upvote')), array (  '_controller' => 'AppBundle\\Controller\\NurlController::upvoteAction',));
            }
            not_nurl_upvote:

            // nurl_downvote
            if (preg_match('#^/nurl/(?P<id>[^/]++)/downvote$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nurl_downvote;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurl_downvote')), array (  '_controller' => 'AppBundle\\Controller\\NurlController::downvoteAction',));
            }
            not_nurl_downvote:

        }

        if (0 === strpos($pathinfo, '/re')) {
            // user_registration
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
            }

            if (0 === strpos($pathinfo, '/report')) {
                // report_index
                if (rtrim($pathinfo, '/') === '/report') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_report_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'report_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ReportController::indexAction',  '_route' => 'report_index',);
                }
                not_report_index:

                // report_new
                if (preg_match('#^/report/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_report_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_new')), array (  '_controller' => 'AppBundle\\Controller\\ReportController::newAction',));
                }
                not_report_new:

                // report_show
                if (preg_match('#^/report/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_report_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_show')), array (  '_controller' => 'AppBundle\\Controller\\ReportController::showAction',));
                }
                not_report_show:

                // report_edit
                if (preg_match('#^/report/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_report_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_edit')), array (  '_controller' => 'AppBundle\\Controller\\ReportController::editAction',));
                }
                not_report_edit:

                // report_delete
                if (preg_match('#^/report/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_report_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_delete')), array (  '_controller' => 'AppBundle\\Controller\\ReportController::deleteAction',));
                }
                not_report_delete:

                // report_submit
                if ($pathinfo === '/report/submit') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_report_submit;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ReportController::submitAction',  '_route' => 'report_submit',);
                }
                not_report_submit:

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/tag')) {
            // tag_index
            if (rtrim($pathinfo, '/') === '/tag') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tag_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::indexAction',  '_route' => 'tag_index',);
            }
            not_tag_index:

            // tag_new
            if (preg_match('#^/tag/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_new')), array (  '_controller' => 'AppBundle\\Controller\\TagController::newAction',));
            }
            not_tag_new:

            // tag_show
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'AppBundle\\Controller\\TagController::showAction',));
            }
            not_tag_show:

            // tag_edit
            if (preg_match('#^/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'AppBundle\\Controller\\TagController::editAction',));
            }
            not_tag_edit:

            // tag_delete
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tag_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'AppBundle\\Controller\\TagController::deleteAction',));
            }
            not_tag_delete:

            // tag_upvote
            if (preg_match('#^/tag/(?P<id>[^/]++)/upvote$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_upvote;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_upvote')), array (  '_controller' => 'AppBundle\\Controller\\TagController::upvoteAction',));
            }
            not_tag_upvote:

            // tag_downvote
            if (preg_match('#^/tag/(?P<id>[^/]++)/downvote$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_downvote;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_downvote')), array (  '_controller' => 'AppBundle\\Controller\\TagController::downvoteAction',));
            }
            not_tag_downvote:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
