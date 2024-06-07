<?php

/**
 * @package App\Form\User
 * @category Form
 */
namespace App\Form\User;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see AbstractType
 */
class UserType extends AbstractType
{
    /**
     * @access public
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return void
     * @since 1.0
     * @see FormBuilderInterface::add()
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username')
            ->add('email');
    }

    /**
     * @access public
     * @param OptionsResolver $resolver
     * @return void
     * @since 1.0
     * @see OptionsResolver::setDefaults()
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

}