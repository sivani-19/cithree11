<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product_display</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<?php echo form_open('sellar');?>
    <form action="<?php echo base_url('sellar');?>" method="post">
    <span class="Sellar">
        <span class="content">Become a sellar,Contact below details.<br>
       <span><button class="number">9876543210</button></span>
       </span>
    </span>
        </form>
    </div>
 
</body>
<style> 
   .Sellar{position:relative;display: flex;text-align: center;justify-content: center;   align-items: center;
    height: 80vh; /* Adjust the height as needed */}
.number{background-color: black;color: white;padding: 0.7rem;border: none;margin-top: 0.4rem;}
@media screen and (max-width:478px)
{
    .Sellar span {
                flex-direction: column; /* Change to column direction */
               font-size: 1.3rem;
            }

            .number {
                margin-top: 1rem; /* Add some margin for spacing */
                width: 50%;margin: auto;font-size: 1.2rem;margin-top: 1rem;
            }
} 
 @media only screen and (min-device-width:478px) and (max-device-width:768px)
{
    .Sellar span {
                flex-direction: column; /* Change to column direction */
               font-size: 1.6rem;
            }

            .number {
                margin-top: 1rem; /* Add some margin for spacing */
                width: 50%;margin: auto;font-size: 1.6rem;margin-top: 1rem;
            }
}
@media only screen and (min-device-width:768px) and (max-device-width:1024px)
{
    .Sellar span {
                flex-direction: column; /* Change to column direction */
               font-size: 2rem;
            }

            .number {
                margin-top: 1rem; /* Add some margin for spacing */
                width: 30%;margin: auto;font-size: 2.4rem;margin-top: 1rem;
            }
}
</style>
  
</html>