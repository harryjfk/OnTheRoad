<?php
namespace OnTheRoad\OnTheRoadBundle\Form;
use Symfony\Component\Form\FormBuilderInterface;

class TAdminCommentType extends TCommentType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('iduser','text',array('label'=>'User','label_attr' => array('class' => ''), 'attr' => array('class' => 'form-control','placeholder'=>'User')));
        parent::buildForm($builder,$options);

    }
}