<?php

    include 'inc-dbconn.php';

if(isset($_POST['update']))
{
    $pid = $_POST['update'];

    $rent = $_POST['rent'];
    $deposit = $_POST['deposit'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $furnished = $_POST['furnished'];
    $description = $_POST['description'];

    $sql = "UPDATE properties 
            set rent='$rent',deposit='$deposit',type='$type',size='$size',furnished='$furnished',description='$description' 
            WHERE imgId='$pid';";
    
    $edit=$conn->query($sql);
    
    if($edit)
    {    
        header("Location: ../propertyEdit.php?update=success");
        exit();
    }
    else
    {    
        header("Location: ../propertyEdit.php?update=failed");
        exit();
    }
    
}

?>