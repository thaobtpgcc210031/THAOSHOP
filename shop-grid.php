    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">                     
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">                                
                                <input type="text" placeholder="Ask me?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="breadcrumb-section set-bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>ATN Shop</h2>                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">                      
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                        </div>
                    </div>
                    <div class="row">
                    <?php 
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $result = mysqli_query($conn,"SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name 
                            from product, category where product.Cat_ID = category.Cat_ID and '$id'=category.Cat_ID ");
                        }
                        else{

                            $result = mysqli_query($conn,"SELECT Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name 
                            from product a, category b 
                            where a.Cat_ID = b.Cat_ID order by Cat_Name desc");
                        }
                        
                    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                        
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                            <div class="product__item">
                            <div class="featured_item_pic set-bg"><img src="img/<?php echo $row['Pro_image'] ?>" alt="">
                                   
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="?page=shop-details&&id=<?php echo  $row['Product_ID'] ?>"><?php echo $row["Product_Name"] ?></a></h6>
                                    <h5><?php echo $row["Price"] ?>$</h5>
                                </div>
                            </div>
                        </div>
                            <?php } ?>
                        
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
   