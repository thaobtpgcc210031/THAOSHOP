
<?php 

if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name, product.SmallDesc, product.DetailDesc 
from product , category  
where product.Cat_ID = category.Cat_ID and product.Product_ID='$id'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
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
   
    <section class="breadcrumb-section set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Detail Product</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/<?php echo $row["Pro_image"]; ?>" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $row["Product_Name"]; ?></h3>
                        <div class="product__details__rating">                            
                        </div>
                        <div class="product__details__price">$<?php echo $row["Price"]; ?></div>
                        <p><?php echo $row["SmallDesc"]; ?></p>
                        <form method="POST">
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" name="txtqty" readonly  value="1">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="btnCart" class="primary-btn">ADD TO CARD</button>                            
                        </form>
                        <ul>
                           
                            <li><b>Insurance</b> <span>12 months</span></li>
                            <li><b>Delivery time</b> <span>About 2 days</span></li>
                            <li><b>Product volume</b> <span>100g</span></li>
                            <li><b>Share</b>
                                <div class="share">
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6><?php echo $row["DetailDesc"]; ?></h6>
                                    <p></p>
                                        
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>                                    
                                    <p>Let It Be is the Beatles' last studio album, released on May 8, 1970 by Apple Records. This is also the only album that George Martin is not a producer but instead is Phil Spector. Along with the Yellow Submarine, this is a rare album by The Beatles that Rolling Stone magazine rated negative on quality. The album includes a number of popular songs, such as "Let It Be", "Get Back", "Across the Universe" and "The Long and Winding Road".</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Taste:good</p>
                                    <p>Quality:good</p>
                                    <p>Occasion:casual</p>
                                    <p>Items arrived promptly. Good personalised delivery. Neat bottles. Have ordered from this seller before. Nice tasting but abit expensive.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
<?php }
    if(isset($_POST['btnCart']))
    {
        $qty = $_POST['txtqty'];
    if(!isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id]['img'] = $row['Pro_image'];
        $_SESSION['cart'][$id]['name'] = $row['Product_Name'];
        $_SESSION['cart'][$id]['price'] = $row['Price'];
        $_SESSION['cart'][$id]['qty'] = $qty;
        echo "<script> alert(' Add to cart successful ');location.href='?page=content';</script>";
        }
    else
    {
        $_SESSION['cart'][$id]['qty'] += $qty;
        echo "<script> alert(' Add to cart successful ');location.href='?page=content';</script>";
    }
    }
 ?>
 
  