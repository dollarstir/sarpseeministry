<?php
include 'db.php';
include 'core.php';

if(isset($_GET['action'])){

    if($_GET['action']=="addmess"){
        extract($_POST);
        sedmessage($name,$email,$contact,$message);
    }
}

?>