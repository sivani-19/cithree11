<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
<div class="centered-text">
    <div class="Login_V">
       <?php echo form_open('E_C/Login_C/viewcart');?>
  <form  action="<?php echo base_url('E_C/Login_C/viewcart');?>" method="post">
  <div class="emptycart">Your cart is empty.</div>
  </form>
</div>
</body>
<style>
.emptycart
{
    display: flex;
    justify-content: center;
    align-items: center;
    height:80vh;
}


</style>