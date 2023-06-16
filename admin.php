

<script>
        function deleteConfirm(){
            if(confirm("Are you sure?")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <ul>
                        <li ><a  href="?page=pm">All</a></li>

                        <?php Category_List($conn ); ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                
                                <input type="text" placeholder="What do yo u need?">
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
                        <h2>Admin</h2>
                       
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
                                    <th class="shoping__product">Category</th>
                                    
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th><a href="?page=addp">+</a></th>
                                    
                                </tr>
                            </thead>
                            <?php 
                                include_once("connect.php");
                                if(isset($_GET["function"])=="del"){
                                    if(isset($_GET["id"])){
                                        $id=$_GET["id"];
                                        $sq="SELECT Pro_image from product WHERE Product_ID='$id'";
                                        $res= mysqli_query($conn, $sq);
                                        $row= mysqli_fetch_array($res, MYSQLI_ASSOC);
                                        $filePic= $row['Pro_image'];
                                        mysqli_query($conn,"DELETE FROM product WHERE Product_ID='$id'");
                                        echo '<meta http-equiv="refresh" content="0;URL =?page=pm"/>'
                                        ?>
                                        <?php
                                    }
                                ?>          
                                <?php  
                                } ?>
                            <tbody>
                            <?php 
                                 if(isset($_GET['id'])){
                                    $id=$_GET['id'];
                                    $result = mysqli_query($conn,"SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name 
                                    from product, category where product.Cat_ID = category.Cat_ID and '$id'=category.Cat_ID ");
            
                                }else{
                                $result = mysqli_query($conn,"SELECT product.Product_ID, product.Product_Name, product.Price, product.Pro_qty, product.Pro_image, category.Cat_Name 
                                    from product, category where product.Cat_ID = category.Cat_ID ");
                                }
                                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                                    ?>
                                <tr>
                                    <td class="shoping__cart__item" style="width: 1000px">
                                        <img src="img/<?php echo $row['Pro_image'] ?>" alt="">
                                        <h5><?php echo $row["Product_Name"]; ?></h5>
                                    </td>
                                    <td class="shoping__cart__item">
                                        
                                        <h5><?php echo $row["Cat_Name"]; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $<?php echo $row["Price"]; ?>
                                    </td>
                                    <td class="shoping__cart__price">
                                      
                                                <?php echo $row["Pro_qty"]; ?>
                                      
                                    </td>
                                    <td class="shoping__cart__total">
                                       <a href="?page=edit&&id=<?php echo $row['Product_ID'] ?>">Edit</a>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        
                                        <a href="?page=pm&&function=del&&id=<?php echo $row["Product_ID"];?>" onclick="return deleteConfirm()"><span><i class="bi bi-x-circle"></i></span>
                                   </td>
                                </tr>
                                <?php
                                     
                                     }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	

   
    