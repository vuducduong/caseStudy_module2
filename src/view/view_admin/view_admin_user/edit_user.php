
<?php require_once "src/view/view_admin/blocks_admin/header.php" ?>
<div class="t-body" >Edit User</div>
<div class="main-body-content w-100 ets-pt">
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <fieldset >
                <div class="form-group" >
                    <label for="formGroupExampleInput">User Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $user['name']?>" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Address</label>
                    <input type="text" name="address" value="<?php echo $user['address']?>" id="formGroupExampleInput" class="form-control" placeholder="Disabled input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">email</label>
                    <input type="email" name="email"  value="<?php echo $user['email']?>"class="form-control" id="formGroupExampleInput" placeholder="Disabled input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Phone Number</label>
                    <input type="text" name="phoneNumber" value="<?php echo $user['phoneNumber']?>" class="form-control" id="formGroupExampleInput" placeholder="Disabled input">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </div>
</div>

<?php require_once "src/view/view_admin/blocks_admin/footer.php"?>
</body>
</html>