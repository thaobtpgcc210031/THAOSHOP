<?php
  if(isset($_GET['page']))
  {
      $page = $_GET['page'];
      if($page=="register")
      {
          include_once('Register.php');
      }
      else if($page=="login")
      {
          include_once('Login.php');
      }
      else if($page=="content")
      {
          include_once('content.php');
      }else if($page=="logout")
      {
          include_once('logout.php');
      }
      else if($page=="shop-grid")
      {
          include_once('shop-grid.php');
      }
      else if($page=="shopping-cart")
      {
          include_once('shoping-cart.php');
      }
      else if($page=="shop-details")
      {
          include_once('shop-details.php');
      }
      else if($page=="checkout")
      {
          include_once('checkout.php');
      }
      else if($page=="contact")
      {
          include_once('contact.php');
      }
      else if($page=="pm")
      {
          include_once('admin.php');
      }
      else if($page=="addp")
      {
          include_once('add_product.php');
      }
      else if($page=="edit")
      {
          include_once('product_update.php');
      }
      else if($page=="cate_mana")
      {
          include_once('Category_Management.php');
      }
      else if($page=="addc")
      {
          include_once('Category.php');
      }
      else if($page=="upc")
      {
          include_once('category_update.php');
      }
      else if($page=="upa")
      {
          include_once('acount_update.php');
      } else if($page=="prof")
      {
          include_once('profile.php');
      }
      
      else if($page=="Fea")
  {
      include_once('Menu.php');
  }
      
     
  }else
  {
      include_once ("content.php");
  }
  ?>