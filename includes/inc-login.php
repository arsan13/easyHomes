<?php
    include 'inc-dbconn.php';

    if(isset($_POST['submit-login'])) 
    {
        $emaill = $_POST['email'];
        $pwd = $_POST['pwd'];
    
        $check = "SELECT * FROM users WHERE email='$emaill' && pwd='$pwd';";
        $result = $conn->query($check);
        
        if($row = $result->fetch_assoc())
        {
            session_start();
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['email'] = $row['email'];
            header("Location: ../index.php?login=success ");
        }    
        else
        {
            header("Location: ../index.php?login=failed ");
        }
    }
?>