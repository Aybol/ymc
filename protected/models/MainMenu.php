<?php

class MainMenu
{

    public static function getMenu()
    {

        $user = Yii::app()->user;

        $mainMenu = array(

            array('label' => 'Admin area', 'url' => array('/admin/'), 'visible' => $user->checkAccess('admin')),
            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => $user->isGuest),
            array('label' => 'Register', 'url' => array('/fan/register'), 'visible' => $user->isGuest),
            array('label' => 'Logout', 'url' => array('/site/logout'), 'visible' => !$user->isGuest)

        );

        return $mainMenu;


    }


}