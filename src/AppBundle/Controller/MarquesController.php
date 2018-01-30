<?php

namespace AppBundle\Controller;

use AppBundle\Document\Links;
use AppBundle\Form\LinksType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MarquesController extends Controller
{
    /**
     * @Route("/list-marque", name="list-marque")
     */
    public function indexAction(Request $request)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $marques = $dm->getRepository('AppBundle:Marques')->findBy(array('etat' =>true));
        // replace this example code with whatever you need
        return $this->render('@App/Marques/index.html.twig', [
            'items' => $marques
        ]);
    }

    /**
     * @Route("/list-links/{marque}", name="list-links" )
     */
    public function linkAction($marque)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $link = $dm->getRepository('AppBundle:Links')->findAll();
        $links = $dm->getRepository('AppBundle:Links')->findBy(array('marque' =>$marque));
        // replace this example code with whatever you need
        return $this->render('@App/Links/index.html.twig', [
            'items' => $links,
            'marque' => $marque,
        ]);
    }
    /**
     * @Route("/add-links/{marque}", name="add-links" )
     */
    public function addLink(Request $request ,$marque)
    {

        $dm = $this->get('doctrine_mongodb')->getManager();
        $link =  new Links();
        $form = $this->createForm(LinksType::class, $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            {
                $data = $form->getData();
                $marque = $dm->getRepository("AppBundle:Marques")->find($marque);

                $link->setMarque($marque);
                $link->setProductImage($data->getProductImage());
                $link->setProductName($data->getProductName());
                $link->setProductPrice($data->getProductPrice());
                $link->setShortDescription($data->getShortDescription());
                $dm->persist($link);
                $dm->flush();
            return $this->redirect($this->generateUrl('list-links',array('marque'=>$marque->getId())));

                // insert data base
            }
        return $this->render('@App/Links/add.html.twig', array('form' => $form->createView()));
    }
}

