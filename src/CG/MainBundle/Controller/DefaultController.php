<?php

namespace CG\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render('CGMainBundle:Default:index.html.twig');
	}
	public function accountAction()
	{
		return $this->render('CGMainBundle:Default:404.html.twig');
	}
	public function servicesAction()
	{
		return $this->render('CGMainBundle:Default:services.html.twig');
	}
	public function contactAction()
	{
		return $this->render('CGMainBundle:Default:contact.html.twig');
	}
	public function aboutAction()
	{
		return $this->render('CGMainBundle:Default:about.html.twig');
	}
	public function statsAction()
	{
		return $this->render('CGMainBundle:Default:stats.html.twig');
	}
}
