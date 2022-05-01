<?php

namespace OnTheRoad\OnTheRoadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\Translator;

class TCommentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $translator = new Translator('es');
$topic = $translator->trans('Topic');
        $text = $translator->trans('Text');
        $builder
            ->add('topiccomment',null,array('label'=>$topic,'label_attr' => array('class' => ''), 'attr' => array('autofocus'=>0,'class' => 'form-control','placeholder'=>$topic)))
            ->add('textcomment','textarea',array('label'=>$text,'label_attr' => array('class' => ''), 'attr' => array('class' => 'form-control','placeholder'=>$text)));

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OnTheRoad\OnTheRoadBundle\Entity\TComment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ontheroad_ontheroadbundle_tcomment';
    }
}
