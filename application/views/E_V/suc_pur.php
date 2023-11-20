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
@media only screen and (max-device-width:478px)
{
    .success span {
                flex-direction: column; /* Change to column direction */
               font-size: 1.6rem;
            }

            .back {
                margin-top: 1rem; /* Add some margin for spacing */
                width: 50%;margin: auto;font-size: 1.6rem;margin-top: 1rem;
            }
}
@media only screen and (min-device-width:478px) and (max-device-width:768px)
{
    .success span {
                flex-direction: column; /* Change to column direction */
               font-size: 1.6rem;
            }

            .back {
                margin-top: 1rem; /* Add some margin for spacing */
                width: 50%;margin: auto;font-size: 1.6rem;margin-top: 1rem;
            }
}
@media only screen and (min-device-width:768px) and (max-device-width:1024px)
{
    .success span {
                flex-direction: column; /* Change to column direction */
               font-size: 2rem;
            }

            .back {
                margin-top: 1rem; /* Add some margin for spacing */
                width: 30%;margin: auto;font-size: 2.4rem;margin-top: 1rem;
            }
}
</style>