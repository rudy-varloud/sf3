<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/30/18
 * Time: 3:16 AM
 */

namespace AppBundle\Forms\Types;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class TicketSubmissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('eventName', TextType::class, [
                'constraints' => [new NotBlank(), new Length(['min' => 1])]
            ])
            ->add('eventDate', DateType::class, [
                'widget' => 'choice'
            ])
            ->add('eventDescription', TextType::class,[
                'constraints' => [new NotBlank(), new Length(['min' => 50])]
            ])
            ->add('submit', SubmitType::class, ['label' => 'Submit'])
        ;
    }
}