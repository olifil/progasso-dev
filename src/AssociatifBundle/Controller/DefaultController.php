<?php

namespace AssociatifBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AssociatifBundle:Default:index.html.twig');
    }
}
