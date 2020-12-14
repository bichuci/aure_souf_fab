<?php

namespace App\Form;

use App\Entity\Biere;
use App\Entity\Brasserie;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' =>
                    ['class' => 'form-control text-center',
                    'placeholder' => 'Veuillez renseigner le nom de la bière'],
            ])
            ->add('description', TextareaType::class, [
                'attr' =>
                    ['class' => 'form-control text-center',
                        'placeholder' => 'Veuillez renseigner la description de la bière'],
            ])
            ->add('date_creation', DateType::class, [
                'widget'=>'single_text',
                'attr'=>
                    ['class' => 'form-control text-center']
            ])
            ->add('brasserie_id', EntityType::class, [
                'class' => Brasserie::class,
                'choice_label' => function(Brasserie $brasserie)
                {
                    return $brasserie->getNom();
                },
                'attr' => [
                    'class' => 'custom-select text-center'
                ]
            ])
            ->add('categorie_id', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => function(Categorie $categorie)
                {
                    return $categorie->getNom();
                },
                'attr' => [
                    'class' => 'custom-select text-center'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Biere::class,
        ]);
    }
}
