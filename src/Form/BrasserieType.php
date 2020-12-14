<?php

namespace App\Form;

use App\Entity\Adresse;
use App\Entity\Brasserie;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BrasserieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' =>
                    ['class' => 'form-control text-center',
                        'placeholder' => 'Veuillez renseigner le nom de la brasserie'],
            ])
            ->add('description', TextareaType::class, [
                'attr' =>
                    ['class' => 'form-control text-center',
                        'placeholder' => 'Veuillez renseigner la description de la brasserie']
            ])
            ->add('siteweb', UrlType::class, [
                'attr' =>
                    ['class' => 'form-control text-center',
                        'placeholder' => 'Veuillez renseigner le site web de votre brasserie']
            ] )
            ->add('telephone', TelType::class, [
                'attr' =>
                    ['class' => 'form-control text-center',
                        'placeholder' => 'Veuillez renseigner votre numéro']
            ])
            ->add('mail', EmailType::class, [
                'attr' =>
                    ['class' => 'form-control text-center',
                        'placeholder' => 'Veuillez renseigner l\'email']
            ])
            ->add('adresse', AdresseType::class, [

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Brasserie::class,
        ]);
    }
}
