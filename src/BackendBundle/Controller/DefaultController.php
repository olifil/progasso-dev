<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $progasso = $this -> get('backend_progasso') -> getApp();

        $progasso['app']['page'] = array(
            'icon' => "fa-home"
        );

        return $this->render('BackendBundle:Default:index.html.twig', array(
            'progasso' => $progasso
        ));
    }
}
