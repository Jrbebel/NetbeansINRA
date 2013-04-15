<?php

namespace Inra2013\urzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnalyseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('CodeLabo')
            ->add('Animal')
            ->add('DatePrelev')
            ->add('DateAnalyse')
            ->add('Observation')
            ->add('Lot_Groupe')
            ->add('NaturEchant')
            ->add('Protocole')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inra2013\urzBundle\Entity\Analyse'
        ));
    }

    public function getName()
    {
        return 'inra2013_urzbundle_analysetype';
    }
}
