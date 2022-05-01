<?php

namespace OnTheRoad\OnTheRoadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\Entity\TTripdesc;
use OnTheRoad\OnTheRoadBundle\Form\TTripdescType;

/**
 * TTripdesc controller.
 *
 */
class TTripdescController extends Controller
{

    /**
     * Lists all TTripdesc entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TTripdesc')->findAll();

        return $this->render('OnTheRoadOnTheRoadBundle:TTripdesc:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TTripdesc entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TTripdesc();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ttripdesc_show', array('id' => $entity->getId())));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TTripdesc:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TTripdesc entity.
    *
    * @param TTripdesc $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TTripdesc $entity)
    {
        $form = $this->createForm(new TTripdescType(), $entity, array(
            'action' => $this->generateUrl('ttripdesc_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TTripdesc entity.
     *
     */
    public function newAction()
    {
        $entity = new TTripdesc();
        $form   = $this->createCreateForm($entity);

        return $this->render('OnTheRoadOnTheRoadBundle:TTripdesc:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TTripdesc entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTripdesc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTripdesc entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TTripdesc:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TTripdesc entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTripdesc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTripdesc entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TTripdesc:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TTripdesc entity.
    *
    * @param TTripdesc $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TTripdesc $entity)
    {
        $form = $this->createForm(new TTripdescType(), $entity, array(
            'action' => $this->generateUrl('ttripdesc_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TTripdesc entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTripdesc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TTripdesc entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ttripdesc_edit', array('id' => $id)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TTripdesc:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TTripdesc entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TTripdesc')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TTripdesc entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ttripdesc'));
    }

    /**
     * Creates a form to delete a TTripdesc entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ttripdesc_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
