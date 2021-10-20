<?php


class ContactController
{

    public static function index()
    {
        Flight::redirect('/', 201);
    }

    public static function save()
    {
        try {

            $request = Flight::request();
            $contact = R::dispense('contacts');
            $contact->name = $request->data->name;
            $contact->email = $request->data->email;
            //$contact->date = date('Y-m-d h:i:s');
            /*if (isset($_SERVER['REMOTE_ADDR'])) {
                $contact->ip = $_SERVER['REMOTE_ADDR'];
            }*/
            $id = R::store($contact);
            if ($id > 0) {
                echo '<b class="text-success">Saved !</b>';
            } else {
                echo '<b class="text-danger">Error !</b>';
            }
        } catch (Exception $e) {
            echo '<b class="text-danger">Error : ' . $e . '</b>';
        }

    }

    public static function get()
    {
        $contacts = R::getAll('SELECT * FROM contacts');
        echo json_encode($contacts);
    }

}