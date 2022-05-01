<?php

namespace OnTheRoad\OnTheRoadBundle\Controller;

use OnTheRoad\OnTheRoadBundle\LanguageUpdate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\Entity\TTrip;
use OnTheRoad\OnTheRoadBundle\Form\TTripType;

/**
 * TTrip controller.
 *
 */
class TTripController extends Controller
{

    /**
     * Lists all TTrip entities.
     *
     */
    public function indexAction($locale=null)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TTrip')->findAll();

        return $this->render('OnTheRoadOnTheRoadBundle:TTrip:index.html.twig', array(
            'entities' => $entities,'customlocale'=>LanguageUpdate::SetLocale($this,$locale),
        ));
    }
    /**
     * Creates a new TTrip entity.
     *
     */
    public function createAction($locale=null,Request $request)
    {
        $entity = new TTrip();
        $form = $this->createCreateForm($locale,$entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ttrip_show', array('id' => $entity->getId(),'locale'=>$locale)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TTrip:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale),
        ));
    }

    /**
    * Creates a form to create a TTrip entity.
    *
    * @param TTrip $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm($locale=null,TTrip $entity)
    {
        $form = $this->createForm(new TTripType(), $entity, array(
            'action' => $this->generateUrl('ttrip_create',array('locale'=>$locale)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TTrip entity.
     *
     */
    public function newAction($locale=null)
    {
        $entity = new TTrip();
        $form   = $this->createCreateForm($locale,$entity);

        return $this->render('OnTheRoadOnTheRoadBundle:TTrip:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale),
        ));
    }

    /**
     * Finds and displays a TTrip entity.
     *
     */
    public function showAction($locale=null,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTrip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTrip entity.');
        }

        $deleteForm = $this->createDeleteForm($locale,$id);

        return $this->render('OnTheRoadOnTheRoadBundle:TTrip:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale),        ));
    }

    /**
     * Displays a form to edit an existing TTrip entity.
     *
     */
    public function editAction($locale=null,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTrip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTrip entity.');
        }

        $editForm = $this->createEditForm($locale,$entity);
        $deleteForm = $this->createDeleteForm($locale,$id);

        return $this->render('OnTheRoadOnTheRoadBundle:TTrip:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale),
        ));
    }

    /**
    * Creates a form to edit a TTrip entity.
    *
    * @param TTrip $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm($locale=null,TTrip $entity)
    {
        $form = $this->createForm(new TTripType(), $entity, array(
            'action' => $this->generateUrl('ttrip_update', array('id' => $entity->getId(),'locale'=>$locale)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TTrip entity.
     *
     */
    public function updateAction($locale=null,Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTrip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTrip entity.');
        }

        $deleteForm = $this->createDeleteForm($locale,$id);
        $editForm = $this->createEditForm($locale,$entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ttrip_edit', array('id' => $id,'locale'=>$locale)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TTrip:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale),
        ));
    }
    /**
     * Deletes a TTrip entity.
     *
     */
    public function deleteAction($locale=null,Request $request, $id)
    {
        $form = $this->createDeleteForm($locale,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTrip')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TTrip entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ttrip',array('locale'=>$locale)));
    }

    /**
     * Creates a form to delete a TTrip entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($locale=null,$id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ttrip_delete', array('id' => $id,'locale'=>$locale)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
