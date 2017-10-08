<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use FM\ElfinderBundle\Form\Type\ElFinderType;

class AdminType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Firstname'
            ))
            ->add('lastname', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Lastname'
            ))
            ->add('phone', TextType::class, array(
                'attr' => array('class' => 'form-control',
                    'maxlength' => 11,
                    'minlength' => 9,
                ),
                'label' => 'Điện thoại'
            ))
            ->add('address', CKEditorType::class, array(
                'config' => array(
                    'uiColor' => '#ffffff',
                    'filebrowserBrowseRoute' => 'elfinder',
                    'filebrowserBrowseRouteParameters' => array(
                        'instance' => 'default',
                        'homeFolder' => ''
                    )
                ),
                'attr' => array('class' => 'form-control'),
                'label' => 'Địa chỉ'
            ))
            ->add('username', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Username'
            ))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => array('attr' => array('class' => 'form-control password-field', 'minlength' => 6,)),
                'required' => !$options['update'],
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('email', EmailType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Email'
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Thông tin chi tiếc',
                'required' => false
            ))
//            ->add('isActive', null, array(
//                'label' => 'admin.user.isActive'
//            ))
//            ->add('roles', null, array(
//                'property' => 'name',
//                'label' => 'admin.user.roles'
//            ))
        ;

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\Admin',
            'translation_domain' => 'SMAdminBundle'
        ));
        $resolver->setRequired([
            'update',
        ]);

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sm_bundle_adminbundle_admin';

    }

}
