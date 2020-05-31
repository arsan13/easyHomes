<?php
    include 'header.php';
?>

<?php if(isset($_POST['submit'])): ?>
    
    <?php $imgId = $_POST['submit']; ?>   
    
    <?php
        $sql = "SELECT images FROM interiorimages WHERE pid = $imgId;";
        $result = $conn->query($sql);
        $count = $result->num_rows;
    ?>
    
    <?php if($count > 0): ?>

        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
            <?php $ac=0; ?>
            
            <?php while($row = $result->fetch_assoc()): ?>
            
                <?php 
                    $ac+=1;
                    if($ac==1)
                        $active='active';
                    else
                        $active='';
                ?>

                <div class="carousel-item <?php echo $active;?>">
                <img src="<?php echo $row['images'];?>" class="d-block w-100">
                </div>

            <?php endwhile; ?>

            </div>
            <div class="carousel-caption d-none d-md-block">
                <h3 class="lead">Interior Images</h3>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    <?php else: ?>

        <h3 class="alert alert-danger">Interior images not available</h3>

    <?php endif; ?>

    <?php 
        $sql = "SELECT * FROM users,properties 
                WHERE users.uid = properties.ownerId AND imgId='$imgId';";
        $result = $conn -> query($sql);
        $row = $result -> fetch_assoc();
    ?>

    <?php if($row): ?>
    
    <div class="container my-4">    
        <div class="grid-wrapper">
            <div class="imgGrid d-none d-md-block">
                <img src='<?php echo $row['mainImage']; ?>' width="400" height="300">
            </div>
            <div class="nestedGrid">
                <div class="box">
                    <div class="header">Rent (INR) </div>
                    <div class="content"><?php echo $row['rent']; ?></div>
                </div>
                <div class="box">
                    <div class="header">Deposit(INR) </div>
                    <div class="content"><?php echo $row['deposit']; ?></div>
                </div>
                <div class="box">
                    <div class="header"> Type </div>
                    <div class="content"><?php echo $row['type']; ?></div>
                </div>
                <div class="box">
                    <div class="header">Size (Sq.Ft)</div>
                    <div class="content"><?php echo $row['size']; ?></div>
                </div>
                <div class="box">
                    <div class="header">Furnished?</div>
                    <div class="content"><?php echo $row['furnished']; ?></div>
                </div>
                <div class="box">
                    <div class="header">City</div>
                    <div class="content"><?php echo $row['city']; ?></div>
                </div>
            </div>
        </div>
        
        <div class="mainGrid">
            <div class="description">
                <span class="heading">Description</span>
                <div class="details">
                    <p class="text-justify">
                        <?php echo $row['description']; ?>
                    </p>
                    <p>
                        <b>Address: </b><?php echo $row['address'].', '.$row['city']; ?>
                    </p>
                </div>
            </div>
            <div class="owner">
                <span class="heading">Contact Owner</span>
                <div class="contact">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b>Name</b>
                            <span class="lead ml-3"><?php echo $row['name']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Phone</b>
                            <span class="lead ml-3"><?php echo $row['phone']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b>
                            <span class="lead ml-4"><?php echo $row['email']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php else: ?>

        <?php echo "There was some problem"; ?>

    <?php endif; ?>


<?php else: ?>

    <h3 class="alert alert-danger">There was some problem</h3>

<?php endif; ?>


<?php
    include 'footer.php';
?>