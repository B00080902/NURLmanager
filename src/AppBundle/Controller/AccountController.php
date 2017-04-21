<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Nurl;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * User's account
 *
 * @Route("account")
 */
class AccountController extends Controller
{
    /**
     * User's account
     *
     * @Route("/", name="account_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $session = new Session();
        $nurl = new Nurl();
        $em = $this->getDoctrine()->getManager();
        $nurlControl = new NurlController();
        /*
         * We want the user to be able to visit it's profile
         * to see its own collections
         */
        $username = $session -> get('username');

        $user = $em->getRepository('AppBundle:User')->findByUsername($username);

        $nurls = $em->getRepository('AppBundle:Nurl')->findBy(array('user' => $user));


        $templateName = 'account/index';
        return $this->render($templateName . '.html.twig', array(
            'username' => $username,
            'nurls' => $nurls
        ));
    }
}