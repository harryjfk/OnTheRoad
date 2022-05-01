<?php

namespace OnTheRoad\OnTheRoadBundle\Controller;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\SecurityContext;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\Entity\TUser;
use OnTheRoad\OnTheRoadBundle\Form\TUserType;
use OnTheRoad\OnTheRoadBundle\LanguageUpdate;
/**
 * TUser controller.
 *
 */
class TUserController extends Controller
{

    /**
     * Lists all TUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OnTheRoadOnTheRoadBundle:TUser')->findAll();

        return $this->render('OnTheRoadOnTheRoadBundle:TUser:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TUser entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TUser();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tuser_show', array('id' => $entity->getId())));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TUser:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a TUser entity.
    *
    * @param TUser $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TUser $entity)
    {
        $form = $this->createForm(new TUserType(), $entity, array(
            'action' => $this->generateUrl('tuser_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TUser entity.
     *
     */
    public function newAction()
    {
        $entity = new TUser();
        $form   = $this->createCreateForm($entity);

        return $this->render('OnTheRoadOnTheRoadBundle:TUser:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TUser entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TUser:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TUser entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TUser entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OnTheRoadOnTheRoadBundle:TUser:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TUser entity.
    *
    * @param TUser $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TUser $entity)
    {
        $form = $this->createForm(new TUserType(), $entity, array(
            'action' => $this->generateUrl('tuser_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TUser entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tuser_edit', array('id' => $id)));
        }

        return $this->render('OnTheRoadOnTheRoadBundle:TUser:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TUser entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OnTheRoadOnTheRoadBundle:TUser')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TUser entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tuser'));
    }

    /**
     * Creates a form to delete a TUser entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tuser_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
 public function loginAction($locale=null)
    {

   $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

       return $this->render(
            'OnTheRoadOnTheRoadBundle:Admin:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
                'customlocale'=>LanguageUpdate::SetLocale($this,$locale)
            )
        );






   /*   /*if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
    {
        // redirect authenticated users to homepage
        return $this->redirect($this->generateUrl('wx_exchange_default_index'));
    }*/
  /*     $request = $this->getRequest();
       if($request->getMethod()=='POST')
        $errors =array(
            'last_name' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error' => $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR),
        ) ;
        else
  $errors = array('last_name'=>$request->getMethod(),'error'=>'');
        return $this->render('OnTheRoadOnTheRoadBundle:Admin:login.html.twig',$errors );*/
    }

    public function registerAction($locale=null)
    {
        $r = LanguageUpdate::SetLocale($this,$locale);
        $form = $this->createForm (new TUserType(), new TUser());
         $request = $this->getRequest();
        if($request->getMethod()=='POST')
        {
            $form->handleRequest($request);
            if($form->isValid())
            {
                $user = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $factory = $this->container->get('security.encoder_factory');
                $encoder = $factory->getEncoder($user);
                $password = $encoder->encodePassword($user->getPassword(), $user->getSalt()); //where $user->password has been bound in plaintext by the form
                $user->setPassword($password);
                $em->persist($user);
                $em->flush();
                $token = new UsernamePasswordToken($user,null , 'main');
                $this->get('security.context')->setToken($token);
                return $this->redirect($this->generateUrl('index'));
            }
        }
 return $this->render('OnTheRoadOnTheRoadBundle:Admin:register.html.twig',array('form'=>$form->createView(),'customlocale'=>$r));
    }

}
