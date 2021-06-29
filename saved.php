<?php
    include 'header.php';
    $uid = $_SESSION['uid'];
?>

<?php
    $sql = "SELECT * FROM properties,saved WHERE properties.imgId = saved.imgid AND uid='$uid';";
    $result = $conn->query($sql);
    $count = $result->num_rows;
?>

<div class="container">
    <div class="jumbotron">
    <h3 class="display-4">Saved Properties</h3> <hr>
        <div class="row">

            <?php if($count > 0): ?>

                <?php while($row = $result->fetch_assoc()): ?>
                    
                    <div class="col-lg-4 col-md-auto col-sm-1 col-xs-1">
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
                                
                                <form action="details.php" method="post">
                                    <button type="submit" value="<?php echo $row['imgId']; ?>" class="btn btn-primary btn-block mb-1"
                                    name="submit">View more details</button>
                                </form>
                                <form action="includes/inc-saved.php" method="post">
                                    <button type="submit" value="<?php echo $row['imgId']; ?>" class="btn btn-danger btn-block"
                                    name="unsavebtn">Remove from shortlist</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
        
                <?php endwhile; ?>
                <?php else: ?>
                    <h3 class="text-danger"> 0 Saved Properties</h3>
            <?php endif; ?>          
        
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>