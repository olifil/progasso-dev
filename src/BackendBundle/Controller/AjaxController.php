<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use UserBundle\Entity\User;

class AjaxController extends Controller
{
    // Modification des valeurs de l'utilisateur
    public function editUserFieldAction(User $user)
    {
        $em = $this -> getDoctrine() -> getManager();

        $fonction = $this -> getFonctionName($_POST['name']);
        $user -> $fonction($_POST['value']);

        $em -> persist($user);
        $em -> flush();

        $response = new JsonResponse();

        return $response -> setData(array(
            'success' => true,
            'msg' => 'Ok'
        ));
    }

    // Modification des valeurs du profil d'un utilisateur
    public function editUserContactFieldAction(User $user)
    {
        $em = $this -> getDoctrine() -> getManager();

        $contact = $user -> getContact();
        $fonction = $this -> getFonctionName($_POST['name']);
        $value = $_POST['value'];
        switch ($_POST['name']) {
            case 'dateNaissance':
                $value = new \DateTime($_POST['value']);
                break;
            case 'newsletter':
                if ($_POST['value'] == 'true') { $value = true; } else { $value = false; }
                break;

            default:
                $value = $_POST['value'];
                break;
        }
        $contact -> $fonction($value);

        $em -> persist($user);
        $em -> flush();

        $response = new JsonResponse();

        return $response -> setData(array(
            'success' => true,
            'msg' => 'Ok'
        ));
    }

    private function getFonctionName($name){
        return "set".$name;
    }
}
