<?php

namespace App\Form;

use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Intl\Countries;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class AdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cp', TextType::class, [
                'label' => "Code postal",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Entrez votre code postal"
                ],
                "error_bubbling" => true,

               'constraints' => [
                   new NotBlank([
                       'message' => 'merci de saisir un code postale'
                   ])
               ],

                'required' => false,

            ])
            ->add('ville', TextType::class,[
                'label' => "Ville",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Entrez le nom de votre ville"
                ],
                "error_bubbling" => true,


                'constraints' => [
                    new NotBlank([
                       'message' => 'merci de saisir une Ville'
                   ])
                ],

                'required' => false,

            ])
            ->add('rue', TextType::class, [
                'label' => "Votre rue",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Le nom de votre rue"
                ],
                "error_bubbling" => true,


                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir un nom de rue'
                    ])
                ],

                'required' => false,

            ])
            ->add('pays', TextType::class, [
                'label' => "Votre pays",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Pays"
                ],
                "error_bubbling" => true,


                'constraints' => [
                    new NotBlank([
                        'message' => 'merci de saisir un pays'
                    ])
                ],

                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}
