<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>