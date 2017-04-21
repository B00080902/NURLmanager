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
        $em = $this->getDoctrine()->getManager();

        $nurls = $em->getRepository('AppBundle:Nurl')->findBy(array('user' => $this->get('security.token_storage')->getToken()->getUser()));

        $collections = $em->getRepository('AppBundle:Collection')->findBy(array('user' => $this->get('security.token_storage')->getToken()->getUser()));

        $tags = $em->getRepository('AppBundle:Tag')->findBy(array('user' => $this->get('security.token_storage')->getToken()->getUser()));

        $templateName = 'account/index';
        return $this->render($templateName . '.html.twig', array(
            'nurls' => $nurls,
            'tags' => $tags,
            'collections' => $collections
        ));
    }
}