<?php

namespace App\Form;

use App\Entity\Solicitud;
use App\Entity\Ambito;
use App\Entity\Sectorproductivo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SolicitudType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titularnombre',TextType::class,[
                'label'=>'Titular Nombre',
            ])
            ->add('titularapellido',TextType::class,[
                'label'=>'Titular Apellido',
            ])
            ->add('dni',IntegerType::class,[
                'label'=>'DNI',
                'attr'=>[
                    'min'=>0,
                ],
            ])
            ->add('telefono',IntegerType::class,[
                'label'=>'Teléfono'
            ])
            ->add('mail',EmailType::class,[
                'label'=>'Correo Electrónico'
            ])
            ->add('razonsocial',TextType::class,[
                'label'=>'Razón Social'
            ])
            ->add('cuit',IntegerType::class,[
                'label'=>'CUIT',
                'attr'=>[
                    'min'=>0,
                ]
            ])
            ->add('direccion',TextType::class,[
                'label'=>'Dirección'
            ])
            ->add('rubro')
            ->add('descripcion',TextType::class,[
                'label'=>'Descripción'
            ])
            ->add('ambito',EntityType::class,[
                'class'=>Ambito::class,
                'label'=>'Ámbito',
                'required'=>false,
                ])
            ->add('sectorproductivo',EntityType::class,[
                'class'=>Sectorproductivo::class,
                'label'=>'Sector Productivo',
                'required'=>false,
            ])
            ->add('latitud')
            ->add('longitud')
            // ->add('estado')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Solicitud::class,
        ]);
    }
}
