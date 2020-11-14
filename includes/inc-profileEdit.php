<?php

    include 'inc-dbconn.php';
    session_start();

    if(isset($_POST['submit-edit'])) 

    {
        $uid = $_SESSION['uid'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pwd1 = $_POST['pwd1'];
        $pwd2 = $_POST['pwd2'];

        $check = "SELECT * FROM users where uid !='$uid' && (email = '$email' || phone = '$phone') ;";
        $result = $conn->query($check);
        $row = $result->fetch_assoc();
        
        if($row)
        {
            
            if($row['email'] == $email)
            {
                header("Location: ../profileEdit.php?edit=emailExist");
                exit();
            }
            if($row['phone'] == $phone)
            {
                header("Location: ../profileEdit.php?edit=phoneExist");
                exit();
            }
        }
        
        if( $pwd1 != $pwd2)
        {
            header("Location: ..//profileEdit.php?edit=pwdMismatch");
            exit();
        }
        else
        {
            $sql = "UPDATE users 
                    set name='$name',email='$email',phone='$phone',pwd='$pwd1'
                    WHERE uid='$uid';";
            
            $conn->query($sql);
            
            header("Location: ../profileEdit.php?edit=success");
            exit();    
        }

    }
