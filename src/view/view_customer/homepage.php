

<?php require_once "src/view/view_customer/blocks_customer/header.php"?>
<div class="container">
<div id="carouselExampleIndicators" style="padding-left: 1px; height: " class="  col-md-9 carousel slide mt-1"data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="http://localhost/case_studymodule2/uploads/carousel/iphone-12-800-300-800x300-2.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/case_studymodule2/uploads/carousel/800-300-800x300.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/case_studymodule2/uploads/carousel/reno4-800-300-800x300-5.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
<!--end slide-->

    <div class="container">
        <div class="row mt-5">
            <?php foreach ($products as $key=>$product):?>
            <div class="col-md-2 col-sm-8" >
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="width: 100%; display: block;" src="<?php echo $product['image']?>" data-holder-rendered="true">
                    <div style="height: 150px; width: 150px" class="card-body">
                        <p  style="font-size: small;width: 70px;height: 60px" class="card-text"><?php echo $product['productName']?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary" name="id" href="index.php?page=action&action=add&id=<?php echo $product['id']?>">Buy</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
        <?php require_once "src/view/view_customer/blocks_customer/footer.php"?>
