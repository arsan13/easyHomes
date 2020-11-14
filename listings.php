<?php
    include 'header.php';

    $ownerId = $_SESSION['uid'];
?>

<!-- Deletion Message -->
<?php if(isset($_GET['delete'])): ?>
    <?php if($_GET['delete'] == "success"): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Deleted Successfully!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php else: ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Deletion Unsuccessful!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php
    $sql = "SELECT * FROM properties WHERE ownerId='$ownerId';";
    $result = $conn->query($sql);
    $count = $result->num_rows;
?>

<div class="container">
    <div class="jumbotron">
        <h3 class="display-4">Posted Properties</h3> <hr>
        <div class="row">   

            <?php if($count > 0): ?>

                <?php while($row = $result->fetch_assoc()): ?>
                    
                    <div class="col-4">
                        <div class="card my-4 mx-3">
                            <img src='uploads/<?php echo $row['mainImage']; ?>' width=250 height=250 class='card-img-top'>
                            <div class="card-body">
                                <ul class="list-group list-group-flush lead">
                                    <li class="list-group-item">
                                        Type
                                        <span class="ml-3"><?php echo $row['type']; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        City
                                        <span class="ml-3"><?php echo $row['city']; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Rent 
                                        <span class="ml-3"><?php echo $row['rent']; ?></span>
                                    </li>
                                </ul>
                                
                                <div class="d-flex p-1 justify-content-between">
                                    
                                    <form action="details.php" method="post">
                                        <button type="submit" value="<?php echo $row['imgId']; ?>" class="btn btn-primary px-3" name="submit">Details</button>
                                    </form>

                                    <form action="propertyEdit.php" method="post">
                                        <button type="submit" name="propertyEditBtn"
                                        value="<?php echo $row['imgId']; ?>" class="btn btn-secondary px-4" >Edit</button>
                                    </form>

                                    <form action="includes/inc-propertyDelete.php" method="post">
                                        <button type="button"  class="btn btn-danger px-3" data-toggle="modal" data-target="#deleteConfirm">Delete</button>
                                    </form>
                                    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete this post?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="includes/inc-propertyDelete.php" method="post">
                                                        <button type="submit" name="propertyDeleteBtn"
                                                        value="<?php echo $row['imgId']; ?>" class="btn btn-primary btn-block px-3" >Yes</button>
                                                    </form>
                                                    <button type="button" class="btn btn-secondary px-3" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            
            <?php else: ?>
                
                <h3 class="text-danger">You have not posted any properties.</h3>

            <?php endif; ?>

        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>