<?php

    include 'inc-dbconn.php';
    session_start();

if(isset($_POST['savebtn']))
    {
        $uid = $_SESSION['uid'];
        $imgId = $_POST['savebtn'];
        
        $check = "SELECT * FROM saved where uid='$uid' && imgId='$imgId' ;";
        $result = $conn->query($check);
        $row = $result->fetch_assoc();
        if(!$row)
        {
            $insert = "INSERT INTO saved(uid,imgId)
                    VALUES ('$uid','$imgId');";
            $res_insert = $conn -> query($insert);

            if($res_insert)
            {
                header('Location: index.php?save=success');
                exit();
            }
            else
            {
                header('Location: index.php?save=failed');
                exit();
            }
        }
        else
        {
            header('Location: index.php?save=failed');
            exit();
        }

    }

    if(isset($_POST['unsavebtn']))
    {
        $uid = $_SESSION['uid'];
        $imgId = $_POST['unsavebtn'];
        
        $remove = "DELETE FROM saved where uid='$uid' && imgId='$imgId' ;";
        $result = $conn->query($remove);   
        
        if($result)
        {
            header('Location: index.php?delete=success');
            exit();
        }
        else
        {
            header('Location: index.php?delete=failed');
            exit();
        }
    }

?>
