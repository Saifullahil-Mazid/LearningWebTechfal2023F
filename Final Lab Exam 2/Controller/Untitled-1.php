<?php

session_start();
require_once("../models/ ");

if(isset($_REQUEST['delete']))
{
    $userData = $_REQUEST['userData'];
    $credentials = json_decode($userData);

    $userID = $credentials->userid;

    $deleted_user = delete_operation_User($userID);

    if($deleted_user)
    {
        echo("The user has been deleted.");
    }
    else
    {
        echo("Could not delete the user.");  
    }
}
else
{
    header('');
}

?>
