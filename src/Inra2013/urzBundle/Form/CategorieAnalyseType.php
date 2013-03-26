<?php

namespace Inra2013\urzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieAnalyseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            ->add('TypeCategorie');
        
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inra2013\urzBundle\Entity\CategorieAnalyse'
        ));
    }

    public function getName()
    {
        return 'inra2013_urzbundle_categorieanalysetype';
    }
}
