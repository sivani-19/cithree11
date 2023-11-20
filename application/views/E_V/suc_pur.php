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
       <?php echo form_open('E_C/Login_C/product_display');?>
  <form  action="<?php echo base_url('E_C/Login_C/product_display');?>" method="post">
  <div class="success">
    <span class="success1">You  are successfully purchased<br>
       <span> <button class="back"><a href="<?php echo base_url('E_C/Login_C/product_dashboard');?>">Back</a></button><span>
    </span>
</div>
  </form>
</div>
</body>
<style>
.success{position:relative;display: flex;text-align: center;justify-content: center;   align-items: center;
    height: 80vh; /* Adjust the height as needed */}
.back{background-color: black;color: white;padding: 0.7rem;border: none;margin-top: 0.4rem;}
</style>