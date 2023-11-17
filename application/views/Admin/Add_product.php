<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Product</title>
</head>
<body>
  <form action="<?php echo base_url('EA_C/Login_C/Add_products')?>" method="POST" enctype="multipart/form-data">
<div class="centered-text">
  <div class="Login_V">
    <h4 class="login">Add Product</h4>
    <div class="mb-3">
      <label for="Product Name" class="form-label">Product Name</label><br>
      <input type="text" class="form-control" id="ProductName" placeholder="Product Name" name="ProductName">
      <span class="error_message"><?php echo form_error('ProductName')?></span>
    </div>
    <div class="mb-3">
      <label for="Sellar Name" class="form-label">Sellar Name</label><br>
      <input type="text" class="form-control" id="SellarName" placeholder="Sellar Name" name="SellarName">
      <span class="error_message"><?php echo form_error('SellarName')?></span>
    </div>
    <div class="mb-3">
      <label for="Product Content" class="form-label">Product Content</label><br>
      <input type="text" class="form-control" id="ProductContent" placeholder="Product Content" name="ProductContent" style="width:100%;height:1rem;padding-bottom:5rem;margin-bottom:0rem;">
      <span class="error_message" style="margin-top:1rem;"><?php echo form_error('ProductContent')?></span>
    </div>
    <div class="mb-3">
      <label for="Product Content" class="form-label">Product Content</label>
      <input type="file" name="Image">
      <span class="error_message"><?php echo form_error('Image')?></span>
    </div>
    <div class="mb-3">
    <label for="tags" class="form-label">tags</label><br>
    <input type="text" class="form-control" id="tags" placeholder="tags" name="tags">
    <span class="error_message"><?php echo form_error('tags')?></span>
    </div>
    <div class="mb-3S">
      <label for="status" class="form-label">Status</label>
      <select>
        <option value="">draft</option>
        <option value="">posted</option>
      </select>
    </div> 
    <button type="submit" class="btn btn-primary" name="update">Add Product</button>
</div>  
</form>
</body>
<style>
body{position:relative;}
.centered-text {background-color: rgba(100, 200, 10, 0.2);  border-radius: 10px;padding: 1rem 5rem;
    position: absolute;top: 50%;left: 50%;transform: translate(-50%, 0%);text-align: center;}
label{position: absolute;left:0%;font-size: 1.3rem;}
.Login_V div{position:relative;margin-top:1.4rem;}
button{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;
    padding: 10px;font-size: 1rem;}
.login{font-size: 2rem;}
.fa-eye{display: none;}
input{padding:0.8rem 0.5rem;width:40vw;position: relative;margin-top:0.5rem;border-radius: 5px;border:none;}
textarea{padding:0.8rem 0.5rem;width:40vw;position: relative;margin-top:0.5rem;border-radius: 5px;border:none;min-height: 20vh;}
input:focus{outline: none;}
.dropdown-divider { position: relative;padding: 10px 0px;}
.mb-3 a{position: absolute;right: 0%;top:70%;}
select{position: absolute;left:8%;}
i{position: absolute; right:10px;top:55%;cursor: pointer;}
.dropdown-divider a{position:relative;padding: 10px 0px;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:80%;}
.login_failed{position:absolute;text-align: left;left:0%;color:red;}
@media screen and (min-width: 768px) and (max-width: 1023px) {
    body{position:relative;}
.centered-text {background-color: rgba(100, 200, 10, 0.2);  border-radius: 10px;padding: 1rem 1rem;position: absolute;}
label{position: absolute;left:0%;font-size: 1.3rem;}
.Login_V{position:relative;margin-top:1.3rem;}
button{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;padding: 10px;font-size: 1rem;}
.login{font-size: 2rem;}
.fa-eye{display: none;}
input{padding:0.8rem 0.5rem;width:90vw;position: relative;margin-top:0.5rem;border-radius: 5px;border:none;}
input:focus{outline: none;}
.mb-3S{
  display: flex;align-items: center;justify-content: center;
}
.dropdown-divider {position: relative;padding: 10px 0px;}
.mb-3 a{position: absolute;right: 0%;top:70%;}
i{position: absolute; right:10px;top:40%;cursor: pointer;}
.dropdown-divider a{position:relative;padding: 10px 0px;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:80%;}
.login_failed{position:absolute;text-align: left;left:0%;color:red;top:80%;}   
} 

@media screen and (max-width: 767px) {
body{position:relative;}
.centered-text {background-color: rgba(100, 200, 10, 0.2);  border-radius: 10px;padding: 1rem 1rem;position: absolute;}
label{position: absolute;left:0%;font-size: 1.3rem;}
.Login_V{position:relative;margin-top:1.3rem;}
button{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;padding: 10px;font-size: 1rem;}
.login{font-size: 2rem;}
.fa-eye{display: none;}
input{padding:0.8rem 0.5rem;width:80vw;position: relative;margin-top:0.5rem;border-radius: 5px;border:none;}
input:focus{outline: none;}
.dropdown-divider {position: relative;padding: 10px 0px;}
.mb-3 a{position: absolute;right: 0%;top:70%;}
i{position: absolute; right:10px;top:70%;cursor: pointer;}
.dropdown-divider a{position:relative;padding: 10px 0px;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:80%;}
.login_failed{position:absolute;text-align: left;left:0%;color:red;top:80%;}   
}
</style>
<script>
    const passwordi=document.getElementById('FormPassword1');
    var passwordv=document.querySelector('.fa-eye-slash');
    var passwordh=document.querySelector('.fa-eye');
    passwordv.addEventListener("click",function(){
        if(passwordi.type==='password')
        {
            passwordi.type='text';
            passwordh.style.display="block";
            passwordv.style.display="none";
        }
    });
        passwordh.addEventListener("click",function(){
        if(passwordi.type==='text')
        {
            passwordi.type='password';
            passwordv.style.display="block";
            passwordh.style.display="none";
        }
    });
</script>
</html>

