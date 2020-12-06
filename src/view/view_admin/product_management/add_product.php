
<?php require_once "src/view/view_admin/blocks_admin/header.php" ?>
<div class="main-body-content w-100 ets-pt">
<div class="container">
    <h1>Add product</h1>
    <form method="post" enctype="multipart/form-data">
        <fieldset >
            <div class="form-group col-6" >
                <label for="formGroupExampleInput">Product Name</label>
                <input type="text" name="productName" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="form-group col-6">
                <label for="formGroupExampleInput">Product Type</label>
                <input type="text" name="productType" id="formGroupExampleInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="form-group col-6">
                <label for="formGroupExampleInput">Price</label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="Disabled input">
            </div>
            <div class="form-group col-6">
                <label for="formGroupExampleInput">Image</label>
                <input type="file" name="image" class="form-control" id="formGroupExampleInput" placeholder="Disabled input">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
</div>
</div>
<?php require_once "src/view/view_admin/blocks_admin/footer.php" ?>


