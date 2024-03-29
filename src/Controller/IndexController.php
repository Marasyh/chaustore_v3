<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
