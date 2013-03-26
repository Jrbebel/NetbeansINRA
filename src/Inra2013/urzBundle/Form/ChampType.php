<?php

namespace Inra2013\urzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChampType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('Champ',"text",array('label'=>" "))
                //->add('Analyse')

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Inra2013\urzBundle\Entity\Champ'
        ));
    }

    public function getName() {
        return 'inra2013_urzbundle_champtype';
    }

}
