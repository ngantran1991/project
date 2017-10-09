<?php

namespace SM\Bundle\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompteType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nom')
                ->add('prenom')
                ->add('telephoneFixe')
                ->add('telephonePort')
                ->add('email')
                ->add('password', 'password')
                ->add('description')
                ->add('dateNaissance')
                ->add('dateCreation', 'date')
                ->add('dateModification')
                ->add('dateDemandeDesactivation')
                ->add('dateDesactivation')
                ->add('facturable')
                ->add('dateRenouvellement')
                ->add('nbRenouvelement')
                ->add('codeActivation')
                ->add('raisonSocial')
                ->add('nSiret')
                ->add('nTvaIntra')
                ->add('iban')
                ->add('numCarte')
                ->add('cleSecurite')
                ->add('idFormeJuridique')
                ->add('tarifDeplacement')
                ->add('tarifHorraire')
                ->add('moneySponsorship')
                ->add('idCategorieMetier')
                ->add('idCivilite')
                ->add('idFichier')
                ->add('idCompteParrain')
                ->add('idComptePrincipale')
                ->add('idEtatCompte')
                ->add('idNafCat3')
                ->add('idTypeCompte')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\RESTBundle\Entity\Compte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sm_bundle_restbundle_compte';
    }
}
