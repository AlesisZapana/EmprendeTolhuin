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
use App\Entity\Contacto;

class EmprendimientoEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razonsocial')
            ->add('direccion')
            ->add('cuit')
            ->add('ambito')
            ->add('rubro')
            /**
             * Agregar la opción para agregar las fotos y los contactos. Luego en el controller
             */
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
            // ->add('datoscontacto',EntityType::class,[
            //     'class'=>Contacto::class,
            //     'multiple'=>true,
                
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Emprendimiento::class,
        ]);
    }
}
