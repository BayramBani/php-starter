<?php

class note
{
    function __construct()
    {
    }

    public $id;
    public $text;

    public function get(){
        return "GET note";
    }

    public function post(){
        return "POST note";

    }

}