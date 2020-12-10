<?php

namespace App\Form;

use App\Entity\Adresse;
use App\Entity\Biere;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class, [
                'label' => 'Votre e-mail',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre e-mail'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir une adresse email'
                    ])
                ],
                'required' => True,

            ])
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Mot de passe', 'attr' => [
                    'class' => 'form-control',
                ]),
                'second_options' => array('label' => 'Repetez votre mot de passe', 'attr' => [
                    'class' => 'form-control',
                ]),
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir un mot de passe'
                    ])
                ],
                'required' => True,

            ))

            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre nom'
                ],
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir un nom'
                    ])
                ],
                'required' => True,
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Votre prenom',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre prenom'
                ],
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir un prenom'
                    ])
                ],
                'required' => True,
            ])
            ->add('username', TextType::class, [
                'label' => "Nom d'utilisateur",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Entrez votre nom d'utilisateur"
                ],
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => "merci de saisir un nom d'utilisateur"
                    ])
                ],
                'required' => True,
            ])
            ->add('date_naissance',DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir une date de naissance'
                    ])
                ],
                'required' => True,
            ])
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
