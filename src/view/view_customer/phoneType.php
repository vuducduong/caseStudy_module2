

<?php if(!empty($_SESSION['user'])){
    require_once "src/view/view_customer/blocks_customer/header-member.php";}
else{require_once "src/view/view_customer/blocks_customer/header.php";}?>

<div class="container">
    <div class="row mt-5">
        <?php foreach ($products as $key=>$product):?>
            <div class="col-md-2 col-sm-8">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="width: 100%; display: block;" src="<?php echo $product['image']?>" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">T</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach?>
    </div>
</div>
    <?php require_once "src/view/view_customer/blocks_customer/footer.php"?>

</body>
</html>
