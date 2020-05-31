<?php
    include 'header.php';
?>

<?php
    $uid = $_SESSION['uid'];
?>

<div class="container">
    
    <div class="jumbotron">

        <?php if(isset($_GET['edit'])): ?>
            <?php if($_GET['edit'] == "success"): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Updated Successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif($_GET['edit'] == "emailExist"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Update Unsuccessful!</strong> Entered Email already exists.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif($_GET['edit'] == "phoneExist"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Update Unsuccessful!</strong> Entered phone number already exists.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif($_GET['edit'] == "pwdMismatch"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Update Unsuccessful!</strong> Passwords did not match.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php else: ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Update Unsuccessful!</strong> There was some problem.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <?php
            $sql="SELECT * FROM USERS WHERE uid='$uid';";
            $result = $conn ->query($sql);
            $row = $result ->fetch_assoc();        
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
        ?>


        <h1 class="display-4">Edit your profile</h1>
        <hr>
        <form action="inc-profileEdit.php" method="POST" id="edit-form">
            <div class="form-group">
                <label for="inputName">Full Name</label>
                <input type="text" name="name" value="<?php echo $name;?>" class="form-control" id="inputName"
                    aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" name="email" value="<?php echo $email;?>" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="inputPhone">Phone Number</label>
                <input type="tel" name="phone" value="<?php echo $phone;?>" class="form-control" id="inputPhone"
                    aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="inputPassword2">New Password</label>
                <input type="password" name="pwd1" class="form-control" id="inputPassword1"  required>
            </div>
            <div class="form-group">
                <label for="inputPassword2">Confirm Password</label>
                <input type="password" name="pwd2" class="form-control" id="inputPassword2"  required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit-edit" id="edit-btn"
                class="btn btn-primary">Save Changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>

    </div>
</div>



<?php
    include 'footer.php';
?>