<?php
namespace OnTheRoad\OnTheRoadBundle\Controller;
class LanguageGetter
{

    public static  function SetLocale($c,$loc)
    {
        if(!empty($loc))
            $locale = $loc;
        else
            $locale = 'en_EN';
        $request = $c->getRequest();
        $t = $request->get('_locale');
        if(($t)!=null)
            $locale = $t;
        $request->setLocale($request->getPreferredLanguage(array($locale/*, 'de'*/)));
    return $locale;
    }
}