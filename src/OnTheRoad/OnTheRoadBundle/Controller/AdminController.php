<?php
namespace OnTheRoad\OnTheRoadBundle\Controller;

use OnTheRoad\OnTheRoadBundle\FormsDeclare;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;
use OnTheRoad\OnTheRoadBundle\LanguageUpdate;
class AdminController extends Controller
{
    public function indexAction($locale=null)
    {
       $r= LanguageUpdate::SetLocale($this,$locale);
        $translator = new Translator($locale);

       // echo $translator->trans('OK');
        $formularies = FormsDeclare::GetForms();
       // $em = $this->get('doctrine')->getManager();
       // $data = $em->getRepository('OnTheRoadOnTheRoadBundle:TUser')->findAll();
        return $this->render("OnTheRoadOnTheRoadBundle:Admin:index.html.twig",array("customlocale"=>$r,'forms'=>$formularies));
    }

}
