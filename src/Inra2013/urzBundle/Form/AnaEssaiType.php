
                 
<?php

namespace Inra2013\urzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnaEssaiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(Essai1)->add(Essai2)->add(Essai3)->add(Essai4)
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inra2013\urzBundle\Entity\AnaEssai'
        ));
    }

    public function getName()
    {
        return 'inra2013_urzbundle_anaEssaitype';
    }
}




