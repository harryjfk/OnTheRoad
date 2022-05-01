<?php
namespace OnTheRoad\OnTheRoadBundle;

class FormsDeclare
{
    public static function GetForms()
    {
        return array(array('name' => 'Users', 'route' => 'tuser'), array('name' => 'Comments', 'route' => 'tcomment'), array('name' => 'Polo', 'route' => 'ttourpolo'), array('name' => 'Trip', 'route' => 'ttrip'));
    }

}