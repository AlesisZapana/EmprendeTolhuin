<?php

namespace App\Form;

use App\Entity\Emprendimiento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Foto;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Security\Core\Security;

class EmprendimientoType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razonsocial')
            ->add('direccion')
            ->add('cuit')
            ->add('descripcion')
            ->add('ambito')
            ->add('rubro')
            // ->add('titular')
            ->add('fotos',FileType::class,[
                'data_class'=>null,
                'label'=>"Agregar fotos:",
                'mapped'=>false,
                'required'=>false,
                'multiple'=>true,
                /* 'constraints'=>[
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Solo se puede subir un archivo válido de imagen, jpg, webp',
                    ])
                ], */
            ])
            //restriccion de solo números
            ->add('latitud',NumberType::class)
            ->add('longitud',NumberType::class)
        ;
        if ($this->security->isGranted('ROLE_INVESTIGADOR')) {
            $builder->add('titular');
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Emprendimiento::class,
        ]);
    }
}
