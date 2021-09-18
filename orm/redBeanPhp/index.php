<?php

/*
 * https://www.redbeanphp.com/
 */

require 'rb-mysql.php';

R::setup( 'mysql:host=localhost;dbname=demo', 'root', '' );


// insert
//$note = R::dispense( 'note' );
//$note->text = 'My holiday';
//$id = R::store( $note );

// select
$note = R::load( 'notes', 1 );
echo $note->all();

// delete
//R::trash( $note );
