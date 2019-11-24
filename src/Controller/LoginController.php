<?php

namespace App\Controller;

use App\Entity\Login;
use App\Form\Type\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        $login = new login();
        $form = $this->createForm(LoginType::class, $login);
        return $this->render('login/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}



