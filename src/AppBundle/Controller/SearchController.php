<?php
/**
 * Created by PhpStorm.
 * User: MKluo
 * Date: 21/04/2017
 * Time: 19:24
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SearchController extends Controller
{

    /**
     * @Route("/search/results", name="search")
     */
    public function resultsAction(Request $request)
    {

        $type = $request->request->get('type');
        $query = $request->request->get('query');


        $data = $this -> getData($type,$query);

        $argsArray = [
            'type' => $type,
            'data' => $data,
            'query' => $query
        ];

        $templateName = 'search/results';

        return $this->render($templateName . '.html.twig', $argsArray);


    }


    public function getData($type,$query){

        $data = null;

        if($type == "User"){

            $data = $this -> getUsers($query);

        }

        elseif($type == "Nurl"){

            $data = $this -> getNurl($query);

        }

        elseif($type == "Collection"){

            $data = $this -> getCollection($query);

        }

        elseif($type == "Tag"){

            $data = $this -> getTag($query);

        }

        return $data;

    }

    private function getUsers($query)
    {

        $filtered = array();

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();

        if($query != null)

            foreach ($users as $user) {

                if (strpos($user -> getUsername(), $query) !== false) {
                    $filtered[] = $user;
                }

            }

        return $filtered;

    }

    private function getNurl($query)
    {

        $filtered = array();

        $em = $this->getDoctrine()->getManager();

        $nurls = $em->getRepository('AppBundle:Nurl')->findAll();


        if($query != null)
            foreach ($nurls as $nurl) {



                if (strpos($nurl -> getTitle(), $query) !== false && $nurl -> getPublic() == 'Public') {
                    $filtered[] = $nurl;
                }

            }

        return $filtered;

    }

    private function getCollection($query)
    {

        $filtered = array();

        $em = $this->getDoctrine()->getManager();

        $collections = $em->getRepository('AppBundle:Collection')->findAll();


        if($query != null)
            foreach ($collections as $collection) {



                if (strpos($collection -> getTitle(), $query) !== false) {
                    $filtered[] = $collection;
                }

            }

        return $filtered;
    }

    private function getTag($query)
    {

        $filtered = array();

        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAll();


        if($query != null)
            foreach ($tags as $tag) {



                if (strpos($tag -> getTag(), $query) !== false) {
                    $filtered[] = $tag;
                }

            }

        return $filtered;
    }


}