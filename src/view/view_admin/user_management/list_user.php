
<?php require_once "src/view/view_admin/blocks_admin/header.php" ?>
<div class="main-body-content w-100 ets-pt">
    <h1 align="center" ><strong>Danh sách thành viên</strong></h1>
    <a href="routeAdmin.php?admin=user&user=add-user" class="btn btn-success">Add</a>
    <table class="table table-bordered table-hover" style="text-align: center">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">User Name</th>
        <th scope="col">Full Name</th>
        <th scope="col">Address</th>
        <th scope="col">Sex</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col" colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $key=>$user):?>
    <tr>
        <th scope="row"><?php echo $key+1?></th>
        <td><?php echo $user['userName']?></td>
        <td><?php echo $user['fullname']?></td>
        <td><?php echo $user['address']?></td>
        <td><?php echo $user['sex']?></td>
        <td><?php echo $user['email']?></td>
        <td><?php echo $user['phoneNumber']?></td>
        <td><a type="button" href="http://localhost/case_studymodule2/routeAdmin.php?admin=user&user=edit-user&id=<?php echo $user['id']?> "class="btn btn-warning">Edit</a></td>
        <td><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Delete</a></td>
        <div class="modal fade" id="exampleModalCenter<?php echo $user['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center">Xóa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">Bạn có thật sự muốn xóa</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <a href="http://localhost/case_studymodule2/routeAdmin.php?admin=user&user=delete-user&id=<?php echo $user['id']?> " type="button" class="btn btn-success">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </tr>
<?php endforeach?>
    </tbody>
</table>
</div>
<?php require_once "src/view/view_admin/blocks_admin/footer.php"?>
</body>
</html>