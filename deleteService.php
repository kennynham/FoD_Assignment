<?php 
    include('dbconnect.php');

    $client_id    = $_POST['client_id'];    // Suppose <input type="text" name="client_id">
    $section_id   = $_POST['section_id'];   // Suppose <input type="text" name="section_id">
    $link_id      = $_POST['link_id'];      // Suppose <input type="text" name="link_id">

    // Values I tested with.
    // $client_id = 100;
    // $section_id = 207;
    // $link_id = 4;
    
    /***************************
            DELETE CLIENTS
    ***************************/
    if (isset($client_id)) {
        $sql_delete_client = $connection->query("DELETE FROM clients WHERE id = '$client_id'");
        
        if ($sql_delete_client) {
            echo "Client successfully removed";
        } else {
            echo "An error occured while trying to remove client";
        }
    }

    /***************************
            DELETE SECTIONS
    ***************************/
    if (isset($section_id)) {
        $sql_delete_section = $connection->query("DELETE FROM sections WHERE id = '$section_id'");
        
        if ($sql_delete_section) {
            echo "Section successfully removed";
        } else {
            echo "An error occured while trying to remove section";
        }
    }

    /***************************
            INSERT CLIENTS
    ***************************/
    if (isset($link_id)) {
        $sql_delete_link = $connection->query("DELETE FROM links WHERE id = '$link_id'");
        
        if ($sql_delete_link) {
            echo "Link successfully removed";
        } else {
            echo "An error occured while trying to remove link";
        }
    }
?>