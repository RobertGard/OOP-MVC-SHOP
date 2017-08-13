
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products">
                                <?php foreach ($allCategories as $itemCategories): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="/?category/<?php echo $itemCategories['id'];?>" >(<?php echo $itemCategories['name'];?>)</a></h4>
                                    </div>
                                </div>
                                    <?php foreach ($itemCategories['children'] as $itemChildrenCat): ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="/?category/<?php echo $itemChildrenCat['id'];?>" >-<?php echo $itemChildrenCat['name'];?></a></h4>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>