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

        if (0 === strpos($pathinfo, '/a')) {
            // account_index
            if (rtrim($pathinfo, '/') === '/account') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_account_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'account_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AccountController::indexAction',  '_route' => 'account_index',);
            }
            not_account_index:

            // admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_index',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/collection')) {
            // nurls_collection_index
            if (rtrim($pathinfo, '/') === '/collection') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nurls_collection_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NurlCollectionController::indexAction',  '_route' => 'nurls_collection_index',);
            }

            // nurls_collection_clear
            if ($pathinfo === '/collection/clear') {
                return array (  '_controller' => 'AppBundle\\Controller\\NurlCollectionController::clearAction',  '_route' => 'nurls_collection_clear',);
            }

            // nurls_collection_add
            if (0 === strpos($pathinfo, '/collection/add') && preg_match('#^/collection/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurls_collection_add')), array (  '_controller' => 'AppBundle\\Controller\\NurlCollectionController::addToNurlCart',));
            }

            // nurls_collection_delete
            if (0 === strpos($pathinfo, '/collection/delete') && preg_match('#^/collection/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurls_collection_delete')), array (  '_controller' => 'AppBundle\\Controller\\NurlCollectionController::deleteAction',));
            }

        }

        // user_registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
