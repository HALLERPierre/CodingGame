<?php

namespace CG\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	public function blogAction()
	{
		return $this->render('CGMainBundle:Default:blog-home.html.twig');
	}
	public function articleAction($id)
	{
		return $this->render('CGMainBundle:Default:blog-post.html.twig');
	}
	
}
