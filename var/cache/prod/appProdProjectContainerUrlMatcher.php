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

        // index
        if (preg_match('#^/(?P<slug>\\d+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'index')), array (  'slug' => false,  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',));
        }

        // emailcampaigns
        if ($pathinfo === '/emailcampaigns') {
            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::emailcampaignsAction',  '_route' => 'emailcampaigns',);
        }

        // newemailtempl
        if ($pathinfo === '/newemailtempl') {
            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::newemailtemplAction',  '_route' => 'newemailtempl',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // allstats
            if ($pathinfo === '/allstats') {
                return array (  '_controller' => 'AppBundle\\Controller\\StatsRecalculation::allstatsAction',  '_route' => 'allstats',);
            }

            // annualstats
            if ($pathinfo === '/annualstats') {
                return array (  '_controller' => 'AppBundle\\Controller\\StatsRecalculation::annualstatsAction',  '_route' => 'annualstats',);
            }

        }

        // monthlystats
        if ($pathinfo === '/monthlystats') {
            return array (  '_controller' => 'AppBundle\\Controller\\StatsRecalculation::monthlystatsAction',  '_route' => 'monthlystats',);
        }

        // weeklystats
        if ($pathinfo === '/weeklystats') {
            return array (  '_controller' => 'AppBundle\\Controller\\StatsRecalculation::weeklystatsAction',  '_route' => 'weeklystats',);
        }

        // dailystats
        if ($pathinfo === '/dailystats') {
            return array (  '_controller' => 'AppBundle\\Controller\\StatsRecalculation::dailystatsAction',  '_route' => 'dailystats',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // admin
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin')), array (  '_controller' => 'AppBundle:AdminController:index',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
