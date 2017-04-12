<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


/**
 * Created by PhpStorm.
 * User: adam.araru
 * Date: 4/11/2017
 * Time: 1:38 PM
 */
class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('task')
            ->add('dueDate', DateType::class, array("label" => "Due Date") )
            ->add('save', SubmitType::class)
        ;
    }
}