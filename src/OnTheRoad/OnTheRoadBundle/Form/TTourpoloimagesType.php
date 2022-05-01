<?php

namespace OnTheRoad\OnTheRoadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TTourpoloimagesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pathimage')
            ->add('idtour')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OnTheRoad\OnTheRoadBundle\Entity\TTourpoloimages'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ontheroad_ontheroadbundle_ttourpoloimages';
    }
}
