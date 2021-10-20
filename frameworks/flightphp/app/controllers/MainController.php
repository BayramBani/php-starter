<?php

class MainController
{

    public static function hello()
    {
        echo 'hello Flight !';
    }

    public static function home()
    {
        Flight::render('layouts/header', array('title' => 'Home'));
        Flight::render('home', array('title' => 'Comming Soon'));
        Flight::render('layouts/scripts');
        Flight::render('scripts/save_contact');
        Flight::render('scripts/timer');
        Flight::render('layouts/footer');
    }

    public static function admin()
    {
        Flight::render('layouts/header', array('title' => 'Admin'));
        Flight::render('admin');
        Flight::render('layouts/scripts');
        Flight::render('scripts/set_datatable');
        Flight::render('layouts/footer');
    }

    public static function notFound()
    {

        Flight::render('h', array('heading' => 'Hello'), 'header_content');
        Flight::render('b', array('body' => 'World'), 'body_content');

        //Flight::render('l', array('title' => 'Home Page'));

    }

    public static function test()
    {
        Flight::render('h', array('title' => 'Not Found'));
        Flight::render('errors/404');
        Flight::render('layouts/footer');
    }
}