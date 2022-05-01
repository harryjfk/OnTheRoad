<?php
namespace OnTheRoad\OnTheRoadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use OnTheRoad\OnTheRoadBundle\LanguageUpdate;

class DefaultController extends Controller
{


    public function indexAction($locale = null)
    {
        if($locale=='login')
            return $this->redirect($this->generateUrl('login',array('locale'=>'en')));
        return $this->render("OnTheRoadOnTheRoadBundle:Default:index.html.twig", array('customlocale' => LanguageUpdate::SetLocale($this, $locale)));
    }


}
