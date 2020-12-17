<?php

namespace App\Form;

use App\Entity\Biere;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;

class UsersettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class, [
                'label' => 'Votre e-mail',
                "error_bubbling" => true,
                'attr' => [
                    'class' => 'form-control',
                ],

               'constraints' => [
                 new NotBlank([
                      'message' => 'merci de saisir une adresse email'
                   ])
               ],
                'required' => false,

            ])
            ->add('nom', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'class' => 'form-control',
                ],
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir un nom'
                    ])
                ],
                'required' => false,
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Votre prenom',
                'attr' => [
                    'class' => 'form-control',
                ],
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir un prenom'
                    ])
                ],
                'required' => false,
            ])
            ->add('username', TextType::class, [
                'label' => "Nom d'utilisateur",
                'attr' => [
                    'class' => 'form-control',
                ],
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => "merci de saisir un nom d'utilisateur"
                    ])
                ],
                'required' => false,
            ])
            ->add('date_naissance',DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                ],
                "error_bubbling" => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir une date de naissance'
                    ])
                ],
                'required' => false,

            ])
            ->add('bio', TextType::class, [
                'label' => "A propos de vous",
                'attr' => [
                    'class' => 'form-control autosize',
                    'style' => 'overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;'
                ],
                "error_bubbling" => true,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
