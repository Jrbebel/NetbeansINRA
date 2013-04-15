<?php

namespace Inra2013\urzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnaOPGType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('OPG1')
            ->add('OPG2')
            ->add('OPG3')
          
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inra2013\urzBundle\Entity\AnaOPG'
        ));
    }

    public function getName()
    {
        return 'inra2013_urzbundle_anaopgtype';
    }
}
