<?php

namespace OnTheRoad\OnTheRoadBundle\Controller;

use OnTheRoad\OnTheRoadBundle\LanguageUpdate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\Entity\TRealtrip;
use OnTheRoad\OnTheRoadBundle\Form\TRealtripType;

/**
 * TRealtrip controller.
 *
 */
class TRealtripController extends Controller
{

    /**
     * Lists all TRealtrip entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtrip')->findAll();

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtrip:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TRealtrip entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TRealtrip();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trealtrip_show', array('id' => $entity->getId())));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtrip:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TRealtrip entity.
    *
    * @param TRealtrip $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TRealtrip $entity)
    {
        $form = $this->createForm(new TRealtripType(), $entity, array(
            'action' => $this->generateUrl('trealtrip_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TRealtrip entity.
     *
     */
    public function newAction()
    {
        $entity = new TRealtrip();
        $form   = $this->createCreateForm($entity);

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtrip:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TRealtrip entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtrip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TRealtrip entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtrip:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TRealtrip entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtrip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TRealtrip entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtrip:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TRealtrip entity.
    *
    * @param TRealtrip $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TRealtrip $entity)
    {
        $form = $this->createForm(new TRealtripType(), $entity, array(
            'action' => $this->generateUrl('trealtrip_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TRealtrip entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtrip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TRealtrip entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('trealtrip_edit', array('id' => $id)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TRealtrip:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TRealtrip entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TRealtrip')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TRealtrip entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trealtrip'));
    }

    /**
     * Creates a form to delete a TRealtrip entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trealtrip_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function IndexFrontAction($locale = null)
    {
        return $this->render("OnTheRoadOnTheRoadBundle:TRealtrip:indexfront.html.twig", array('customlocale' => LanguageUpdate::SetLocale($this, $locale)));
    }
}
