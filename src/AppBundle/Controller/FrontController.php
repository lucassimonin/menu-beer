<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * Index page
     */
    public function indexAction(): Response
    {
        $beers = $this->getDoctrine()->getRepository('AppBundle:Beer')->findAllOrderBy(['number' => 'ASC']);


        return $this->render('front/index.html.twig', ['beers' => $beers]);
    }
}
