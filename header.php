<?php
    include 'inc-dbconn.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> easyHomes </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function ()
        {
            $("#signup-form").submit(function (event)
            {
                event.preventDefault();
                var name = $("#inputName").val();
                var emails = $("#inputEmail1").val();
                var phone = $("#inputPhone").val();
                var pwd1 = $("#inputPassword1").val();
                var pwd2 = $("#inputPassword2").val();
                var submit = $("#signup-btn").val();
                $(".form-message").load("inc-signup.php",
                {
                    name: name,
                    emails: emails,
                    phone: phone,
                    pwd1: pwd1,
                    pwd2: pwd2,
                    submit: submit
                });
            });
        });
    </script>
</head>
<body>

    <?php if(isset($_GET['login'])): ?>
        
        <?php if($_GET['login'] == "success"): ?> 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Login Successful !!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php else: ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Login Unsuccessfull !!!    Invalid Credentials 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    
    <?php endif; ?>
    

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand">easyHomes</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if ($_SERVER['PHP_SELF'] == "/RealEstate/index.php"): ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            <?php elseif ($_SERVER['PHP_SELF'] == "/RealEstate/about.php"): ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item  active">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            <?php elseif ($_SERVER['PHP_SELF'] == "/RealEstate/contact.php"): ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item   active">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            <?php endif; ?>

            <?php if(isset($_SESSION['uid'])): ?>
                    
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link onhover" href="profileEdit.php">Profile</a>
                    </li>
                    <li class="nav-item active"><a class=" nav-link">|</a></li>
                    <li class="nav-item active">
                        <a class="nav-link onhover" href="listings.php">Listings</a>
                    </li>
                    <li class="nav-item active"><a class=" nav-link">|</a></li>
                    <li class="nav-item active ">
                        <a class="nav-link onhover" href="saved.php">Shortlist</a>
                    </li>
                </ul>
                
                <div class="btn">
                    <form action="inc-logout.php" method="post" id="logout-form">
                        <button class="btn btn-info" name="logout-btn" id="logout-btn">Logout</button>
                    </form>
                </div>

            <?php else: ?>
                
                <div class="btn mx-1">
                    <button class="btn btn-info" data-toggle="modal" data-target="#loginModal">
                    Login</button>
                    <button class="btn btn-info"data-toggle="modal" data-target="#signupModal">
                    Sign-up</button>
                </div>

            <?php endif; ?>
        
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Welcome Back</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="inc-login.php" method="POST" id="login-form">
                        <div class="form-group">
                            <label for="inputEmail2">Email address</label>
                            <input type="email" name="email" class="form-control" id="inputEmail2" aria-describedby="emailHelp" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="pwd" class="form-control" id="inputPassword"  required>
                        </div>
                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Forgot Password</label>
                        </div> -->
                        <div class="modal-footer">
                            <button type="submit"  name="submit-login" id="login-btn"
                            class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Join Us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="form-message"></span>
                    <form action="inc-signup.php" method="POST" id="signup-form">
                        <div class="form-group">
                            <label for="inputName">Full Name</label>
                            <input type="text" name="name" class="form-control" id="inputName"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" id="inputPhone"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword1">Password</label>
                            <input type="password" name="pwd1" class="form-control" id="inputPassword1"  required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword2">Confirm Password</label>
                            <input type="password" name="pwd2" class="form-control" id="inputPassword2"  required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit-signup" id="signup-btn"
                            class="btn btn-primary">Sign Up</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
