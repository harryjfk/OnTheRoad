<?php

namespace OnTheRoad\OnTheRoadBundle\Controller;


use OnTheRoad\OnTheRoadBundle\Form\TAdminCommentType;
use OnTheRoad\OnTheRoadBundle\FormsDeclare;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\Entity\TComment;
use OnTheRoad\OnTheRoadBundle\Form\TCommentType;
use OnTheRoad\OnTheRoadBundle\LanguageUpdate;

/**
 * TComment controller.
 *
 */
class TCommentController extends Controller
{

    /**
     * Lists all TComment entities.
     *
     */
    public function indexAction($locale=null)
    {
        $em = $this->getDoctrine()->getManager();
        $formularies = FormsDeclare::GetForms();
        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TComment')->findAll();

        return $this->render('OnTheRoadOnTheRoadBundle:TComment:index.html.twig', array(
            'entities' => $entities,'customlocale'=>LanguageUpdate::SetLocale($this,$locale),'forms'=>$formularies
        ));
    }
    /**
     * Creates a new TComment entity.
     *
     */
    public function createAction($locale,Request $request)
    {
        $entity = new TComment();
        $form = $this->createCreateForm($locale,$entity);
        $form->handleRequest($request);
        $formularies = FormsDeclare::GetForms();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tcomment_show', array('id' => $entity->getId(),'locale'=>$locale)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TComment:new.html.twig', array('customlocale'=>LanguageUpdate::SetLocale($this,$locale),
            'entity' => $entity,'forms'=>$formularies,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TComment entity.
    *
    * @param TComment $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm($locale,TComment $entity)
    {
        $form = $this->createForm(new TAdminCommentType(), $entity, array(
            'action' => $this->generateUrl('tcomment_create',array('locale'=>$locale)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TComment entity.
     *
     */
    public function newAction($locale=null)
    {
        $entity = new TComment();
        $form   = $this->createCreateForm($locale,$entity);
        $formularies = FormsDeclare::GetForms();
        return $this->render('OnTheRoadOnTheRoadBundle:TComment:new.html.twig', array(
            'entity' => $entity,'forms'=>$formularies,
            'form'   => $form->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
        ));
    }

    /**
     * Finds and displays a TComment entity.
     *
     */
    public function showAction($locale=null,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $formularies = FormsDeclare::GetForms();
        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TComment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TComment entity.');
        }

        $deleteForm = $this->createDeleteForm($locale,$id);

        return $this->render('OnTheRoadOnTheRoadBundle:TComment:show.html.twig', array(
            'entity'      => $entity,'forms'=>$formularies,
            'delete_form' => $deleteForm->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale)        ));
    }

    /**
     * Displays a form to edit an existing TComment entity.
     *
     */
    public function editAction($locale=null,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $formularies = FormsDeclare::GetForms();
        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TComment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TComment entity.');
        }

      $editForm = $this->createEditForm($locale,$entity);
        $deleteForm = $this->createDeleteForm($locale,$id);

        return $this->render('OnTheRoadOnTheRoadBundle:TComment:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),'forms'=>$formularies,
            'delete_form' => $deleteForm->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
        ));
    }

    /**
    * Creates a form to edit a TComment entity.
    *
    * @param TComment $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm($locale,TComment $entity)
    {
        $form = $this->createForm(new TAdminCommentType(), $entity, array(
            'action' => $this->generateUrl('tcomment_update', array('locale' =>$locale,'id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TComment entity.
     *
     */
    public function updateAction($locale=null,Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $formularies = FormsDeclare::GetForms();
        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TComment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TComment entity.');
        }

        $deleteForm = $this->createDeleteForm($locale,$id);
        $editForm = $this->createEditForm($locale,$entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tcomment_edit', array('id' => $id,'locale'=>$locale)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TComment:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),'forms'=>$formularies,
            'delete_form' => $deleteForm->createView(),'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
        ));
    }
    /**
     * Deletes a TComment entity.
     *
     */
    public function deleteAction($locale=null,Request $request, $id)
    {
        $form = $this->createDeleteForm($locale,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TComment')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TComment entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tcomment',array('locale'=>$locale)));
    }

    /**
     * Creates a form to delete a TComment entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($locale,$id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tcomment_delete', array('id' => $id,'locale'=>$locale)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    public function  IndexFrontAction($locale=null)
    {
        $r=LanguageUpdate::SetLocale($this, $locale);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TComment')->findAll();



        return $this->render("OnTheRoadOnTheRoadBundle:TComment:indexfront.html.twig", array('comments' => $entities,'customlocale' => $r));

    }
    public function  ViewFrontAction($id,$locale=null)
    {
      $r=LanguageUpdate::SetLocale($this, $locale);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TComment')->find($id);
        return $this->render("OnTheRoadOnTheRoadBundle:TComment:viewfront.html.twig", array('comentario' => $entities,'customlocale' => $r,'id'=>$id));

    }
    public function  NewFrontAction($locale=null)
    {
       $r = LanguageUpdate::SetLocale($this,$locale);
        $form = $this->createForm (new TCommentType(), new TComment());
        $request = $this->getRequest();
        if($request->getMethod()=='POST')
        {
            $form->handleRequest($request);
            if($form->isValid()) {

                $comment = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $comment->setIduser($this->get('security.context')->getToken()->getUser());
                $em->persist($comment);
                $em->flush();
                return $this->redirect($this->generateUrl('comments',array('locale'=>$r)));

            }
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TComment:newfront.html.twig', array(
            'form'=>$form->createView(),'customlocale'=>$r
        ));

    }
}
