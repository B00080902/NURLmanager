<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Nurl;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Nurl controller.
 *
 * @Route("/search")
 */
class SearchController extends Controller
{
    /**
     * Lists all nurl search entities.
     *
     * @Route("/", name="search_index")
     *
     * @Method("POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $result = $request -> request -> get('search');

        $collections = $em->getRepository('AppBundle:Collection')->findAll();

//        $query = $em->createQuery(
//            '   SELECT ', $result ,' FROM AppBundle:Collection
//                WHERE title LIKE ', $result ,'; '
//        )->getOneOrNullResult();

        $query = $collections->createQueryBuilder('title')
            ->where('title = ', $result)
            ->getQuery();

        return $this->render('search/index.html.twig', array(
            'result' => $result,
            'collections' => $collections,
            'query' => $query
        ));
    }
}