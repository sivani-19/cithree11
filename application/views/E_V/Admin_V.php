<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
   
</head>
<body>
<nav class="navbar">
    <div class="login">logo</div>
    <div class="menu ">
    <div class="mb-3">
     <span class="home"><a href="<?php echo base_url('EA_C/Login_C/Admin_Dashboard')?>">Dashboard</a></span>    
    </div>
    <div class="mb-3">
    <span class="Products">Products</span>  
    </div>
    <ul class="products_ul">
   <li class="Products_li"><a href="<?php echo base_url('EA_C/Login_C/Admin_products')?>">All Products</a></li>
   <li class="Products_li"><a href="<?php echo base_url('Add_product')?>">Add Products</a></li>
</ul>
    <div class="mb-3">
    <span class="Services"><a href="<?php echo base_url('EA_C/Login_C/Message')?>">Message</a></span>  
</div>
    <div class="mb-3">
    <span class="about_us">Orders</span>  
    </div>
   <div class="mb-3"> 
<span class="Profile">Profile</span>  
</div>
   <ul class="Profile_ul">
   <li class="Profile_li"><a href="<?php echo base_url('');?>">Update</a></li>
      <li class="Profile_li">Logout</li>
   </ul>
    </div>
<div class="menu-bar">
<i class="fa-solid fa-bars"></i>
</div>
</nav>
</body>
<style>
.navbar{display:flex;flex-direction:column;background-color: black;color: white;font-size:1.6rem;align-items: start;height: 100vh;position: fixed;width:13%;padding: 2rem;}
.menu div{flex-direction:column;justify-content: center;cursor: pointer;padding: 20px;}
.menu span{ position: absolute; }
.mb-3:focus{color: blue;}
a{text-decoration: none;color: white;}
.products_ul{display: none;list-style-type: none;position: relative; /* Make the list absolute to position it */margin: 5px 0px -25px 0px;}
.product_ul li a{text-decoration: none;}
li{top:0%;position: relative; padding:10px;cursor: pointer;}
.Services_ul{display: none;list-style-type: none;position: relative; /* Make the list absolute to position it */ margin: 5px 0px -25px 0px; }
.about_us_ul{display: none;list-style-type: none;position: relative; /* Make the list absolute to position it */  margin: 5px 0px -25px 0px;}
.Profile_ul{display: none;list-style-type: none;position: relative; /* Make the list absolute to position it */  margin: 5px 0px -25px 0px;}
.menu-bar{display:flex;align-items: end;justify-content: end;position:absolute;right:2rem;cursor: pointer;}
.active{background-color: white;color: black;}
  .menu-bar i{display: none;}
  @media screen and (max-width:768px)
    {
    .menu{display: none;flex-direction: column;justify-content:flex-start;align-items: flex-start;position:absolute;background-color: black;color: white;height:100%;right: 0%;top:0%;padding-top:3rem;}
    .menu div{padding-top: 1rem;}
    .menu-bar i{display: block;}
    .products_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:0% ;margin-right: 12.5rem;} 
   .Services_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-right: 12.5rem; }
   .about_us_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-right: 12.5rem;background-color: black;  }
   .Profile_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-right: 11rem;background-color: black;  }
    }  
</style>

<script>
    
    
const Services = document.querySelector(".Services");
const Services_ul = document.querySelector(".Services_ul");
  Services.addEventListener("click", function(event) {
    if(Services_ul.style.display=="none"||Services_ul.style.display=="")
    {Services_ul.style.display = "block";}
else{ Services_ul.style.display="none";}
});
document.addEventListener("click",function(){
    const Services = document.querySelector(".Services");
    const Services_ul = document.querySelector(".Services_ul");
    if(Services.contains(event.target)||Services_ul.contains(event.target))
    {

    }
    else{Services_ul.style.display="none";} 
});
const products = document.querySelector(".Products");
const products_ul = document.querySelector(".products_ul");
  products.addEventListener("click", function(event) {
    if(products_ul.style.display=="none"||products_ul.style.display=="")
    { products_ul.style.display = "block";  }
else{ products_ul.style.display="none"; }
});
document.addEventListener("click",function(){
    const products = document.querySelector(".Products");
   const products_ul = document.querySelector(".products_ul");
    if(products.contains(event.target)||products_ul.contains(event.target))
    {

    }
    else{products_ul.style.display="none"; } 
});
const about_us = document.querySelector(".about_us");
const about_us_ul = document.querySelector(".about_us_ul");
  about_us.addEventListener("click", function(event) {
    if(about_us_ul.style.display=="none"||about_us_ul.style.display=="")
    { about_us_ul.style.display = "block";  }
else{about_us_ul.style.display="none";}
});
document.addEventListener("click",function(){
    const about_us = document.querySelector(".about_us");
    const about_us_ul = document.querySelector(".about_us_ul");
    if(about_us.contains(event.target)||about_us_ul.contains(event.target))
    {

    }
    else{
        about_us_ul.style.display="none";
    } 
});
const profile = document.querySelector(".Profile");
    const profileUl = document.querySelector(".Profile_ul");
   profile.addEventListener("click", function(event) {
    if(profileUl.style.display=="none"||profileUl.style.display=="")
    {
        profileUl.style.display = "block";  
    }
    else
    {
    profileUl.style.display="none";
    }
});
document.addEventListener("click",function(){
    const profile = document.querySelector(".Profile");
    const profileUl = document.querySelector(".Profile_ul");
    if(profile.contains(event.target)||profileUl.contains(event.target))
    {

    }
    else{
        profileUl.style.display="none";
    } 
});

const menu_bar = document.querySelector(".menu-bar");
    const menu = document.querySelector(".menu");
   menu_bar.addEventListener("click", function(event) {
    if(menu.style.display=="none"||menu.style.display=="")
    {
        menu.style.display = "block";  
    }
    else
    {
    menu.style.display="none";
    }
});

</script>
</html>