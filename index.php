
<head>
    <meta charset="UTF-8">
    <meta name="description" content="ShoppingOnline">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATN Shop</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/nhap.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/shoppinglogo.png">
   
</head>





  
<body>
<?php
session_start();
//phpinfo();
include_once("connect.php");
?>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
              
            <?php 
		if(isset($_SESSION['us']) && $_SESSION['us'] != ""){?>  <table>
               <tr> <td>
               <a href="?page=prof"><?php echo $_SESSION['us'] ?></a>

              </td>
              <td>
             
              <a href="?page=logout"><a></a> Log Out </a>
               </td>
                 </tr>
               </table>
		<?php 
}
	else{
		?>					
                                                
		 <table>
           <tr>
      <td>
        <a href="?page=login" style="padding: 10px;"> Login</a>
      </td>
           <td>
          <a href="?page=register" style="padding: 10px;" > Register</a>

        </td>                      
         </tr>
       </table>
		<?php 
		}
		?>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="?page=content">Home</a></li>
                <li><a href="?page=shop-grid">Shop</a></li>
                <li><a href="#">Cart</a>
                    <ul class="header__menu__dropdown">
                        
                        <li><a href="?page=shopping-cart">Shoping Cart</a></li>
                        <li><a href="?page=checkout">Check Out</a></li>

                        
                    </ul>
                </li>
                
                <li><a href="?page=contact">Contact</a></li>
            </ul>
        </nav>
        
        <div class="col-lg-3">
                    <div class="hero__categories">

                        <div class="hero__categories__all">
                           <i class="imgindex">
                            <img src="img/conten conten.jpg" alt="">
                           </i>
                            <i class="fa fa-bars"></i>
                            <span>ATN Shop</span>
                        </div>
                        <ul>
                        <?php Department($conn); ?>
                            
                        </ul>
                    </div>
                </div>
    </div>
    
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-1">
                        <div class="header__top__right">
                           
                            
                            <div class="header__top__right__auth">
                            <?php 
										if(isset($_SESSION['us']) && $_SESSION['us'] != ""){
									?>
									 <table>
                                        <tr>
                                            <td>
                                               
                                                <a href="?page=prof" style="padding: 10px;">Hi,<?php echo $_SESSION['us'] ?></a>
                                                <a><i href="?page=shopping-cart" class="bi bi-cart-check"></i></a>
                                               
                                            </td>
                                            <td>
                                              
                    </td>
                                            <td>
                                             <a href="?page=logout" style="padding: 10px;">
                                             
                                            Log Out</a>
                                             <a><i class="bi bi-box-arrow-right"></i></a>
                                            </td>
                                        
                                        </tr>
                                    </table>
									<?php 
										}
										else{
									?>
									 <table>
                                        <tr>
                                            <td>
                                                <a href="?page=login" style="padding: 10px;"><i class="bi bi-box-arrow-in-left"></i> Login
                                                </a>
                                            </td>
                                            <td>
                                                <a href="?page=register" style="padding: 10px;"><i class="bi bi-briefcase-fill"></i>Register</a>
                                            </td>
                                        
                                        </tr>
                                    </table>
									<?php 
										}
									?>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <div class="text-primary set-bg" ><a href="index.php">
                       <img src="img/logo.avif" href="/content.php"></div> </a>
                       
                    
                </div>
                <div class="col-lg-6">
                    <?php if(isset($_SESSION['us']) && $_SESSION['us'] != ""){
                        ?> 
                    <nav class="header__menu">
                    
                        <ul>
                      
                          
                            <li class="active"><a href="?page=content">Home</a></li>
                            <li><a href="?page=shop-grid">Shop</a></li>
                            <li><a id ="CMM"href="?page=pm">Admin</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="?page=cate_mana">Category</a></li>

                                    </ul>
                                    </li>
                            <li><a href="?page=content">Cart</a>
                                   <ul class="header__menu__dropdown">
                                    
                                    <li><a href="?page=shopping-cart">Shoping Cart</a></li>
                                    <li><a href="?page=checkout">Check Out</a></li>
                                    
                            </ul>
                            </li>
                            
                            <?php  if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){ 

                            ?>  <li><a id ="CMM"href="?page=pm">Admin</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="?page=cate_mana">Category</a></li>

                                    </ul>
                                    </li>
                                <li><a href="?page=content">Cart</a>
                                   <ul class="header__menu__dropdown">
                                    
                                    <li><a href="?page=shopping-cart">Shoping Cart</a></li>
                                    <li><a href="?page=checkout">Check Out</a></li>
                                    
                            </ul>
                            </li>
                                
                        </ul>
                                
                            <?php } else { 
                            ?>
                            <?php 
                                } 
                             ?>
                        </ul> 
                        
                    </nav>
                    <?php 
                        } else {
                             ?> 
                             <nav class="header__menu">
                    
                             <ul>
                                 <li class="active"><a href="?page=content">Home</a></li>
                                 <li><a href="?page=shop-grid">Shop</a></li>
                                 <li><a href="?page=contact">Contact</a></li>
                                 <li><a href="?page=shopping-cart">Shoping Cart</a></li>
                                 
                             </ul> 
                             
                         </nav>
                        <?php } ?>   
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <?php
        include_once ("Page.php");
?>
   

    

    
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #45526e"
          >
   
    <div class="container p-4 pb-0">
      <section class="">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">Baby</a>
            </p>
            <p>
              <a class="text-white">Child</a>
            </p>
            <p>
              <a class="text-white">Young</a>
            </p>
            
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white">Page</a>
            </p>
            <p>
              <a class="text-white">Home</a>
            </p>
            <p>
              <a class="text-white">Shop</a>
            </p>
            <p>
              <a class="text-white">Addres</a>
            </p>
            <p>
              <a class="text-white">Pages</a>
            </p>
          </div>
          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="bi bi-house-door"></i> Can Tho, CT 10012, VN</p>
            <p><i class="bi bi-envelope"></i> shoppingonline@gmail.com</p>
            <p><i class="bi bi-phone"></i> + 01 234 567 88</p>
            <p><i class="bi bi-printer"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2022 Copyright:
              <a class="text-white" href="https://shoppingonline.com/"
                 >Shoppingonline.com</a
                >
            </div>
           
          </div>
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
         
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="bi bi-facebook"></i
              ></a>

        
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="bi bi-twitter"></i
              ></a>

            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="bi bi-google"></i
              ></a>

            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="bi bi-instagram"></i
              ></a>
          </div>
        </div>
      </section>
    </div>
  </footer>
</div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script >
        function ConfirmDelete()
        {
            if(confirm("Are you sure? "))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>
    <?php 
    include_once("connect.php");
	function Category_List($conn )
	{
		$sqlString = "SELECT Cat_ID, Cat_Name from Category";
		$result = mysqli_query($conn, $sqlString);
		
			while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				echo '<li ><a  href="?page=pm&&id='.$row['Cat_ID'].'">'.$row['Cat_Name'].'</a></li>';
			}
	}
    function Featured($conn){

        $sqlString = "SELECT Cat_ID, Cat_Name from Category";
        $result = mysqli_query($conn, $sqlString);
        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				echo '<li data-filter=".Cassette"><a href="?page=content&&id='.$row["Cat_ID"].'">'.$row["Cat_Name"].'</a></li>';
			}
    }
    function Department($conn )
	{
		$sqlString = "SELECT Cat_ID, Cat_Name from Category";
		$result = mysqli_query($conn, $sqlString);
		
			while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				echo '<li ><a  href="?page=shop-grid&&id='.$row['Cat_ID'].'">'.$row['Cat_Name'].'</a></li>';
			}
    }
    
    
    
    ?>
    
    



