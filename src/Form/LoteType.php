<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\FileValidator;

class LoteType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options)
    {
        $builder->add('lotenombre',FileType::class,[
            'data_class'=>null,
            'label'=>'Subir Lote',
            'constraints'=>[
                new File([
                    'maxSize' => '10m',
                    'mimeTypes' => [
                        'application/vnd.ms-excel',
                        'application/vnd.oasis.opendocument.spreadsheet',
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheetapplication/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    ],
                    'mimeTypesMessage' => 'Solo se puede subir un archivo válido ODS o XLSX',
                ]),
            ],
            'label_attr'=>[
                'data-browse'=>'Elegir',                
            ]
        ])->add('headers', CheckboxType::class, [
            'label'=>'Con encabezados',
            'required'=>false,
        ]);
    }


}