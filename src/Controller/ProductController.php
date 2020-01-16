<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="product_index", methods={"GET","POST"})
     */
    public function index(ProductRepository $productRepository , Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $images=  $form['files']->getData();
            if ($images) {

                foreach ($images as $image){

                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    //$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $originalFilename . '-' . uniqid() . '.' . $image->guessExtension();

                    // Move the file to the directory where brochures are stored
                    $i = new Image();
                    $i->setName($newFilename)->setProduct($product)->setLocation("http://localhost:8000/images/");
                    $product->addImage($i);
                    $product->setThumb($i->getName());

                    $image->move(
                        $this->getParameter('images_d'),
                        $newFilename
                    );
                }}
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_index');
        }
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/new", name="product_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images=  $form['files']->getData();
            if ($images) {

                foreach ($images as $image){

                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    //$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $originalFilename . '-' . uniqid() . '.' . $image->guessExtension();

                    // Move the file to the directory where brochures are stored
                    $i = new Image();
                    $i->setName($newFilename)->setProduct($product)->setLocation("http://localhost:8000/images/");
                    $product->addImage($i);

                    $image->move(
                        $this->getParameter('images_d'),
                        $newFilename
                    );
                }}
            $product->setThumb($images[0]->getClientOriginalName());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="product_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images=  $form['files']->getData();
            if ($images) {

                foreach ($images as $image){

                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    //$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $originalFilename . '-' . uniqid() . '.' . $image->guessExtension();

                    // Move the file to the directory where brochures are stored
                    $i = new Image();
                    $i->setName($newFilename)->setProduct($product)->setLocation("http://localhost:8000/images/");
                    $product->addImage($i);

                    $image->move(
                        $this->getParameter('images_d'),
                        $newFilename
                    );
                }}
            $product->setThumb($images[0]->getClientOriginalName());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('product_index');
    }
}
