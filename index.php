<?php include 'header.php';?>  

    <div class=" d-none d-md-block"> <img src="images/banner2.jpg" width="1265"> </div> 

    <div class="container my-3 p-2">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" name="location" class="form-control" placeholder="Search By City">
                </div>
                <div class="col mt-2 ml-3">
                    <div class="form-check form-check-inline mr-2">
                        <input class="form-check-input" type="radio" style="transform:scale(1.1);" name="type" id="inputRadio1" value="" checked>
                        <label class="form-check-label" for="inputRadio1">ANY</label>
                    </div>
                        <div class="form-check form-check-inline mr-2">
                        <input class="form-check-input"  style="transform:scale(1.1);" value="1BHK"  type="radio" name="type" id="inputRadio2">
                        <label class="form-check-label"for="inputRadio2">1BHK</label>
                    </div>
                    <div class="form-check form-check-inline mr-2">
                        <input class="form-check-input" value="2BHK" style="transform:scale(1.1);"  type="radio" name="type" id="inputRadio3">
                        <label class="form-check-label"  for="inputRadio3">2BHK</label>
                    </div>
                <div class="form-check form-check-inline mr-2">
                        <input class="form-check-input" value="3BHK" style="transform:scale(1.1);" type="radio" name="type" id="inputRadio4">
                        <label class="form-check-label" for="inputRadio4">3BHK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" value="4BHK" style="transform:scale(1.1);" type="radio" name="type" id="inputRadio5">
                        <label class="form-check-label" for="inputRadio5">4BHK</label>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rent &lt; </div>
                        <input type="number" class="form-control" name="price"
                        placeholder="Upper Limit">
                    </div>
                </div>
            </div>
                <button type="submit" name="filter" class="btn p-1 mt-4 btn-block btn-danger">
                    <img src="images/filter1.png" class="pb-1" width="20"><span class="ml-2 font-weight-normal" style="font-size:1.3em; color:black">Filter</span>
                </button>
            </div>
        </form>
    </div>
    
    <div class="container mt-4">
        <p id="ad" class="text-muted text-center font-weight-normal">
            Have a Property to Rent?
        </p>
        <?php if(isset($_SESSION['uid'])): ?>
            <form action="input.php" class=" d-flex my-2 justify-content-center">
                <button class="btn mx-auto btn-success py-2 px-5 text-center">Post Your Free Ad</button>
            </form>
        <?php else: ?>
            <div class=" d-flex my-2 justify-content-center">
                <button class="btn mx-auto btn-success py-2 px-5 text-center" data-toggle="modal" title="Login to post" data-target="#loginModal">Post Your Free Ad</button>
            </div>
        <?php endif; ?>
    </div>

    <?php
        if(isset($_POST['filter'])){       
            $location = $_POST['location'];
            $price = $_POST['price'];
            $type = $_POST['type'];

            include 'includes/inc-filter.php';
        }else{
            if(isset($_SESSION['uid'])){
                $uid = $_SESSION['uid'];
                $sql = "SELECT * FROM users,properties
                        WHERE users.uid=properties.ownerId AND uid != '$uid';";
            }else{
                $sql = "SELECT * FROM users,properties WHERE users.uid=properties.ownerId LIMIT 9 ;";
            }
        }
    ?>
    
    <?php
        $result = $conn->query($sql);
        $count = $result->num_rows;
    ?>

    <div class="container mt-4">
        <span class="h2 font-weight-normal" style="border-bottom:4px solid crimson;">
        Featured Properties </span>
        
        <div class="row my-4" style="background-color: #f5f5f5;">
            
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
                                        <span class="ml-4"><?php echo $row['city']; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Rent 
                                        <span class="ml-3"><?php echo $row['rent']; ?></span>
                                    </li>
                                </ul>
                                <div class="d-flex pt-1 px-3 justify-content-between">
                                    <?php if(isset($_SESSION['uid'])): ?>

                                        <form action="details.php" method="post">
                                            <button type="submit" value="<?php echo $row['imgId']; ?>" class="btn btn-primary"
                                            name="submit">View more details</button>
                                        </form>

                                        <?php
                                            $uid = $_SESSION['uid'];
                                            $imgId = $row['imgId'];

                                            $saved_sql = "SELECT * FROM saved
                                                        WHERE uid='$uid' && imgId='$imgId' ;";
                                            $saved_res = $conn -> query($saved_sql);
                                        ?>
                                        
                                        <?php if($saved_res -> fetch_assoc()): ?>
                                            
                                            <form action="includes/inc-saved.php" method="post">
                                                <button type="submit" value="<?php echo $row['imgId']; ?>" class="btn btn-white pt-0 btn-outline-light" title="Remove from shortlist"
                                                name="unsavebtn"><img src="images/saved.webp" width="30"></button>
                                            </form>

                                        <?php else: ?>

                                            <form action="includes/inc-saved.php" method="post">
                                                <button type="submit" value="<?php echo $row['imgId']; ?>" class="btn btn-white pt-0 btn-outline-light" title="Add to shortlist"
                                                name="savebtn"><img src="images/save.png" width="30"></button>
                                            </form>

                                        <?php endif; ?>

                                    <?php else: ?>
                                        <button id="moreBtn" class="btn btn-primary btn-block" data-toggle="modal" title="Login for more details" data-target="#loginModal">View more details</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php else: ?>
            
                <h3>0 properties found</h3> 
            
            <?php endif; ?>

        </div>
    </div>

<?php    
    include 'footer.php';
?>
