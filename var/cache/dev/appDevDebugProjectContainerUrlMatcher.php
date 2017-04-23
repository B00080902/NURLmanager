<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        if (0 === strpos($pathinfo, '/collection')) {
            // collection_index
            if (rtrim($pathinfo, '/') === '/collection') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_collection_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'collection_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CollectionController::indexAction',  '_route' => 'collection_index',);
            }
            not_collection_index:

            // collection_new
            if ($pathinfo === '/collection/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_collection_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CollectionController::newAction',  '_route' => 'collection_new',);
            }
            not_collection_new:

            // collection_show
            if (preg_match('#^/collection/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_collection_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'collection_show')), array (  '_controller' => 'AppBundle\\Controller\\CollectionController::showAction',));
            }
            not_collection_show:

            // collection_edit
            if (preg_match('#^/collection/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_collection_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'collection_edit')), array (  '_controller' => 'AppBundle\\Controller\\CollectionController::editAction',));
            }
            not_collection_edit:

            // collection_delete
            if (preg_match('#^/collection/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_collection_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'collection_delete')), array (  '_controller' => 'AppBundle\\Controller\\CollectionController::deleteAction',));
            }
            not_collection_delete:

            // collection_view
            if (preg_match('#^/collection/(?P<id>[^/]++)/share$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_collection_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'collection_view')), array (  '_controller' => 'AppBundle\\Controller\\CollectionController::shareAction',));
            }
            not_collection_view:

            // collection_share_share
            if (preg_match('#^/collection/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_collection_share_share;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'collection_share_share')), array (  '_controller' => 'AppBundle\\Controller\\CollectionController::shareCollectionAction',));
            }
            not_collection_share_share:

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

            // nurl_seeAll
            if ($pathinfo === '/nurl/seeAll') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nurl_seeAll;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NurlController::allAction',  '_route' => 'nurl_seeAll',);
            }
            not_nurl_seeAll:

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

            // nurl_approved
            if (preg_match('#^/nurl/(?P<id>[^/]++)/approved$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nurl_approved;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurl_approved')), array (  '_controller' => 'AppBundle\\Controller\\NurlController::approvedAction',));
            }
            not_nurl_approved:

            // nurl_report
            if (preg_match('#^/nurl/(?P<id>[^/]++)/report$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nurl_report;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nurl_report')), array (  '_controller' => 'AppBundle\\Controller\\NurlController::reportAction',));
            }
            not_nurl_report:

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

            }

        }

        if (0 === strpos($pathinfo, '/search')) {
            // search_page
            if ($pathinfo === '/search') {
                return array (  '_controller' => 'AppBundle\\Controller\\SearchController::searchAction',  '_route' => 'search_page',);
            }

            // search_results
            if ($pathinfo === '/search/results') {
                return array (  '_controller' => 'AppBundle\\Controller\\SearchController::resultsAction',  '_route' => 'search_results',);
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

            // tag_seeAll
            if ($pathinfo === '/tag/seeAll') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_seeAll;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::allAction',  '_route' => 'tag_seeAll',);
            }
            not_tag_seeAll:

            // tag_new
            if ($pathinfo === '/tag/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
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

            // tag_approved
            if (preg_match('#^/tag/(?P<id>[^/]++)/approved$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_approved;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_approved')), array (  '_controller' => 'AppBundle\\Controller\\TagController::approvedAction',));
            }
            not_tag_approved:

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
