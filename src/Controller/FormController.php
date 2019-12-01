<?php

namespace App\Controller;

use Symfony\Entity\Form;
use Symfony\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index()
    {
         $form = $this->createForm(FormType::class, $Form);

        return $this->render('form/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

