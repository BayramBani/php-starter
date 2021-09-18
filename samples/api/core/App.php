<?php

class App
{
    public $method;
    public $request_name;
    public $request_id;
    public $uri;

    function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        if (isset($_REQUEST['name']))
            $this->request_name = $_REQUEST['name'];
        if (isset($_REQUEST['id']))
            $this->request_id = $_REQUEST['id'];
        $this->uri = $_SERVER['REQUEST_URI'];
    }
}