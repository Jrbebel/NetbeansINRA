<?php

namespace Inra2013\urzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeAnalyseType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('Nom', "text")
           
                ->add('Champs', 'collection', array(
                    'type' => new ChampType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                ))
            
                ->add('TypeCategorie',"entity",array('class'=>'Inra2013urzBundle:CategorieAnalyse','property'=>'Nom','empty_value'=>"Choissisez une categorie"));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Inra2013\urzBundle\Entity\TypeAnalyse'
        ));
    }

    public function getName() {
        return 'inra2013_urzbundle_typeanalysetype';
    }

}
