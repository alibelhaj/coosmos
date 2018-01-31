<?php

namespace AppBundle\Controller;

use AppBundle\Document\Category;
use AppBundle\Document\Links;
use AppBundle\Form\CategoryType;
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
        return $this->render('@App/Marques/index.html.twig', [
            'items' => $marques
        ]);
    }

    /**
     * @Route("/list-links/{marqueId}", name="list-links" )
     */
    public function linkAction($marqueId)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $marque = $dm->getRepository('AppBundle:Marques')->find($marqueId);
        $links = $dm->getRepository('AppBundle:Links')->findBy(array('marque'=>$marque));
        return $this->render('@App/Links/index.html.twig', [
            'items' => $links,
            'marque' => $marque,
        ]);
    }
    /**
     * @Route("/add-links/{category}/{id}", name="add-links"  , defaults={"id"=""})
     */
    public function addLink(Request $request ,$category,$id=null)
    {

        $dm = $this->get('doctrine_mongodb')->getManager();
        if ($id){
            $link = $dm->getRepository("AppBundle:Link")->find($id);
        }
        else{
            $link =  new Links();
        }
        $form = $this->createForm(LinksType::class, $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            {
                $data = $form->getData();
                $category = $dm->getRepository("AppBundle:Category")->find($category);

                $link->setCategory($category);
                $link->setProductImage($data->getProductImage());
                $link->setProductName($data->getProductName());
                $link->setProductPrice($data->getProductPrice());
                $link->setShortDescription($data->getShortDescription());
                $dm->persist($link);
                $dm->flush();
           // return $this->redirect($this->generateUrl('list-links',array('marque'=>$marque->getId())));

                // insert data base
            }
        return $this->render('@App/Links/add.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/list-categories/{marqueId}" , name="list-categories")
     */
    public function categoriesAction($marqueId)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $marque = $dm->getRepository('AppBundle:Marques')->find($marqueId);
        $categories = $dm->getRepository('AppBundle:Category')->findBy(array('marque'=>$marque));
        return $this->render('@App/Categories/index.html.twig', [
            'items' => $categories,
            'marque' => $marqueId,
        ]);
    }


    /**
     * @Route("/add-categories/{marqueId}/{id}", name="add-categories" , defaults={"id"=""} )
     */
    public function addCategoriesAction(Request $request,$marqueId,$id = null)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        if ($id) {
            $category = $dm->getRepository("AppBundle:Category")->find($id);
        }
        else{
            $category =  new Category();
        }
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        $marque = $dm->getRepository("AppBundle:Marques")->find($marqueId);

        if ($form->isSubmitted() && $form->isValid())
        {
            $category->setMarque($marque);
            $dm->persist($category);
            $dm->flush();
            return $this->redirect($this->generateUrl('list-categories',array('marqueId'=>$marqueId)));
            // insert data base
        }
        return $this->render('@App/Categories/add.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/delete-categories/{marqueId}/{id}", name="delete-categories")
     */
    public function deleteCategoriesAction($marqueId,$id = null)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $category = $dm->getRepository("AppBundle:Category")->find($id);
        $dm->remove($category);
        $dm->flush();
        return $this->redirect($this->generateUrl('list-categories',array('marqueId'=>$marqueId)));
    }


}

