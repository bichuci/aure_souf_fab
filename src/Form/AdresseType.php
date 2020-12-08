<?php

namespace App\Form;

use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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

            ])
            ->add('ville', TextType::class,[
                'label' => "Ville",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Entrez le nom de votre ville"
                ],
                "error_bubbling" => true,
            ])
            ->add('rue', TextType::class, [
                'label' => "Votre rue",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Le nom de votre rue"
                ],
                "error_bubbling" => true,
            ])
            ->add('pays', TextType::class, [
                'label' => "Votre pays",
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Pays"
                ],
                "error_bubbling" => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}
