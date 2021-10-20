<?php
/**
 * Created by PhpStorm.
 * User: Bayram
 * Date: 11/10/2021
 * Time: 12:05
 */

class Contact
{

    public $id;
    public $nom;
    public $email;
    public $date;
    public $ip;


    public function ShowEmail()
    {
        return $this->email;
    }
}