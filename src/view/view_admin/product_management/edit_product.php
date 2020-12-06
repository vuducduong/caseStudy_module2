
<?php require_once "src/view/view_admin/blocks_admin/header.php" ?>
<div class="main-body-content w-100 ets-pt">
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <fieldset >
            <div class="form-group" >
                <label for="formGroupExampleInput">Product Name</label>
                <input type="text" name="productName" class="form-control" id="formGroupExampleInput" value="<?php echo $products['productName']?>" placeholder="Example input placeholder">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Product Type</label>
                <input type="text" name="productType" id="formGroupExampleInput" value="<?php echo $products['productType']?>" class="form-control" placeholder="Disabled input">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Price</label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput" value="<?php echo $products['price']?>" placeholder="Disabled input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Image</label>
                <img width="100px" src="<?php echo $products['image']?>">
                <input type="file" name="image" class="form-control" id="formGroupExampleInput" value="<?php echo $products['image']?>" placeholder="Disabled input">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
</div>
</div>
<?php require_once "src/view/view_admin/blocks_admin/footer.php" ?>
