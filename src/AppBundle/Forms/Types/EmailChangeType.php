<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 2/1/18
 * Time: 6:49 AM
 */

namespace AppBundle\Forms\Types;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;

class EmailChangeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [new Email()]
            ])
            ->add('submit', SubmitType::class, ['label' => 'Change :)'])
        ;
    }
}