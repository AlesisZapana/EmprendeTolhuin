<?php

namespace App\Form;

use App\Entity\Solicitud;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitudType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titularnombre')
            ->add('titularapellido')
            ->add('dni')
            ->add('telefono')
            ->add('mail')
            ->add('razonsocial')
            ->add('cuit')
            ->add('direccion')
            ->add('rubro')
            ->add('descripcion')
            ->add('ambito')
            ->add('sectorproductivo')
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
