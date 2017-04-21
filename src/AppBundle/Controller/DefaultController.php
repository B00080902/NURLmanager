<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $default_colours = '';
            // create colours array
        $colours = [
            'foreground' => 'black',
            'background' => 'darkgrey'
        ];

        // store colours in session 'colours'
        $session = new Session();
        $session->set('colours', $colours);

        $argsArray = [
            'name' => 'Gelmis'
        ];

        $templateName = 'default/index';
        return $this->render($templateName . '.html.twig', $argsArray);
    }
}
