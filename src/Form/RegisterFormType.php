<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


//Creation d'un formulaire speciale pour le Register

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //cette partie dit que ce formulaire va contenir ses champs avec la format de birthdate
        // est sous la forme yyyy-MM-dd expl : 2020/06/08
        $builder
            ->add('fullname')
            ->add('birthdate',DateType::Class,['widget' => 'single_text','format'=>'yyyy-MM-dd'])
            ->add('identity')
            ->add('phone')
            ->add('username')
            ->add('email')
            ->add('password',PasswordType::Class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
