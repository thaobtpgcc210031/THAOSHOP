<script>
        function updateNotice(){
            if(confirm("You have update successfully")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
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
                        <h2>Update</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
		if(isset($_SESSION['us'])){
			$account =$_SESSION['us'];
			$result = mysqli_query($conn, "SELECT * from customer where Username='$account' ");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $Cusname = $row['CustName'];
            $Gender = $row['gender'];
            $Address = $row['Address'];
            $telephone = $row['telephone'];
            $email = $row['email'];
            $CusDate = $row['CusDate'];
            $CusMonth = $row['CusMonth'];
            $CusYear = $row['CusYear'];

	?>
<div class="container">
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
					<div class="form-group">
						    
                            <label for="txtTen" class="col-sm-2 control-label">Username(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtUsername" id="txtID" class="form-control"  value="<?php echo $account;?>" readonly/>
							</div>
                      </div>  
                      
                       <div class="form-group">   
                            <label for="" class="col-sm-2 control-label">Password(*):  </label>
							<div class="col-sm-10">
							      <input type="password" name="txtPassword" id="txtPassword" class="form-control"  value=""/>
							</div>
                       </div>  
                       <div class="form-group">   
                            <label for="" class="col-sm-2 control-label">Password Confirm(*):  </label>
							<div class="col-sm-10">
							      <input type="password" name="txtPasswordC" id="txtPasswordC" class="form-control"  value=""/>
							</div>
                       </div>     
                       
                          
                       
                       <div class="form-group">                               
                            <label for="lblFullName" class="col-sm-2 control-label">Full name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtCustName" id="txtCustName"  class="form-control"  value="<?php echo $Cusname;?>"/>
							</div>
                       </div> 
                       
                       <div class="form-group">      
                            <label for="lblEmail" class="col-sm-2 control-label">Email(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtEmail" id="txtEmail"  class="form-control"  value="<?php echo $email;?>" readonly />
							</div>
                       </div>  
                       
                        <div class="form-group">   
                             <label for="lblDiaChi" class="col-sm-2 control-label">Address(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtAddress" id="txtAddress"  class="form-control"  value="<?php echo $Address;?>"/>
							</div>
                        </div>  
                        
                         <div class="form-group">  
                            <label for="lbltelephone" class="col-sm-2 control-label">Telephone(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txttelephone" id="txttelephone" class="form-control"  value="<?php echo $telephone;?>"/>
							</div>
                         </div> 
                         
                          <div class="form-group">  
                            <label for="lblGioiTinh" class="col-sm-2 control-label">Gender(*):  </label>
							<div class="col-sm-10">                              
                                      <label class="radio-inline"><input type="radio" name="txtgender" value="0" id="grpRender" checked />
                                      Male</label> 
                                    
                                      <label class="radio-inline"><input type="radio" name="txtgender" value="1" id="grpRender" />
                                      
                                      Female</label>

							</div>
                          </div> 
                          
                          <div class="form-group"> 
                            <label for="lblNgaySinh" class="col-sm-2 control-label">Date of Birth(*):  </label>
                            <div class="col-sm-10 input-group">
                                <span class="input-group-btn">
                                  <select name="slDate" id="slDate" class="form-control" >
                						<option value="<?php echo $CusDate;?> "><?php echo $CusDate;?></option>
										<?php
                                            for($i=1;$i<=31;$i++)
                                             {                                                
                                                 echo "<option value='".$i."'>".$i."</option>";
                                             }
                                        ?>
                				 </select>
                                </span>
                                <span class="input-group-btn">
                                  <select name="slMonth" id="slMonth" class="form-control">
                					<option value="<?php echo $CusMonth;?>"><?php echo $CusMonth;?></option>
									<?php
                                        for($i=1;$i<=12;$i++)
                                         {
                                             echo "<option value='".$i."'>".$i."</option>";
                                         }
                          
                                    ?>
                				</select>
                                </span>
                                <span class="input-group-btn">
                                  <select name="slYear" id="slYear" class="form-control">
                                    <option value="<?php echo $CusYear;?>"><?php echo $CusYear;?></option>
                                    <?php
                                        for($i=1970;$i<=2020;$i++)
                                         {
                                             echo "<option value='".$i."'>".$i."</option>";
                                         }
                                    ?>
                                </select>
                                </span>
                           </div>

                      </div>	
                      <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="site-btn" name="btnUpdate" id="btnUpdate" value="Update"onclick="return updateNotice()/>
                              <input type="submit" class="site-btn" name="btnIgnore"  id="btnIgnore" value="Cancle" onclick="window.location='?page=content'" />
                              	
                        </div>
                        
                    </div>
                </form>
</div>
                                    
                      <?php
		if(isset($_POST['btnUpdate']))
        {
            
            $Username = $_POST['txtUsername'];
            $Password = $_POST['txtPassword'];
            $Cusname = $_POST['txtCustName'];
            $Gender= $_POST['txtgender'];
            $Address= $_POST['txtAddress'];
            $telephone=$_POST['txttelephone'];
            $email=$_POST['txtEmail'];
            $CusDate=$_POST['slDate'];
            $CusMonth=$_POST['slMonth'];
            $CusYear=$_POST['slYear'];
            $PasswordC = $_POST['txtPasswordC'];
            
            $err = "";
    
            if(strlen($Password)<=5)
            {
                $err.="<li>Password must be greater than 5 chars</li>";
            }
            if($Password!=$PasswordC)
            {
                $err.="<li>Password and confirm password are the same</li>";
            }
            if($err !="")
            {
                $err .= "Enter Your Password</br>";
            }
            if($Password =="")
            {
                $Password =md5($Password);
                 $sqlString = "UPDATE customer set Username ='$Username',  CustName ='$Cusname', 
                gender ='$Gender', Address='$Address', telephone='$telephone', 
                email='$email', CusDate='$CusDate', CusMonth='$CusMonth', CusYear='$CusYear' where Username ='$account'";
                mysqli_query($conn,$sqlString);
                echo '<meta http-equiv="refresh" content="0;URL =?page=upa"';
            }
            else
            {   $Password =md5($Password);
                 $sqlString = "UPDATE customer set Username ='$Username', Password = '$Password', CustName ='$Cusname', 
                gender ='$Gender', Address='$Address', telephone='$telephone', 
                email='$email', CusDate='$CusDate', CusMonth='$CusMonth', CusYear='$CusYear' where Username ='$account'";
                mysqli_query($conn,$sqlString);
                
                echo '<meta http-equiv="refresh" content="0;URL =?page=upa"';
                
            }
        }
    }
    
    ?> 
    