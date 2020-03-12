<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',TextType::class,[
                'label'=>'Nombre de usuario',
            ])
            ->add('apellido')
            ->add('nombre')
            ->add('dni',IntegerType::class,[
                'label'=>'DNI',
                'attr'=>[
                    'min'=>0,
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label'=>'Confirmar',
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'label'=>'Contraseña',
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('roles',ChoiceType::class,[
                'constraints'=>[
                    new NotBlank(),
                ],
                'multiple'=>true,
                'expanded'=>true,
                'required'=>true,
                'choices'=>[
                    'Administrador'=>'ROLE_ADMIN',
                    'Municipio'=>'ROLE_MUNICIPIO',
                    'Investigador'=>'ROLE_INVESTIGADOR',
                    'Emprendedor'=>'ROLE_EMPRENDEDOR',
                ],
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
