<?php
    include 'header.php';
?> 

<div class="container">
    <div class="jumbotron">
        <?php if(isset($_GET['upload'])): ?>
            <?php if($_GET['upload'] == "success"): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Posted Successfully!</strong> You will be hearing from a interested tenant soon.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif($_GET['upload'] == "existError"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Upload Unsuccessful!</strong> The file you are trying to upload already exists.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif($_GET['upload'] == "sizeError"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Upload Unsuccessful!</strong> The size of the file is too big.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif($_GET['upload'] == "typeError"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Upload Unsuccessful!</strong> Upload image of appropriate type.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif($_GET['upload'] == "limitError"): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Upload Unsuccessful!</strong> Ony maximum of 10 images can be uploaded.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php else: ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Upload Unsuccessful!</strong> There was some problem. Try Again.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <h1 class="display-4">Post your property</h1>
        <hr class="my-4">
        <form action="includes/inc-upload.php" method="post" enctype="multipart/form-data">
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
                <label for="inputProperty">Address</label>
                <input type="text" name="address"  class="form-control" id="inputAddress" 
                aria-describedby="emailHelp" required>
            </div>
            <div class="form-group row">
                <label for="inputProperty">City</label>
                <input type="text" name="city"  class="form-control" id="inputCity" 
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
                id="inputDescription" rows="6"></textarea>
            </div>
            <div class="form-group row">
                <label for="inputMainImage">Featured Image</label>
                <input type="file" name="file" class="form-control-file" id="inputMainImage" required>
            </div>
            <div class="form-group row">
                <label for="inputMainImage">Interior Images</label>
                <input type="file" name="files[]" class="form-control-file" id="inputInteriorImage"
                required multiple>
            </div>
            <div class="form-group row mt-4">
                <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                <button type="reset" class="btn ml-2 btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>

<?php
    include 'footer.php'
?>