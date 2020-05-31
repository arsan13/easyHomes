<?php
    include 'header.php';
?>

<?php if(isset($_POST['propertyEditBtn']))
    
    $pid = $_POST['propertyEditBtn'];
?>

<div class="container php">
    <div class="jumbotron">
        
        <?php if(isset($_GET['update'])): ?>
            
            <?php if($_GET['update'] == "success"): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Updated Successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php else: ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Update Unsuccessful!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

        <?php endif; ?>    

        <h1 class="display-4">Edit your Post</h1>
        <hr class="my-4">
        <form action="inc-propertyEdit.php" method="post">
            <div class="form-group row">
                <label for="inputRent">Rent/Month(INR)</label>
                <input type="number" name="rent" id="inputRent" aria-describedby="emailHelp" 
                class="form-control" required>
            </div>
            <div class="form-group row">
                <label for="inputDeposit">Deposit(INR)</label>
                <input type="number" name="deposit" id="inputDeposit" aria-describedby="emailHelp" 
                class="form-control" required>
            </div>
            <div class="form-group row my-4">
                <span class="mr-3">Type</span>
                <div class="form-check form-check-inline mr-3">
                    <input class="form-check-input" value="1BHK"  type="radio" name="type" id="inputRadio1">
                    <label class="form-check-label" for="inputRadio1">1BHK</label>
                </div>
                    <div class="form-check form-check-inline mr-3">
                    <input class="form-check-input" value="2BHK"  type="radio" name="type" id="inputRadio2">
                    <label class="form-check-label"  for="inputRadio2">2BHK</label>
                </div>
                <div class="form-check form-check-inline mr-3">
                    <input class="form-check-input" value="3BHK"  type="radio" name="type" id="inputRadio3">
                    <label class="form-check-label" for="inputRadio3">3BHK</label>
                </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" value="4BHK" type="radio" name="type" id="inputRadio4">
                    <label class="form-check-label" for="inputRadio4">4BHK</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSize">Size(Sq.Ft)</label>
                <input type="number" name="size"class="form-control" id="inputSize" 
                aria-describedby="emailHelp" required>
            </div>
            <div class="form-group row">
                <label for="inputFurnished">Furnished?</label>
                <select class="form-control" id="inputFurnished" name="furnished">
                    <option value="No">No</option>
                    <option value="Semi">Semi</option>
                    <option value="Fully">Fully</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="inputDescription">Description</label>
                <textarea class="form-control" name="description" 
                id="inputDescription" rows="3"></textarea>
            </div>
            <div class="form-group row mt-2">
                <button type="submit" name="update" value="<?php echo $pid; ?>" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn ml-2 btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>

<?php
    include 'footer.php';
?>