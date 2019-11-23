<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Chaustore3Controller extends AbstractController
{
    /**
     * @Route("/chaustore3", name="chaustore3")
     */
    public function index()
    {
        return $this->render('chaustore3/index.html.twig', [
            'controller_name' => 'Chaustore3Controller',
        ]);
    }
}
