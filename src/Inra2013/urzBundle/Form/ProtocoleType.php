<?php

namespace Inra2013\urzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProtocoleType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('NomProtocole')
                ->add('DateValidation')
                ->add('Description')
                ->add('Analyse', 'entity', array(
                    'label' => 'Type analyse à faire ',
                    'class' => 'Inra2013\urzBundle\Entity\TypeCategorie',
                    'property' => 'Nom',
                    'multiple' => true,
                    'expanded'=>true
                        )
                )



        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Inra2013\urzBundle\Entity\Protocole'
        ));
    }

    public function getName() {
        return 'inra2013_urzbundle_protocoletype';
    }

}
