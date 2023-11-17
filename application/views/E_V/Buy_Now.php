<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product_display</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<?php echo form_open('Buy_Now');?>
    <form action="<?php echo base_url('Buy_Now');?>" method="post">
    <div class="dashboard">
        <div class="sales">
            <table>
                <tr>
                    
                    <th>Product</th>
                    <th>Product details</th>
                    <th>Amount</th>
                   
                </tr>
            <tr> 
            <?php $total_amount = 0;?>               
        <?php foreach($data as $row):?>
            <div class="product_box">
            <div class="child_product product_name">
                <?php  $id=$row->id;?>
                </div>
               
              <td>  <div class="child_product Image">
                <img src="<?php echo base_url('uploads/' . $row->Image); ?>" style="">
                <?php echo $row->ProductName;?>
                </div></td>
                <td><?php echo $row->ProductContent;?></td>
               <td><div class="child_product amount "><?php echo $row->Amount;$total_amount+=$row->Amount;?></div></td>
               
                </tr>
            <?php endforeach;?>  
            <table class="Total">
            <span class="total_amount">Total Amount:<?php echo $total_amount;?></span>
            <span class="total_amount_Buy"><button class="Buy_all"><a href="E_C/Login_C/buy_all">Buy Now </a></button>
            </table>  
        </div>
        </div>   
        </form>
    </div>
 
</body>
<style> 
     table {width: fit-content;border-collapse: collapse;text-align: center;}
    .dashboard table, th, td {border: 1px solid black;}
   .dashboard{display: flex;justify-content: center;padding: 2rem;}
   .sales div{padding: 0rem 2rem;}
   .remove a{color: blue;}
   .qunatity_t th{border-radius: 10px;padding: 10px;font-size: 1rem;cursor: pointer; }
  .qunatity_t a{color: black;} 
  .Image img{width:9rem;height:8rem;object-fit:contain;}
   .Buy_Now{display: flex;justify-content: end;align-items: end;}
   .Buy_all{color:white;background-color: black;padding: 10px;border:none;font-size: 1.3rem;}
  .total_amount{font-size: 1.7rem;display: flex;justify-content: end;margin-top: 1%;position: relative;}
  .total_amount_Buy{display: flex;justify-content: end;}
  @media screen and (max-width: 767px) {
    table {width: 100%;border-collapse: collapse;text-align: center;}
    .dashboard table, th, td {border: 1px solid black;padding: 0.4rem;}
   .dashboard{display: flex;justify-content: center;padding: 1rem;}
   .sales div{padding: 0rem 0rem;}
   .remove a{color: black;}
   .qunatity_t th{border-radius: 3px;padding:auto;font-size: 1rem;cursor: pointer;margin: auto;}
  .qunatity_t a{color: black;} 
  .Image img{width:5rem;height:3rem;object-fit:contain;}
  }
 
</style>
   <script> 
    setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 1000); // 2000 milliseconds (2 seconds)
var quantity_dec_buttons = document.querySelectorAll('.quantity_dec');
var quantity_inc_buttons = document.querySelectorAll('.qunatity_inc');
var total_quantity_elements = document.querySelectorAll('.total_quantity');

// Add event listeners to decrease quantity
for (var i = 0; i < quantity_dec_buttons.length; i++) {
    quantity_dec_buttons[i].addEventListener("click", function () {
        var index = Array.from(quantity_dec_buttons).indexOf(this);
        decreaseQuantity(total_quantity_elements[index]);
    });
}

// Add event listeners to increase quantity
for (var i = 0; i < quantity_inc_buttons.length; i++) {
    quantity_inc_buttons[i].addEventListener("click", function () {
        var index = Array.from(quantity_inc_buttons).indexOf(this);
        increaseQuantity(total_quantity_elements[index]);
    });
}

function decreaseQuantity(element) {
    var currentQuantity = parseInt(element.textContent, 10);
    if (currentQuantity > 1) {
        element.textContent = currentQuantity - 1;
    }
}

function increaseQuantity(element) {
    var currentQuantity = parseInt(element.textContent, 10);
    element.textContent = currentQuantity + 1;
}


</script>
</html>