<?php require_once 'header.php';?>
            

        <section>
            <div class="container">
                <div class="row">
                    <?php require_once 'sidebar.php';?>

                    <div class="col-sm-9 padding-right">
                        <?php foreach ($infoProduct as $detailsProduct): ?>
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="<?php echo PathTemplate; ?>images/home/<?php echo $detailsProduct['image']; ?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <img src="<?php echo PathTemplate; ?>images/product-details/new.jpg" class="newarrival <?php echo $isNew = ($detailsProduct['is_new']==1) ? "": " remove"; ?>" alt="" />
                                        <h2><?php echo $detailsProduct['title']; ?></h2>
                                        <p>Код товара: <?php echo $detailsProduct['code']; ?></p>
                                        <span>
                                            <span>US <?php echo $detailsProduct['price']; ?></span>
                                            <label>Количество:</label>
                                            <input type="text" value="3" />
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>
                                        <p><b>Наличие:</b> <?php echo $isNew = ($detailsProduct['availability']==1) ? " На складе": " Нет на складе"; ?> </p>
                                        <p><b>Состояние:</b><?php echo $isNew = ($detailsProduct['brand']==1) ? " Новое": " Старое"; ?></p>
                                        <p><b>Производитель:</b> <?php echo $detailsProduct['brand']; ?></p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <p><?php echo $detailsProduct['description']; ?></p>
                                </div>
                            </div>
                        </div><!--/product-details-->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        

        <br/>
        <br/>
        
<?php require_once 'footer.php';?>