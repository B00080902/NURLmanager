<?php
/**
 * Created by IntelliJ IDEA.
 * User: gelmi
 * Date: 06/04/2017
 * Time: 18:15
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Nurl;
use Symfony\Component\HttpFoundation\Session\Session;
/**
 * Nurl controller.
 *
 * @Route("/collection")
 */
class NurlCollectionController extends Controller
{
    /**
     * @Route("/", name="nurls_collection_index")
     */
    public function indexAction()
    {
        // no need to put nurls array in Twig argument array - Twig can get data direct from
        $argsArray = [

        ];

        $templateName = 'collections/index';
        return $this->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * @Route("/clear", name="nurls_collection_clear")
     */
    public function clearAction()
    {
        $session = new Session();
        $session->remove('collection');

        return $this->redirectToRoute('nurls_collection_index');
    }

    /**
     * @Route("/add/{id}", name="nurls_collection_add")
     */
    public function addToNurlCart(Nurl $nurl)
    {
        // default - new empty array
        $nurls = [];

        // if no 'nurls' array in the session, add an empty array
        $session = new Session();

        if ($session->has('collection')) {

            $nurls = $session->get('collection');

        }

        // get ID of nurl
        $id = $nurl->getId();

        // only try to add to array if not already in the array
        if(!array_key_exists($id, $nurls)){

            // append $nurl to our list
            $nurls[$id] = $nurl;

            // store updated array back into the session
            $session->set('collection', $nurls);

        }

        return $this->redirectToRoute('nurls_collection_index');
    }

    /**
     * @Route("/delete/{id}", name="nurls_collection_delete")
     */
    public function deleteAction($id)
    {
        // default - new empty array
        $nurls = [];

        // if no 'nurls' array in the session, add an empty array
        $session = new Session();

        if ($session->has('collection')) {

            $nurls = $session->get('collection');

        }

        // only try to remove if it's in the array
        if (array_key_exists($id, $nurls)) {

            // remove entry with $id
            unset($nurls[$id]);

            if (sizeof($nurls) < 1) {
                return $this->redirectToRoute('nurls_collection_clear');
            }

            // store updated array back into the session
            $session->set('collection', $nurls);
        }
        return $this->redirectToRoute('nurls_collection_index');
    }

}