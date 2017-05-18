<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    /**
     * @Route ("/blog", name="blog_list")
     */
    public function listAction()
    {
        return $this->render('default/blog.html.twig', array());
    }
 }
   
   
