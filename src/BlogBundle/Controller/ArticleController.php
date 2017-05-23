<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
Use BlogBundle\Entity\Article;

class ArticleController extends Controller
{
    /**
     * @Route("/article/create")
     */
    public function createAction()
    {

        $article = new Article();
        $article->setTitre('Les aventures de Batman');
        $article->setContenu('Batman, n est pas le batman que vous connaissiez ; c est celui de PHP NOISIEL' );
        $article->setDateCreation(new \DateTime());
        $article->setAuteur('Nour');

        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return $this->render('BlogBundle:Article:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/article/affiche/{id}")
     */
    public function afficheAction(Article $article)
    {
        /*$article=$this->getDoctrine()->getRepository('BlogBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException();
        }*/
        return $this->render('BlogBundle:Article:affiche.html.twig', array('article'=>$article
        ));
    }

    /**
     * @Route("/article/supp/{id}")
     */
    public function supAction(Article $article)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        return $this->render('BlogBundle:Article:sup.html.twig', array(
            // ...
        ));
    }

}
