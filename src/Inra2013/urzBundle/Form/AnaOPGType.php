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
            ->add('PrisEssai')
            ->add('OeufLu')
            ->add('VolLu')
            ->add('Opg')
            ->add('Conccidies')
            ->add('Monezia')
            ->add('Strongeledia')
            ->add('CodeLabo')
            ->add('User')
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
