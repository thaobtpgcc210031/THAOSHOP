
   
   <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                       
                       
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#" method="POST">
                                
                                <input type="text" name="txtSearch" placeholder="Ask me?">
                                <button type="submit" id="btnSearch" name ="btnSearch" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>


        </div>
    </section>


    
    <?php 
                if(isset( $_POST['btnSearch']))
                {
                    $search = $_POST['txtSearch'];
                    $result = mysqli_query($conn,"SELECT Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name 
                    from product a, category b 
                    where a.Cat_ID = b.Cat_ID AND Product_Name like '%$search%' order by Pro_image desc");
                    ?>
                    <section class="featured spad">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <h2>Results</h2>
                                    </div>
                                <div class="featured__controls">
                            </div>
                            <div class="row featured__filter">
                    <?php
                    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                    ?>
                   
                                <div class="col-lg-3 col-md-4 col-sm-6 mix text-center ">
                                    <div class="featured__item">
                                    <div class ="featured_item_pic set-bg"><img src="img/<?php echo $row['Pro_image'] ?>" alt="">
                                </div>
                                        <div class="featured__item__text text-center">
                                            <h6><a href="?page=shop-details&&id=<?php echo  $row['Product_ID'] ?>"><?php echo $row["Product_Name"] ?></a></h6>
                                            <h5>$<?php echo $row["Price"] ?></h5>
                                        </div>
                                    </div>
                                </div>
                    <?php
                    }
                    ?>
                            </div>
                        </div>
                    </section>
                    <?php
                }else
                {
                    include_once('Menu.php');
                }
                ?>

    
    


    



