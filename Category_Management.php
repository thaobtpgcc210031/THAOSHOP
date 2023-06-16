
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
                                
                                <input type="text" placeholder="Ask me?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <form name="frm" method="post" action="">
        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No</strong></th>
                    <th><strong>Category Name</strong></th>
                     <th><strong>Description</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>
			<tbody>
            <?php
                include_once("connect.php");
                if(isset($_GET["function"])=="del")
                {
                    if(isset($_GET["id"]))
                    {
                       $id = $_GET["id"];
                        mysqli_query($conn, "delete from Category where Cat_ID='$id'");
                    }   
                }
                $No = 1;
                $result = mysqli_query($conn, "select * from category");
                while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
                ?>
			<tr>
                <td class="cotCheckBox"><?php echo $No; ?></td>
                <td><?php echo $row['Cat_Name']?></td>
                <td><?php echo $row['Cat_Des']?></td>
                <td style='text-align:center'><a href="?page=upc&&id=<?php echo $row['Cat_ID'];?>"><i class="bi bi-check-circle-fill"></i></td>
                <td style='text-align:center'><a href="?page=cat&&function=del&&id=<?php echo $row['Cat_ID']; ?>"
                 onclick="return ConfirmDelete()"><i class="bi bi-x-circle"></i></td>
            </tr>
            <?php
                $No++;
                }
                
                ?>
			</tbody>
        </table>  
 </form>