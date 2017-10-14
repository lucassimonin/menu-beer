<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class BeerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, [
            'required' => true,
            'label' => 'app.beer.name'
        ])
        ->add('brewery', TextType::class, [
            'required' => true,
            'label' => 'app.beer.brewery'
        ])
        ->add('country', ChoiceType::class, [
            'choices' => [
                'app.global.france' => 'france',
                'app.global.allemagne' => 'allemagne',
                'app.global.angleterre' => 'angleterre',
                'app.global.argentine' => 'argentine',
                'app.global.australie' => 'australie',
                'app.global.autriche' => 'autriche',
                'app.global.belgique' => 'belgique',
                'app.global.canada' => 'canada',
                'app.global.chine' => 'chine',
                'app.global.cuba' => 'cuba',
                'app.global.danemark' => 'danemark',
                'app.global.ecosse' => 'ecosse',
                'app.global.espagne' => 'espagne',
                'app.global.hollande' => 'hollande',
                'app.global.inde' => 'inde',
                'app.global.irelande' => 'irelande',
                'app.global.italie' => 'italie',
                'app.global.jamaique' => 'jamaique',
                'app.global.japon' => 'japon',
                'app.global.maroc' => 'maroc',
                'app.global.mexique' => 'mexique',
                'app.global.norvege' => 'norvege',
                'app.global.nouvelle_zelande' => 'nouvelle_zelande',
                'app.global.pays_de_galles' => 'pays_de_galles',
                'app.global.pologne' => 'pologne',
                'app.global.portugal' => 'portugal',
                'app.global.republique_tcheque' => 'republique_tcheque',
                'app.global.sri_lanka' => 'sri_lanka',
                'app.global.suede' => 'suede',
                'app.global.usa' => 'usa',
                'app.global.vietnam' => 'vietnam',
            ],
            'label' => 'app.beer.country',
            'required' => true
        ])
        ->add('type', TextType::class, [
            'label' => 'app.beer.type',
            'required' => true
        ])
        ->add('price', MoneyType::class, [
            'required' => true,
            'label' => 'app.beer.price'
        ])
        ->add('price2', MoneyType::class, [
            'required' => true,
            'label' => 'app.beer.price2'
        ])
        ->add('save', SubmitType::class, array(
            'attr' => array('class' => 'save'),
            'label' => 'app.global.save'
        ));
    }
}
