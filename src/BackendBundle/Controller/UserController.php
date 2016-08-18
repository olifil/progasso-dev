<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function showAction()
    {
        $progasso = $this -> get('backend_progasso') -> getApp();

        $progasso['app']['page'] = array(
            'icon' => "fa-user"
        );

        return $this->render('BackendBundle:User:profile.html.twig', array(
            'progasso' => $progasso
        ));
    }
}
