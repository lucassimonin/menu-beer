<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\BeerType;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="adminpage")
     * Dashboard index
     */
    public function indexAction(): Response
    {
        $beers = $this->getDoctrine()->getRepository('AppBundle:Beer')->findAllOrderBy(['number' => 'ASC']);

        return $this->render('admin/index.html.twig', ['beers' => $beers, 'classBody' => '']);
    }

    /**
     * @Route("/admin/beer/edit/{id}", name="beer_edit", requirements={"id": "\d+"})
     * Edit beer
     * @param Request $request
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function beerEditAction(Request $request, int $id = 0)
    {
        /** @var EntityManager $entityManager */
        $entityManager = $this->container->get('doctrine.orm.entity_manager');
        $repository = $entityManager->getRepository('AppBundle:Beer');
        $beer = $repository->find($id);
        if (null === $beer) {
            $this->addFlash('danger', "app.beer.not_exist");
            return $this->redirectToRoute('adminpage');
        }
        $form = $this->createForm(BeerType::class, $beer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($beer);
            $entityManager->flush();
            $this->addFlash('success', "app.beer.beer_edit");
            return $this->redirectToRoute('adminpage');
        }

        return $this->render('admin/form/edit_beer.html.twig', ['form' => $form->createView(), 'classBody' => '']);
    }
}
