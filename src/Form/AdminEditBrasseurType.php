<?php

namespace App\Form;

use App\Entity\Brasserie;
use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminEditBrasseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('brasseur', EntityType::class, [
            "class" => User::class,
            'choice_label' => function(User $user)
            {
                if(in_array('ROLE_BRASSEUR', $user->getRoles()))
                {
                    return $user->getNom();
                }

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
            'data_class' => Brasserie::class,
        ]);
    }
}
