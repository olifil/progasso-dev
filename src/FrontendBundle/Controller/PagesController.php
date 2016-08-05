<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    // homepage : / 
    public function indexAction()
    {
        return $this->render('FrontendBundle:Pages:index.html.twig');
    }
}
