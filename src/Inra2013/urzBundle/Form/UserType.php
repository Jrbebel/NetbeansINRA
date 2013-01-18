<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Inra2013\urzBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormBuilder;

class UserType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        parent::buildForm($builder, $options);

        $builder
                ->add('Nom',"text")
                ->add('Prenom',"text")
                ->add('Telephone',"text")
                ->add('Fonction',"text")
                ->add('Roles', 'choice', array('choices' => array('ROLE_SUPER_ADMIN' => 'Administrateur', 'ROLE_ADMIN' => 'Responsable', 'ROLE_USER' => 'Utilisateur'), 'multiple' => true))
        ;
    }

    public function getDefaultOptions(array $options) {
        parent::getDefaultOptions($options);

        return array(
            'data_class' => 'Inra2013\urzBundle\Entity\User',
        );
    }


    public function getName() {
        return 'Inra2013_user_registration';
    }

}

