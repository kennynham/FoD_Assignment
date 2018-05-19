<?php
    include ('dbconnect.php');

    $client_id    = $_POST['client_id'];    // Suppose <input type="text" name="client_id">
    $client_name  = $_POST['client_name'];  // Suppose <input type="text" name="client_name">
    $section_id   = $_POST['section_id'];   // Suppose <input type="text" name="section_id">
    $section_name = $_POST['section_name']; // Suppose <input type="text" name="section_name">
    $link_id      = $_POST['link_id'];      // Suppose <input type="text" name="link_id">
    $link_name    = $_POST['link_name'];    // Suppose <input type="text" name="link_name">

    
    // $client_id = 100;
    // $client_name = 'James Bond';
    // $section_id = 200;
    // $section_name = 'New Section';
    // $link_id = 1;
    // $link_name = 'http://iamanewlink.com';

    /***************************
            EDIT CLIENTS
    ***************************/
    if (isset($client_id, $client_name)) {
        $client_record = $connection->query("SELECT * FROM clients WHERE id = '$client_id'");
    
        if (mysqli_fetch_row($client_record)) {
            $sql_update_client = "UPDATE clients SET 
                                    name     = '$client_name' 
                                    WHERE id = '$client_id'";

            $client_record = $connection->query($sql_update_client);

            if ($client_record) {
                echo "Client updated successfully.";
            } else {
                echo "Error occured while updating client.";
            }
        } else {
            echo "Client record doesn't exist.";
        }
    } 

    /***************************
            EDIT SECTIONS
    ***************************/
    if (isset($section_id, $section_name)) {
        $section_record = $connection->query("SELECT * FROM sections WHERE id = '$section_id'");
    
        if (mysqli_fetch_row($section_record)) {
            $sql_update_section = "UPDATE sections SET 
                                    name     = '$section_name' 
                                    WHERE id = '$section_id'";

            $section_record = $connection->query($sql_update_section);

            if ($section_record) {
                echo "Section updated successfully.";
            } else {
                echo "Error occured while updating section.";
            }
        } else {
            echo "Section record doesn't exist.";
        }
    } 

    /***************************
            EDIT LINKS
    ***************************/
    if (isset($link_id, $link_name)) {
        $link_record = $connection->query("SELECT * FROM links WHERE id = '$link_id'");
    
        if (mysqli_fetch_row($link_record)) {
            $sql_update_link = "UPDATE links SET 
                                    name     = '$link_name' 
                                    WHERE id = '$link_id'";

            $link_record = $connection->query($sql_update_link);

            if ($link_record) {
                echo "Link updated successfully";
            } else {
                echo "Error occured while updating link.";
            }
        } else {
            echo "Link record doesn't exist.";
        }
    } 
?>