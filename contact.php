<?php
    include 'header.php';
?>

<?php

    if(isset($_POST['querybtn']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $message = $_POST['message'];

        $sql = "INSERT INTO queries (name,email,type,message) 
                VALUES ('$name','$email','$type','$message');";
        $insert = $conn -> query($sql);
        if($insert)
            echo "Success";
        else
            echo "Failed";
    }

?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Contact Us</h1>
            <p class="lead">Feel free to drop us a line below.</p>
            <hr class="my-4">
            <div class="row justify-content-around">
                <div class="col-5">
                    <div class="card card-body shadow-lg p-3 mb-5 bg-white rounded-lg p-4">
                        <form action="" method="post">
                            <div class="form-group my-3">
                                <label for="inputName">Full Name</label>
                                <input type="text" name="name" class="form-control" id="inputName"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group my-4">
                                <label for="inputEmail">Email address</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group my-4">
                                <label for="inputSelect">Type of User</label>
                                <select class="form-control" name=type id="inputSelect">
                                <option value="owner">Owner</option>
                                <option value="tenant">Tenant</option>
                                </select>
                            </div>
                            <div class="form-group my-4">
                                <label for="inputTextarea">Message</label>
                                <textarea class="form-control" name="message" id="inputTextarea" rows="3"
                                required></textarea>
                            </div>
                            <div class="inp-btn my-2">
                                <input class="btn btn-primary" name="querybtn" type="submit" value="Submit">
                                <input class="btn btn-secondary" type="reset" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-4">
                    <!-- <div class="card card-body rounded-lg p-4"> -->
                    <div class="card rounded shadow-lg mb-5 bg-white rounded-lg">
                        <img src="images/contact1.jpg" class="card-img-top">
                        <ul class="list-group list-group-flush p-2">
                            <li class="list-group-item">
                                <img src="images/phone.png" width="30">
                                <span class="lead ml-3">1-800-5642-987</span>
                            </li>
                            <li class="list-group-item">
                                <img src="images/mail.png" width="30">
                                <span class="lead ml-3">info@easyhomes.com</span>
                            </li>
                            <li class="list-group-item">
                                <img src="images/phone.png" width="30">
                                <span class="lead ml-3">044-5434-6755</span>
                            </li>
                            <li class="list-group-item">
                                <img src="images/mail.png" width="30">
                                <span class="lead ml-3">ars.admin@gmail.com</span>
                            </li>
                            <li class="list-group-item">
                                <img src="images/location.png" width="30">
                                <span class="lead ml-3">easyHomes Limited, </span>
                                <span class="lead ml-5">Tidel Park,Taramani, </span>
                                <span class="lead ml-5">Chennai, TN-60028 </span>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>