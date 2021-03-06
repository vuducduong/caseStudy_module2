
<?php require_once "src/view/view_admin/blocks_admin/header.php" ?>
<div class="t-body" >Add User</div>
<div class="main-body-content w-100 ets-pt">
    <div class="container">
        <h1>Add product</h1>
        <form method="post" enctype="multipart/form-data">
            <fieldset >
                <div class="form-group" >
                    <label for="formGroupExampleInput">User Name</label>
                    <input type="text" name="userName" required="required" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="form-group" >
                    <label for="formGroupExampleInput">Pass Word</label>
                    <input type="text" name="passWord" required="required" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>

                <div class="form-group" >
                    <label for="formGroupExampleInput">Full Name</label>
                    <input type="text" name="fullname" required="required" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Address</label>
                    <input type="text" name="address" id="formGroupExampleInput" required="required" class="form-control" placeholder="Disabled input">
                </div>
                <div class="form-group" >
                    <label for="formGroupExampleInput">Sex</label>
                    <input type="text" name="sex" class="form-control" required="required" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">email</label>
                    <input type="email" name="email" class="form-control" required="required" id="formGroupExampleInput" placeholder="Disabled input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Phone Number</label>
                    <input type="text" name="phoneNumber" class="form-control" required="required" id="formGroupExampleInput" placeholder="Disabled input">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </div>
</div>
<?php require_once "src/view/view_admin/blocks_admin/footer.php"?>

</body>
</html>