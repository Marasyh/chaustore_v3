<?php

namespace App\Controller;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Chaustore3Controller extends AbstractController
{

<<<<<<< HEAD
    public function index()
    {
        
=======
    public function index(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->add('field_name')
            ->add('fiel_password')
>>>>>>> 87e6cba02b6b0fa95e356fb5993b11d74e60ddc8
        ;
        return $this->render('chaustore3/index.html.twig', [
            'controller_name' => 'Chaustore3Controller',
        ]);
    }
}
