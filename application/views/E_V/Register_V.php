<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>
<body>
  <form action="<?php echo base_url('register')?>" method="post">
<div class="centered-text">
  <div class="Login_V">
    <h4 class="login">Register</h4>
    <div class="mb-3">
      <label for="FirstName" class="form-label">First Name</label><br>
      <input type="text" class="form-control" id="FormEmail1" placeholder="First Name" name="FirstName">
      <span class="error_message"><?php echo form_error('FirstName')?></span>
    </div>
    <div class="mb-3">
      <label for="LastName" class="form-label">Last Name</label><br>
      <input type="text" class="form-control" id="FormEmail1" placeholder="Last Name" name="lastName">
      <span class="error_message"><?php echo form_error('lastName')?></span>
    </div>
    <div class="mb-3">
      <label for="Email" class="form-label">Email address</label><br>
      <input type="email" class="form-control" id="FormEmail1" placeholder="email@example.com" name="email">
      <span class="error_message"><?php echo form_error('email')?></span>
    </div>
    <div class="mb-3">
    <label for="Email" class="form-label">Username</label><br>
    <input type="text" class="form-control" id="FormUsername" placeholder="Username" name="Username">
    <span class="error_message"><?php echo form_error('Username')?></span>
    </div>
    <div class="mb-3">
      <label for="Password" class="form-label">Password</label><br>
      <input type="password" class="form-control" id="FormPassword1" placeholder="Password" name="password">
      <i class="fa-regular fa-eye-slash"></i>
      <i class="fa-solid fa-eye"></i><br>
      <span class="error_message"><?php echo form_error('password')?></span>
    </div>
    <div class="mb-3">
      <label for="Conform-Password" class="form-label">Conform-Password</label><br>
      <input type="password" class="form-control" id="FormPassword1" placeholder="Conform-Password" name="conform-password">
    <span class="error_message"><?php echo form_error('conform-password')?></span>
    </div>
    <button type="submit" class="btn btn-primary" name="update">Sign Up</button>
  <div class="dropdown-divider">
  <a class="dropdown-item" href="<?php echo base_url('login');?>">Already have an account?Login</a><br>
</div>  
</div> 
</div> 
</form>
</body>
<style>
body{position:relative;display: flex;justify-content: center;align-items: center;height: 100vh;margin:4rem;}
.centered-text {background-color: rgba(100, 200, 10, 0.2);  text-align: center;padding: 1rem 3rem;
   }
   .login{font-size: 3rem;}
label{position: absolute;left:0%;font-size: 1.3rem;}
.Login_V div{position:relative;margin-top:1.4rem;}
button{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;
    padding: 10px;font-size: 1rem;}
.login{font-size: 2rem;}
.fa-eye{display: none;}
input{padding:0.8rem 0.5rem;width:20vw;position: relative;margin-top:0.5rem;border-radius: 5px;border:none;}
input:focus{outline: none;}
.dropdown-divider { position: relative;padding: 10px 0px;}
.mb-3 a{position: absolute;right: 0%;top:70%;}
i{position: absolute; right:10px;top:55%;cursor: pointer;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:80%;}
.login_failed{position:absolute;text-align: left;left:0%;color:red;}
.dropdown-item{padding-bottom: 2rem;}
@media screen and (max-width:768px)
{
  body{display: flex;justify-content: center;align-items: center;height: 100vh;margin:4rem;}
.centered-text {background-color: rgba(100, 200, 10, 0.2);text-align: center;padding: 0rem 1rem;}
label{position: absolute;left:0%;font-size: 1.3rem;}
.Login_V div{position:relative;margin-top:1.4rem;}
h4{padding-top: 1rem;}
button{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;
    padding: 10px;font-size: 1rem;}
.login{font-size: 2rem;}
.fa-eye{display: none;}
input{padding:0.8rem 0.5rem;width:80vw;position: relative;margin-top:0.5rem;border-radius: 5px;border:none;font-size: 1.3rem;}
input:focus{outline: none;}
.dropdown-divider { position: relative;padding: 10px 0px;}
.mb-3 a{position: absolute;right: 0%;top:70%;}
i{position: absolute; right:10px;top:55%;cursor: pointer;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:80%;}
.login_failed{position:absolute;text-align: left;left:0%;color:red;}
.dropdown-item{padding-bottom: 2rem;}
}
@media only screen and (max-device-width: 1024px) and (min-device-width:768px) {
body{display: flex;justify-content: center;align-items: center;height: 100vh;margin:0rem;}
.centered-text {background-color: rgba(100, 200, 10, 0.2);text-align: center;padding: 1rem 3rem;}
label{position: absolute;left:0%;font-size: 1.8rem;}

.Login_V div{position:relative;margin-top:2.4rem;}
button{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;padding: 10px;font-size: 1rem;}
.login{font-size: 2rem;}
.fa-eye{display: none;}
input{padding:0.8rem 0.5rem;width:70vw;position: relative;margin-top:1.2rem;border-radius: 5px;border:none;font-size: 1.8rem;}
input:focus{outline: none;}
.dropdown-divider { position: relative;padding: 10px 0px;}
.mb-3 a{position: absolute;right: 0%;top:70%;}
i{position: absolute; right:10px;top:55%;cursor: pointer;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:80%;font-size: 1.6rem;}
.login_failed{position:absolute;text-align: left;left:0%;color:red;}
.dropdown-item{padding-bottom: 2rem;}
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

