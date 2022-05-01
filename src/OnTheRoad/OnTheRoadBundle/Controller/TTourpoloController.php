<?php

namespace OnTheRoad\OnTheRoadBundle\Controller;

use OnTheRoad\OnTheRoadBundle\FormsDeclare;
use OnTheRoad\OnTheRoadBundle\LanguageUpdate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\Entity\TTourpolo;
use OnTheRoad\OnTheRoadBundle\Form\TTourpoloType;

/**
 * TTourpolo controller.
 *
 */
class TTourpoloController extends Controller
{

    /**
     * Lists all TTourpolo entities.
     *
     */
    public function indexAction($locale=null)
    {
        $em = $this->getDoctrine()->getManager();
        $formularies = FormsDeclare::GetForms();
        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpolo')->findAll();

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpolo:index.html.twig', array(
            'entities' => $entities,'forms'=>$formularies,'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
        ));
    }
    /**
     * Creates a new TTourpolo entity.
     *
     */
    public function createAction($locale=null,Request $request)
    {
        $entity = new TTourpolo();
        $form = $this->createCreateForm($locale,$entity);
        $form->handleRequest($request);
        $formularies = FormsDeclare::GetForms();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ttourpolo_show', array('id' => $entity->getId(),'locale'=>$locale)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpolo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),'forms'=>$formularies,'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
        ));
    }

    /**
    * Creates a form to create a TTourpolo entity.
    *
    * @param TTourpolo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm($locale=null,TTourpolo $entity)
    {
        $form = $this->createForm(new TTourpoloType(), $entity, array(
            'action' => $this->generateUrl('ttourpolo_create',array('locale'=>$locale)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TTourpolo entity.
     *
     */
    public function newAction($locale=null)
    {
        $entity = new TTourpolo();
        $form   = $this->createCreateForm($locale,$entity);
        $formularies = FormsDeclare::GetForms();
        return $this->render('OnTheRoadOnTheRoadBundle:TTourpolo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),'forms'=>$formularies,'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
        ));
    }

    /**
     * Finds and displays a TTourpolo entity.
     *
     */
    public function showAction($locale=null,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpolo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTourpolo entity.');
        }
        $formularies = FormsDeclare::GetForms();
        $deleteForm = $this->createDeleteForm($locale,$id);

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpolo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),'forms'=>$formularies,  'customlocale'=>LanguageUpdate::SetLocale($this,$locale)      ));
    }

    /**
     * Displays a form to edit an existing TTourpolo entity.
     *
     */
    public function editAction($locale=null,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpolo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTourpolo entity.');
        }
        $formularies = FormsDeclare::GetForms();
        $editForm = $this->createEditForm($locale,$entity);
        $deleteForm = $this->createDeleteForm($locale,$id);

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpolo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),'forms'=>$formularies,'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
        ));
    }

    /**
    * Creates a form to edit a TTourpolo entity.
    *
    * @param TTourpolo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm($locale=null,TTourpolo $entity)
    {
        $form = $this->createForm(new TTourpoloType(), $entity, array(
            'action' => $this->generateUrl('ttourpolo_update', array('id' => $entity->getId(),'locale'=>$locale)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TTourpolo entity.
     *
     */
    public function updateAction($locale=null,Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpolo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTourpolo entity.');
        }
        $formularies = FormsDeclare::GetForms();
        $deleteForm = $this->createDeleteForm($locale,$id);
        $editForm = $this->createEditForm($locale,$entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ttourpolo_edit', array('id' => $id,'locale'=>$locale)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpolo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),'forms'=>$formularies,'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
        ));
    }
    /**
     * Deletes a TTourpolo entity.
     *
     */
    public function deleteAction($locale=null,Request $request, $id)
    {
        $form = $this->createDeleteForm($locale,$id);
        $form->handleRequest($request);
        $formularies = FormsDeclare::GetForms();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpolo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TTourpolo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ttourpolo',array('locale'=>$locale)));
    }

    /**
     * Creates a form to delete a TTourpolo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($locale=null,$id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ttourpolo_delete', array('id' => $id,'locale'=>$locale)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
