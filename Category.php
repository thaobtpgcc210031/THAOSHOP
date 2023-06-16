<section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span> 
                        </div>
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
                                <div class="hero__search__categories">
                                    Menu
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="breadcrumb-section set-bg" data-setbg="img/background.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Products Management</h2>
                        <div class="breadcrumb__option">
                            <a href="?page=content">Home</a>
                            <span>Products Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php
		include_once("connect.php");
		if(isset($_POST['btnAdd']))
		{
			$id = $_POST['txtID'];
			$name = $_POST['txtName'];
			$des = $_POST['txtDes'];
			$err = "";
			if($id=="")
			{
				$err .= "Enter category ID</br>";
			}
			if($name=="")
			{
				$err .= "Enter category name</br>";
			}
			if($err != "")
			{
				echo $err;
			}
			else
			{
				$sql = "select * from Category where Cat_ID ='$id' and Cat_Name = '$name'";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)=="0")
				{
					mysqli_query($conn, "insert into Category (Cat_ID, Cat_Name, Cat_Des) values ('$id', '$name','$des')");
					echo '<meta http-equiv="refresh" content="0;URL =?page=cat"';
				}
				else
				{
					echo "Data duplicated";
				}}}?>

<div class="container">
	<h2>Adding Category</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Category ID(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Catepgy ID" value='<?php echo isset($_POST["txtID"])?($_POST["txtID"]):"";?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Category Name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Catepgy Name" value='<?php echo isset($_POST["txtName"])?($_POST["txtName"]):"";?>'>
							</div>
					</div>                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Description(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Description" value='<?php echo isset($_POST["txtDes"])?($_POST["txtDes"]):"";?>'>
							</div>
					</div>                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="site-btn" name="btnAdd" id="btnAdd" value="Add new"/>
                              <input type="button" class="site-btn" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=cat'" />
			</div>
					</div>
				</form>
	</div>