<?php

namespace App\Form;

use App\Entity\Biere;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Settings2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('telephone', TelType::class, [
                            'label' => "Numero de telphone",
                            'required' => False,
                            'attr' => [
                                'class' => 'form-control',
                                'placeholder' => "numero de telephone"
                            ],
                            "error_bubbling" => true,
                        ])
            ->add('adresse_id', AdresseType::class, [
                'label' => 'Adresse',
            ])
            ->add('biere_favorite', EntityType::class, [
                'class' => Biere::class,
                'required' => false,
                'expanded' => true,
                'multiple' => true,
                'choice_label' => function(Biere $biere){
                    return $biere->getNom();
                },
                'attr' => [
                    'class' => 'custom-select'
                ]

            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
