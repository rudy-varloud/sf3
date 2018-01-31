<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/30/18
 * Time: 7:20 AM
 */

namespace AppBundle\Forms\Types;


class MemberSignInType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [new Email()]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'property_path' => 'plainTextPassword',
            ])
            ->add('signin', SubmitType::class, ['label' => 'Sign in'])
        ;
    }
}