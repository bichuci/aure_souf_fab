<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

class UserpfimageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('profil_image', FileType::class,[
                "error_bubbling" => true,
                "constraints" => [
                    new Image([
                        "maxSize" => "2M",
                        "mimeTypes" => "image/*"
                    ])
                ],
                "attr" => [
                    'class' => 'form-control input-file text-center',
                    "id" => 'image_up'
                ],
                "mapped" => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
