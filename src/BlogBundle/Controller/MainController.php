<?php 

namespace BlogBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

Class MainController extends Controller{
	/**
	*@Route("/bonjour/{nom}", name="index", requirements={"nom":"[a-zA-Z]+"})
	*/
	public function indexAction($nom)
	{
		return new Response('<h1>Bonjour'.$nom. ' </h1>');
	}



	/**
	*@Route("/gatepage")
	*/
	public function redirectAction()
	{
		return $this->redirect('http://microsoft.com');
	}


	/**
	*@Route("/redi")
	*/
	public function redirectRouteAction()
	{
		return $this->redirectToRoute('index',array('nom' => 'Youssouf'));
	}



}
