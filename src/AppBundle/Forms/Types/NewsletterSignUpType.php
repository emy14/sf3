<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/30/18
 * Time: 4:03 AM
 */

namespace AppBundle\Forms\Types;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;

class NewsletterSignUpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [new Email()]
            ])
            ->add('signup', SubmitType::class, ['label' => 'Sign up'])
        ;
    }
}