
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">                        
                        <ul>                        
                        <?php Department($conn ); ?>
                        </ul>
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
                        <h2>Shopping Cart</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
    
    <?php
    
    
        if(isset($_GET["function"]) =="del"){
            if(isset($_GET["id"])){
                $id =$_GET["id"];
            if(isset($_SESSION['cart']))
            {
                unset($_SESSION['cart'][$id]);
            }
            echo '<meta http-equiv="refresh" content="0; URL=?page=shopping-cart"/>' ;
      
        }
        }

    ?>
    <?php  if(isset($_GET["function1"]) =="delc"){
            if(isset($_GET["id"])){
                $id =$_GET["id"];
            if(isset($_SESSION['cart']))
            {
                unset($_SESSION['cart']);
            }
            
            echo '<meta http-equiv="refresh" content="0; URL=?page=shopping-cart"/>' ;
            
        }
        }?> 
                            <?php 
                                $total =0;
                                if(isset($_SESSION['cart']))
                                {
                                    foreach($_SESSION['cart'] as $key => $value):
                                        $item_price = $value['price'] * $value['qty'];
                                        $total += $item_price;
                                        
                                ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/<?php echo $value['img'] ?>" alt="">
                                        <h5><?php echo $value['name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart_price">
                                        <?php echo $value['price'] ?>
                                    </td>
                                    <td class="shoping__cart__quantity">                                      
                                        <?php echo $value['qty'] ?>
                                    </td>
                                    <td class="shoping__cart__total">
                                        <?php echo $item_price ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                    <a href="?page=shopping-cart&&function=del&&id=<?php echo $key;?>" onclick="return deleteConfirm()"><span> <i class="bi bi-x-circle"></i></span>
                                    </td>
                                </tr>
                                <?php endforeach;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="?page=shop-grid" class="primary-btn cart-btn">Black</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right">
                            Update</a>
                    </div>
                </div>
               
                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <h5>Cart</h5>
                        <ul>
                            <li>ProductSum <span><?php echo $total ?>     $</li>
                            <li>Fee <span><?php echo $total*0.1 ?>     $</span></li>
                            <li>Total <span><?php echo $total*1.1 ?>     $</span></li>
                        </ul>
                        
                    <div class="check__bill__btns">
                     <a href="?page=checkout"><button type="submit" class="primary-btn cart-btn">BUY</button>
                     
                    </a>
                        
                    </div>
                </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    