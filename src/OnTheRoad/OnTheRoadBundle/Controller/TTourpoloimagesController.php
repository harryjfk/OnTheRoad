<?php

namespace OnTheRoad\OnTheRoadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\Entity\TTourpoloimages;
use OnTheRoad\OnTheRoadBundle\Form\TTourpoloimagesType;

/**
 * TTourpoloimages controller.
 *
 */
class TTourpoloimagesController extends Controller
{

    /**
     * Lists all TTourpoloimages entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpoloimages')->findAll();

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpoloimages:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TTourpoloimages entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TTourpoloimages();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ttourpoloimages_show', array('id' => $entity->getId())));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpoloimages:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TTourpoloimages entity.
    *
    * @param TTourpoloimages $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TTourpoloimages $entity)
    {
        $form = $this->createForm(new TTourpoloimagesType(), $entity, array(
            'action' => $this->generateUrl('ttourpoloimages_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TTourpoloimages entity.
     *
     */
    public function newAction()
    {
        $entity = new TTourpoloimages();
        $form   = $this->createCreateForm($entity);

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpoloimages:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TTourpoloimages entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpoloimages')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTourpoloimages entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpoloimages:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TTourpoloimages entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpoloimages')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTourpoloimages entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpoloimages:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TTourpoloimages entity.
    *
    * @param TTourpoloimages $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TTourpoloimages $entity)
    {
        $form = $this->createForm(new TTourpoloimagesType(), $entity, array(
            'action' => $this->generateUrl('ttourpoloimages_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TTourpoloimages entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpoloimages')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTourpoloimages entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ttourpoloimages_edit', array('id' => $id)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TTourpoloimages:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TTourpoloimages entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTourpoloimages')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TTourpoloimages entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ttourpoloimages'));
    }

    /**
     * Creates a form to delete a TTourpoloimages entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ttourpoloimages_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
