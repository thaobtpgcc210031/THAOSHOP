    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories"></div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form"><form action="#">
                        <input type="text" placeholder="Ask me?"><button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   	<?php
		if(isset($_GET["id"]))
		{
			$id = $_GET['id'];
			$result = mysqli_query($conn, "SELECT * from Category where Cat_ID = '$id'");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$cat_id = $row['Cat_ID'];
			$cat_name = $row['Cat_Name'];
			$cat_des = $row['Cat_Des'];
	?>
<div class="container">
	<h3>UPDATE</h3>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Category ID(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Category ID" readonly 
								  value='<?php echo $row['Cat_ID'] ?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Category Name(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Category Name" 
								  value='<?php echo $row['Cat_Name'] ?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Description(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Description" 
								  value='<?php echo $row['Cat_Des']?>'>
							</div>
					</div>
                    
					<div class="form-group container">
						<div class="col-sm-offset-2 col-sm-10 text-center">
						      <input type="submit"  class="site-btn" name="btnUpdate" id="btnUpdate" value="Update"/>
                              <input type="button" class="site-btn" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=cat'" />
                              	
						</div>
					</div>
				</form>
	</div>
	<?php
		if(isset($_POST['btnUpdate']))
		{
			$id = $_POST['txtID'];
			$name = $_POST['txtName'];
			$des = $_POST['txtDes'];
			$err="";
			if($name==""){$err .= "</br>Enter name</br>";
			}
			if ($err !="")
			{
				echo $err;
			}
			else
			{
				mysqli_query($conn, "UPDATE Category set Cat_Name = '$name', Cat_Des ='$des' where Cat_ID = '$id'");
				echo '<meta http-equiv="refresh" content="0;URL =?page=cat"/>';
			}
		}?> <?php }else
			{
				echo '<meta http-equiv="refresh" content="0;URL =?page=pm"/>';
			}
		?>
	