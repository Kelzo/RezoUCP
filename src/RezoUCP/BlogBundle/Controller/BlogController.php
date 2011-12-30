<?php

namespace RezoUCP\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
   
    public function indexAction($nom)
    {
        return $this->render('RezoUCPBlogBundle:Blog:index.html.twig',array('nom' => $nom));
    }
	

}
 