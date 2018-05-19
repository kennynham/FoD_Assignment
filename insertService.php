<?php
    include ('dbconnect.php');

    $client_id    = $_POST['client_id'];    // Suppose <input type="text" name="client_id">
    $client_name  = $_POST['client_name'];  // Suppose <input type="text" name="client_name">
    $section_id   = $_POST['section_id'];   // Suppose <input type="text" name="section_id">
    $section_name = $_POST['section_name']; // Suppose <input type="text" name="section_name">
    $link_id      = $_POST['link_id'];      // Suppose <input type="text" name="link_id">
    $link_name    = $_POST['link_name'];    // Suppose <input type="text" name="link_name">

    // Values I tested with.
    // $client_id = 112;
    // $client_name = 'Randy';
    // $section_id = 210;
    // $section_name = 'I am a section';
    // $link_id = 20;
    // $link_name = 'http://iamalink.com';

    /***************************
            INSERT CLIENTS
     ***************************/
    if (isset($client_id, $client_name)) {
        $sql_insert_client = "INSERT INTO clients (id, name)
                               VALUES ('$client_id', '$client_name')";
    
        if ($connection->query($sql_insert_client)) {
            echo "Insert into clients table was successful";
        } else {
            echo "Error: " . $sql_insert_clients . "<br> . $connection->error";
        }
    }

    /***************************
            INSERT SECTIONS
    ***************************/
    else if (isset($section_id, $client_id, $section_name)) {
        $sql_insert_section = "INSERT INTO sections (id, client_id, name)
                               VALUES ('$section_id', '$client_id', '$section_name')";
    
        if ($connection->query($sql_insert_section)) {
            echo "Insert into sections table was successful";
        } else {
            echo "Error: " . $sql_insert_section . "<br> . $connection->error";
        }
    }

    /***************************
            INSERT SECTIONS
    ***************************/
    else if (isset($link_id, $section_id, $link_name)) {
        $sql_insert_link = "INSERT INTO links (id, section_id, name)
                            VALUES ('$link_id', '$section_id', '$link_name')";
    
        if ($connection->query($sql_insert_link)) {
            echo "Insert into links table was successful";
        } else {
            echo "Error: " . $sql_insert_link . "<br> . $connection->error";
        }
    }
?>