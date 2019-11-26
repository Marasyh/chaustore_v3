<?php

namespace App\Controller;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Chaustore3Controller extends AbstractController
{

    public function index(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->add('field_name')
            ->add('fiel_password')
        ;
        return $this->render('chaustore3/index.html.twig', [
            'controller_name' => 'Chaustore3Controller',
        ]);
    }
}
