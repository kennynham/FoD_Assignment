<?php
    $SERVER_NAME = 'localhost';
    $USER_NAME   = 'root';
    $PASSWORD    = 'root';
    $DB          = 'fod_assignment';

    $connection = new mysqli($SERVER_NAME, $USER_NAME, $PASSWORD, $DB);

    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }
?>