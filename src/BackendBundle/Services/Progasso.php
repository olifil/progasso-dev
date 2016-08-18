<?php

namespace BackendBundle\Services;

class Progasso
{
    private $user;

    public function __construct($user)
    {
        $this -> user = $user -> getToken() -> getUser();
    }

    public function getApp() {
        $app = array(
            'app' => array(
                'nom' => 'proGasso',
                'email' => 'contact@geograph.fr',
                'logo' => '',
                'googleAccount' => null
            ),
            'user' => $this -> user,
            'page' => null
        );
        return $app;
    }
}
