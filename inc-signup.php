<?php

    include 'inc-dbconn.php';

    if(isset($_POST['submit'])) 

    {
        $name = $_POST['name'];
        $emails = $_POST['emails'];
        $phone = $_POST['phone'];
        $pwd1 = $_POST['pwd1'];
        $pwd2 = $_POST['pwd2'];

        $errors = array();

        $check = "SELECT * FROM users where email='$emails' or phone='$phone' ;";
        $result = $conn->query($check);
        
        $row = $result->fetch_assoc();
        if($row)
        {
            if($row['email'] == $emails )
            {
                array_push($errors,"Email Already Exists!");
            }
            if($row['phone'] == $phone)
            {
                array_push($errors,"Phone No Already Exists!");
            }
        }
        
        if( $pwd1 != $pwd2)
        {
            echo array_push($errors,"Password Mismatch!");
        }

        if(count($errors) != 0)
        {
            foreach($errors as $error)
            {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
                    .$error.' 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
        }
        else
        {
            $sql = "INSERT INTO users(name,email,phone,pwd)
                    VALUES ('$name','$emails','$phone','$pwd1');";
            $conn->query($sql);
            
            echo '<div class="alert alert-success alert-dismissible fade show"      role="alert">
                    Registered Successfully!!! Please Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }

    }
    
    
    
    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    // $uname = mysqli_real_escape_string($conn, $_POST['pwd1']);
    // $pwd = mysqli_real_escape_string($conn, $_POST['pwd2']);

    // $sql = "INSERT INTO users(fname,lname,email,uname,pwd) 
    //         VALUES ('$fname','$lname','$email','$uname','$pwd');";
    
    // mysqli_query($conn, $sql);

    // header("Location: ../index.php?signup=success")

?>

