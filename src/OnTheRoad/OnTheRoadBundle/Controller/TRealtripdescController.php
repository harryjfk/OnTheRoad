<?php

namespace OnTheRoad\OnTheRoadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\Entity\TRealtripdesc;
use OnTheRoad\OnTheRoadBundle\Form\TRealtripdescType;

/**
 * TRealtripdesc controller.
 *
 */
class TRealtripdescController extends Controller
{

    /**
     * Lists all TRealtripdesc entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtripdesc')->findAll();

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtripdesc:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TRealtripdesc entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TRealtripdesc();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trealtripdesc_show', array('id' => $entity->getId())));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtripdesc:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TRealtripdesc entity.
    *
    * @param TRealtripdesc $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TRealtripdesc $entity)
    {
        $form = $this->createForm(new TRealtripdescType(), $entity, array(
            'action' => $this->generateUrl('trealtripdesc_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TRealtripdesc entity.
     *
     */
    public function newAction()
    {
        $entity = new TRealtripdesc();
        $form   = $this->createCreateForm($entity);

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtripdesc:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TRealtripdesc entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtripdesc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TRealtripdesc entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtripdesc:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TRealtripdesc entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtripdesc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TRealtripdesc entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtripdesc:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TRealtripdesc entity.
    *
    * @param TRealtripdesc $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TRealtripdesc $entity)
    {
        $form = $this->createForm(new TRealtripdescType(), $entity, array(
            'action' => $this->generateUrl('trealtripdesc_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TRealtripdesc entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtripdesc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TRealtripdesc entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('trealtripdesc_edit', array('id' => $id)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtripdesc:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TRealtripdesc entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtripdesc')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TRealtripdesc entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trealtripdesc'));
    }

    /**
     * Creates a form to delete a TRealtripdesc entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trealtripdesc_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
