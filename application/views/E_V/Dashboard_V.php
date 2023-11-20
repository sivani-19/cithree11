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
    <form action="<?php echo base_url('search');?>" method="post">
    <?php $id= $this->session->userdata('userid');?>
    <nav class="navbar">
    <span class="login"><a href="product_dashboard">logo</a></span>
    <div class="menu">
    <div class="mb-3">
     <span class="home">
        <a href="product_dashboard">Home</a></span>    
    </div>
    <div class="mb-3">
    <span class="Products">Products <i class="fa-solid fa-caret-down"></i></span> 
    <ul class="products_ul">
   <li class="Products_li"><a href="<?php echo base_url('search?tag='.'laptop');?>">Laptop</a></li><br>
   <li class="Products_li"><a href="<?php echo base_url('search?tag='.'phone');?>">cellphone</a></li><br>
   <li class="Products_li"><a href="<?php echo base_url('search?tag='.'earphone');?>">earphones</a></li><br>
</ul>
    </div>
    <div class="mb-3">
    <span class="Services"><a href="sellar">Become Sellar</a></span>  
    </div>
    <div class="mb-3">
    <span class="about_us"><a href="aboutus">About us</a></span>  
    </div>
    </div>
    <div class="right_side">
    <div class="search_product">
    <span><input type="text" name="search_tags" class="search"><span>
    <span class="search_i">
        <a href="<?php echo base_url('search');?>">
        <button name="search" type="submit"><i class="fa-solid fa-magnifying-glass"  style="color:black;">
        </i></button></a>
    </span>
    </div>
    <div class="notification">
   <span><i class="fa-solid fa-envelope"></i></span>
   <span class="message_s " id="m_h">Message</span>
    </div>
   <div class="mb-3P">
   <span class="Profile"><i class="fa-solid fa-user"></i> <span class="Profile" id="m_h"></span> <i class="fa-solid fa-caret-down down1" ></i></span>  
   <ul class="Profile_ul">
   <li class="Profile_li"><a href="<?php echo base_url('profile_update?id='.$id);?>">Update</a></li><br>
   <li class="Profile_li"><a href="<?php echo base_url('login');?>">Logout</a></li><br>
   </ul>
    </div>
    <div class="cart">
    <a href="<?php echo base_url('cart');?>">
    <i class="fa-solid fa-cart-shopping"></i>
    <span class="cart_s" id="m_h">Cart</span>
    </a>
</div>
</div>
<div class="menu-bar">
<i class="fa-solid fa-bars"></i>
</div>
</nav>
    </form>
</body>
<style>
    body{padding: 0%;margin: 0%;}
    .navbar{display: flex;align-items: center;background-color: black;color: white;font-size:1.4rem;align-items: center;padding: 2rem 2rem;position: relative;}
    .menu{display: flex;position: relative;}
    .menu div{display: flex;justify-content: center;align-items:center;padding: 0 20px;cursor: pointer;margin: 0rem 1rem;position: relative;}
   .products_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */padding: 20px;top: 0%;background-color: black;} 
   .Services_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */padding: 20px;top: 0%;background-color: black;  }
   .about_us_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */padding: 20px;top: 0%;background-color: black;  }
    .Profile_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */padding: 20px;margin-top: 3.5%;background-color: black;  }
    .menu-bar{display:flex;align-items: center;justify-content: center;position:absolute;left:2rem;cursor: pointer;}
   .menu-bar i{display: none;z-index: 2;}
  .search_product input{outline:none;padding: 0.5rem 1rem;padding-right:4rem;width:15.5rem;font-size: 20px;}
  .search_product{padding: 4px;display: flex;align-items: center;justify-content: center;}
  .search_product span{margin: 0px 2px;}
  .search_product .search_i{padding: 4px;position: absolute;left:19rem;color:black;padding-left: 1.2rem;cursor: pointer;}
  .right_side{position:absolute;display: flex;justify-content:center;align-items:center;right: 1rem;top: 1.5rem;}
  .right_side div{margin:0px 20px;}
  .Profile{margin:0px 2px;}
  .notification span {margin:0px 2px;}
  .menu_search_product{display: none;}
  .mb-3P{cursor: pointer;}
  a{text-decoration: none;color: white;}
 .search_i button{padding: 0.7rem;margin: -0.19rem;}
  @media only screen and (min-device-width:478px) and (max-device-width:768px)
    {
    .login{display: none;}
    body{padding: 0%;margin: 0%;} 
    span{display: flex;width: 100%;}
    .navbar{display: flex;align-items: flex-start;justify-content:flex-start;background-color: black;color: white;font-size:1.4rem;padding:2rem auto;}
    .menu{display:none;flex-direction: column;justify-content: flex-start;align-items: flex-start;height:100%;position:fixed;background-color: black;left:0%;z-index:2;top: 0%;padding-top: 4rem;}
    .menu span{position:relative;display:flex;flex-direction: column;justify-content: flex-start;align-items: flex-start;padding: 2rem 2rem;}
    .products_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem;background-color: black;} 
   .Services_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem; background-color: black;}
   .about_us_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem;background-color: black;}
   .Profile_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-right: 11rem;background-color: black;}
   .search_product{display: flex;justify-content:flex-start;align-items:flex-start;top: 2.5rem;position: absolute;width:auto;background-color: black;margin:0 auto;}
   .search_i i{display: flex;position: absolute;left:0%;justify-content: center;align-items: center;display: none;}
   .right_side{display: flex;justify-content:flex-end;align-items:flex-end;top:1.5rem;background-color: black;width: 100%;}
   .menu-bar i{display:flex;align-items: center;justify-content: center;position:absolute;left:0rem;cursor: pointer;color:white;}
   .search_product{padding: 4px;display: flex;align-items: center;justify-content: center;display: none;}
   .menu_search_product{display: block;top:2rem;position: relative;margin:auto;}
   .menu_search_product {display: flex;justify-content: center;align-items: center;position: relative;}
   .menu_search_product input{position: relative;left:0%;height:2rem;width: 17rem;padding-right: 2rem;margin: auto;font-size: 1.8rem;}
   #m_h{display: none;}
   }  
   @media only screen and (min-device-width: 769px) and (max-device-width: 1024px) 
  {
    .login{display: none;}
    body{padding: 0%;margin: 0%;} 
    span{display: flex;width: 100%;}
    .navbar{display: flex;align-items: flex-start;justify-content:flex-start;background-color: black;color: white;font-size:1.4rem;padding:2rem auto;}
    .menu{display:none;flex-direction: column;justify-content: flex-start;align-items: flex-start;height:100%;position:fixed;background-color: black;left:0%;z-index:2;padding-top: 4rem;top:0%}
    .menu span{padding: 1.5rem 1rem;position:relative;display:flex;justify-content: flex-start;align-items: flex-start;left: 0%;}
    .products_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem;background-color: black;} 
   .Services_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem; background-color: black;}
   .about_us_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem;background-color: black;}
   .Profile_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-right: 11rem;background-color: black;}
   .search_product{display: flex;justify-content:flex-start;align-items:flex-start;position: relative;width:auto;background-color: black;margin:0 auto;top:0.5rem;}
   .right_side{display: flex;justify-content:flex-end;align-items:flex-end;background-color: black;width: 100%;top:0rem}
   .menu-bar i{display:flex;align-items: center;justify-content: center;position:absolute;left:0rem;cursor: pointer;color:white;}
   #m_h{display: none;}  
}
@media screen and (max-device-width:478px)
{
    .login{display: none;}
    body{padding: 0%;margin: 0%;} 
    .mb-3 span{display: flex;width: 100%;}
    .Products{display: flex;align-items: flex-start;justify-content:flex-start;position: relative;}
    .Products i{display: flex;justify-content: flex-end;align-items:end;position: relative;margin-top: 0.1rem;margin-left: 1rem;}
    .navbar{display: flex;align-items: flex-start;justify-content:flex-start;background-color: black;color: white;font-size:1.4rem;padding:2rem auto;position: relative;}
    .menu{display:none;flex-direction: column;height:100%;position:fixed;background-color: black;left:0%;z-index:2;padding-top: 4rem;top:0%}
    .menu span{padding: 1.5rem 1rem;position:relative;display:flex;justify-content: flex-start;align-items: flex-start;left: 0%;}
    .products_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem;background-color: black;} 
   .Services_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem; background-color: black;}
   .about_us_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-left: 12.5rem;background-color: black;}
   .Profile_ul{display: none;list-style-type: none;position: absolute; /* Make the list absolute to position it */margin-top:3% ;margin-right: 11rem;background-color: black;}
   .search_product{padding: 4px;display: flex;align-items: center;justify-content: center;display: none;}
   .right_side{display: flex;justify-content:flex-end;align-items:flex-end;background-color: black;width: 100%;top:0rem}
   .menu-bar i{display:flex;align-items: center;justify-content: center;position:absolute;left:0rem;cursor: pointer;color:white;}
    .right_side{display: flex;justify-content:flex-end;align-items:flex-end;background-color: black;width: 100%;top:1.3rem} 
    #m_h{display: none;}

}
</style>
<script>  
const products = document.querySelector(".Products");
const products_ul = document.querySelector(".products_ul");
const products_ul_i=document.querySelector(".fa-caret-down");
  products.addEventListener("click", function(event) {
    if(products_ul.style.display=="none"||products_ul.style.display=="")
    {
        products_ul.style.display = "block";
        products_ul_i.style.transform = 'rotate(180deg)'; 
    }
else
   { 
    products_ul.style.display="none"; 
    products_ul_i.style.transform = 'rotate(0deg)';
   }
});
document.addEventListener("click",function(){
    const products = document.querySelector(".Products");
   const products_ul = document.querySelector(".products_ul");
   const products_ul_i=document.querySelector(".fa-caret-down");
    if(products.contains(event.target)||products_ul.contains(event.target)||products_ul_i.contains(event.target))
    {
       
    }
    else
    {
        products_ul.style.display="none";  
        products_ul_i.style.transform = 'rotate(0deg)'
      
    } 

});
const profile = document.querySelector(".Profile");
    const profileUl = document.querySelector(".Profile_ul");
    const products_ul_i1=document.querySelector(".down1");
   profile.addEventListener("click", function(event) {
    if(profileUl.style.display=="none"||profileUl.style.display=="")
    {
        profileUl.style.display = "block"; 
        products_ul_i1.style.transform = 'rotate(180deg)'; 
    }
    else
    {
    profileUl.style.display="none";
    products_ul_i1.style.transform = 'rotate(0deg)'; 

    }
});
document.addEventListener("click",function(){
    const profile = document.querySelector(".Profile");
    const profileUl = document.querySelector(".Profile_ul");
    const products_ul_i1=document.querySelector(".down1");
    if(profile.contains(event.target)||profileUl.contains(event.target)||products_ul_i.contains(event.target))
    {

    }
    else{
        profileUl.style.display="none";
        console.log("hi");
        products_ul_i1.style.transform = 'rotate(0deg)'; 
      
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

document.addEventListener("click", function(event) {
    if (window.matchMedia(" (max-width: 1024px)").matches) {

    if(menu_bar.contains(event.target)||menu.contains(event.target))
    {

    }
    else
    {
    menu.style.display="none";
    }
}
});

let previouspage=window.pageYOffset;
window.onscroll=function(){
    let currentpage=window.pageYOffset;
    if(previouspage<currentpage )
    {
    menu.style.display="none";
    }
    previouspage=currentpage;
}
</script>
</html>