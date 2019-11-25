<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Login;
use App\Form\Type\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        $login= new index();
        $form= $this->createForm(LoginType::class, $login);

        return $this->render('login/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}



