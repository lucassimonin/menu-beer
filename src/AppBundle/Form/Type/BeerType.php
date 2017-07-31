<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class BeerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, [
            'required' => true
        ])
        ->add('brewery', TextType::class, [
            'required' => true
        ])
        ->add('country', TextType::class, [
            'required' => true
        ])
        ->add('type', TextType::class, [
            'required' => true
        ])
        ->add('degree', NumberType::class, [
            'required' => true
        ])
        ->add('price', MoneyType::class, [
                        'required' => true
        ])
        ->add('save', SubmitType::class, array(
            'attr' => array('class' => 'save'),
        ));
    }
}
