<?php

namespace App\Form;

use App\Entity\User;
use AppBundle\Form\DataTransformer\StringToArrayTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //  $user1 = 90;
        //  print_r( $user1);
        // die;
       
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('email')
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'required' => true,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 1,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],])
                ->add('roles', ChoiceType::class, [
                    'multiple' => true,
                    'choices'  => [
                        'user' => null,
                        'admin' => 'ROLE_ADMIN',
                    ]
                ]);
            // ->add('roles', ChoiceType::class, array(
            //     'attr' => array(
            //         'class' => 'form-control',
            //     //  'value' => $options[0]['roles'],
            //         'required' => false,
            //     ),
            //     'multiple' => true,
            //     'expanded' => true, // render check-boxes
            //     'choices' => [
            //         'admin' => 'ROLE_ADMIN',
            //         'user' => 'ROLE_USER',
            //     ]
            // )
            // );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
