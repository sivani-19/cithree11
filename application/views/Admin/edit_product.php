<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Update</title>
</head>
<body>
<?php $id= $this->session->userdata('userid');?>
    <?php echo form_open('EA_C/Login_C/Admin_edit?id='.$id);?>
  <form action="<?php echo base_url('EA_C/Login_C/Admin_edit?id='.$id);?>" method="post">
  <?php foreach($data as $row):?>
<div class="centered-text">
  <div class="update_V">
    <h4 class="update">Update</h4>
    <div class="mb-3">
      <label for="FirstName" class="form-label">First Name</label><br>
      <input type="text" class="form-control" id="FormEmail1" placeholder="First Name" name="FirstName" value="<?php echo $row->FirstName;?>">
      <span class="error_message"><?php echo form_error('FirstName')?></span>
    </div>
    <div class="mb-3">
      <label for="LastName" class="form-label">Last Name</label><br>
      <input type="text" class="form-control" id="FormEmail1" placeholder="Last Name" name="lastName" value="<?php echo $row->LastName;?>">
      <span class="error_message"><?php echo form_error('lastName')?></span>
    </div>
    <div class="mb-3">
      <label for="Email" class="form-label">Email address</label><br>
      <input type="email" class="form-control" id="FormEmail1" placeholder="email@example.com" name="email" value="<?php echo $row->email;?>">
      <span class="error_message"><?php echo form_error('email')?></span>
    </div>
    <div class="mb-3">
    <label for="Email" class="form-label">Username</label><br>
    <input type="text" class="form-control" id="FormUsername" placeholder="Username" name="Username" value="<?php echo $row->Username;?>">
    <span class="error_message"><?php echo form_error('Username')?></span>
    </div>
    <div class="mb-3 P_S" >
      <label for="Password" class="form-label">Password</label><br>
      <input type="password" class="form-control" id="FormPassword1" placeholder="Password" name="password" value="<?php echo $row->Password;?>">
      <i class="fa-regular fa-eye-slash"></i>
      <i class="fa-solid fa-eye"></i><br>
      <span class="error_message"><?php echo form_error('password')?></span>
    </div>
    <div class="mb-3">
      <label for="Conform-Password" class="form-label">Conform-Password</label><br>
      <input type="password" class="form-control" id="FormPassword1" placeholder="Conform-Password" name="conform-password" value="<?php echo $row->Password;?>">
    <span class="error_message"><?php echo form_error('conform-password')?></span>
    </div>
    <button type="submit" class="btn btn-primary" name="update">update</button>
  <div class="dropdown-divider"></div>
</div>  
</div>  
</form>
<?php endforeach;?>
</body>
<style>
.update{position: relative;text-align: center;}
.centered-text {display: flex;justify-content: center;align-items:center ;}
.mb-3 label{position: absolute;left:0%;font-size: 1.3rem;}
.update_V div{position:relative;margin-top:1.2rem;}
.btn{position:relative;margin-top:2rem;color:white;background-color: black;border-radius: 5px;border:none;padding: 10px;font-size: 1rem;display: flex;justify-content: end;align-items: end;}
.update{font-size: 2rem;}
.P_S .fa-eye{display: none;}
.mb-3 input{padding:0.8rem 0.5rem;width:20vw;position: relative;margin-top:0.5rem;border-radius: 5px;}
.P_S i{position: absolute; right:10px;top:2.5rem;cursor: pointer;z-index: 2;}
.error_message{ position:absolute; text-align: left;   color:red;left:0%;top:70%;}
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

