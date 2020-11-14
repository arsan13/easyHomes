<?php

include 'inc-dbconn.php';

if(isset($_POST['propertyDeleteBtn']))
{

    $pid = $_POST['propertyDeleteBtn'];
    
    // Interior Images Table    
    $select_int = "SELECT * FROM interiorimages WHERE pid = '$pid';";
    $res_select = $conn -> query($select_int);
    $count = $res_select ->num_rows;
    
    if($count > 0)
    {
        while($row = $res_select->fetch_assoc())
        {
            $paths =$row['images'];
            unlink($paths);
        }
    }
    
    $del_int = "DELETE FROM interiorimages WHERE pid = '$pid' ;";
    $res_intdel = $conn->query($del_int);
    
    
    // Properties Table
    $select_main = "SELECT * FROM properties WHERE imgId = '$pid' ;";
    $res_main = $conn->query($select_main);
    while($row = $res_main -> fetch_assoc())
    {
        $path = $row['mainImage'];
        unlink($path);
    }

    $del_main = "DELETE FROM properties WHERE imgId = '$pid' ;";
    $res_maindel = $conn->query($del_main);

    
    header("Location: ../listings.php?delete=success");
    exit();

}