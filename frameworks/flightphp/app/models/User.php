<?php
/**
 * Created by PhpStorm.
 * User: Bayram
 * Date: 11/10/2021
 * Time: 11:41
 */

class User
{
    public $username;
    public $password;

    /*function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }*/

    public function displayUsername()
    {
        return $this->username;
    }

}