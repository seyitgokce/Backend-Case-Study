<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
/**
* Matches /blog exactly
*
* @Route("/blog", name="blog_list")
*/
public function listAction()
{
// ...
    return $this->render('default/index.html.twig', [
        'base_dir' => "Hello Word",
    ]);
}

/**
* Matches /blog/*
*
* @Route("/blog/{slug}", name="blog_show")
*/
public function showAction($slug)
{
// $slug will equal the dynamic part of the URL
// e.g. at /blog/yay-routing, then $slug='yay-routing'

// ...
}
}