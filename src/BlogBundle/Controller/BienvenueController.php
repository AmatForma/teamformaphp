<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BienvenueController extends Controller
{
    /**
     * @Route("/test")
     */
    public function testAction()
    {
        return $this->render('BlogBundle:Bienvenue:test.html.twig', array(
            // ...
        ));
    }

}
