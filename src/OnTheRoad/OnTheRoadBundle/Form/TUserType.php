<?php

namespace OnTheRoad\OnTheRoadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\Translator;

class TUserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $translator = new Translator('es_ES');
         $builder
            ->add('nameuser', null, array('label_attr' => array('class' => 'sr-only'), 'attr' => array('autofocus'=>0,'class' => 'form-control','placeholder'=>$translator-> trans('User Name'))))
            ->add('email', 'email', array('label_attr' => array('class' => 'sr-only'), 'attr' => array('placeholder'=>$translator-> trans('Email'),'class' => 'form-control')))
            ->add('password', 'repeated', array('first_options' => array('label_attr' => array('class' => 'sr-only'), 'attr' => array('placeholder'=>$translator-> trans('Password'),'class' => 'form-control')),'second_options' => array('label_attr' => array('class' => 'sr-only'), 'attr' => array('placeholder'=>$translator-> trans('Confirm Password'),'class' => 'form-control')), 'type' => 'password'));

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OnTheRoad\OnTheRoadBundle\Entity\TUser'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ontheroad_ontheroadbundle_tuser';
    }
}
