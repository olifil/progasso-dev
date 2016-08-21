<?php

namespace TerritoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TerritoryBundle:Default:index.html.twig');
    }
}
