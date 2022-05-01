<?php

namespace OnTheRoad\OnTheRoadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TTourpoloType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('namepolo',null,array('label'=>'Name','label_attr' => array('class' => ''), 'attr' => array('class' => 'form-control','placeholder'=>'Name')))
            ->add('datapolo','text',array('label'=>'Posicion','label_attr' => array('class' => ''), 'attr' => array('class' => 'form-control','placeholder'=>'Posicion')))
            ->add('descpolo','text',array('label'=>'Description','label_attr' => array('class' => ''), 'attr' => array('class' => 'form-control','placeholder'=>'Description')))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OnTheRoad\OnTheRoadBundle\Entity\TTourpolo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ontheroad_ontheroadbundle_ttourpolo';
    }
}
