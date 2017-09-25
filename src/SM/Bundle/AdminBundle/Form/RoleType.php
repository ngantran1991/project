<?php

namespace SM\Bundle\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RoleType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'admin.role.name'
            ))
            ->add('role', null, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'admin.role.role'
            ))
        ;

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\UserBundle\Entity\Role',
            'translation_domain' => 'SMUserBundle'
        ));

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sm_bundle_userbundle_role';

    }

}
