<?php

namespace App\Controller;

use App\Entity\WhishList;
use App\Form\WhishListType;
use App\Repository\WhishListRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/whish/list")
 */
class WhishListController extends AbstractController
{
    /**
     * @Route("/", name="whish_list_index", methods={"GET"})
     */
    public function index(WhishListRepository $whishListRepository): Response
    {
        return $this->render('whish_list/index.html.twig', [
            'whish_lists' => $whishListRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="whish_list_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $whishList = new WhishList();
        $form = $this->createForm(WhishListType::class, $whishList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($whishList);
            $entityManager->flush();

            return $this->redirectToRoute('whish_list_index');
        }

        return $this->render('whish_list/new.html.twig', [
            'whish_list' => $whishList,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="whish_list_show", methods={"GET"})
     */
    public function show(WhishList $whishList): Response
    {
        return $this->render('whish_list/show.html.twig', [
            'whish_list' => $whishList,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="whish_list_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, WhishList $whishList): Response
    {
        $form = $this->createForm(WhishListType::class, $whishList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('whish_list_index');
        }

        return $this->render('whish_list/edit.html.twig', [
            'whish_list' => $whishList,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="whish_list_delete", methods={"DELETE"})
     */
    public function delete(Request $request, WhishList $whishList): Response
    {
        if ($this->isCsrfTokenValid('delete'.$whishList->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($whishList);
            $entityManager->flush();
        }

        return $this->redirectToRoute('whish_list_index');
    }
}
