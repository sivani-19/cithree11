<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product_display</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<?php echo form_open('Orders');?>
    <form action="<?php echo base_url('Orders');?>" method="post">
    <div class="dashboard">
        <div class="sales">
            <table>
                <tr>
                    <th>id</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Amount</th>
                    <th>quantity</th>
                    <th>remove</th>
                </tr>
            <tr>        
        <?php foreach($data as $row):?>
            <div class="product_box">
            <div class="child_product product_name">
                <?php  $id=$row->id;?>
                </div>
                <td>  <div class="child_product product_id">
                <?php  echo $id=$row->id;?>
                </div></td>
              <td>  <div class="child_product Image">
                <img src="<?php echo base_url('uploads/' . $row->Image); ?>" style="">
                </div></td>
                <td><div class="child_product product_name ">
                <?php echo $row->productname;?>
                </div></td>
               <td><div class="child_product amount "><?php echo $row->Amount;?></div></td>
               <td> 
                <div class="child_product quantity">
                    <table class="qunatity_t">
                        <th class="quantity_dec">-</th>
                        <th class="total_quantity" name="total_quantity"><?php echo $row->quantity;?></th>
                        <input type="hidden" name="total_quantity" value="">
                        <th class="qunatity_inc">+</th></table></div></td>
                        <th> <div class="child_product remove "><a href="<?php echo base_url('E_C/Login_C/remove_from_cart?id='. $id);?>">remove</a></div></th>
                </tr>
            <?php endforeach;?>  
        </div>
        </div>   
        </form>
    </div>
 
</body>
<style> 
     table {width: fit-content;border-collapse: collapse;}
    .dashboard table, th, td {border: 1px solid black;}
   .dashboard{display: flex;justify-content: center;padding: 2rem;}
   .sales div{padding: 0rem 2rem;}
   .remove a{color: blue;}
   .qunatity_t th{border-radius: 10px;padding: 10px;font-size: 1rem;cursor: pointer; }
  .qunatity_t a{color: black;} 
  .Image img{width:9rem;height:8rem;object-fit:contain;}
   .Buy_Now{display: flex;justify-content: end;align-items: end;}
  @media screen and (max-width: 767px) {
    table {width: 50%;border-collapse: collapse;text-align: center;}
    .dashboard table, th, td {border: 1px solid black;}
   .dashboard{display: flex;justify-content: center;padding: 1rem;}
   .sales div{padding: 0rem 0rem;}
   .remove a{color: black;}
   .qunatity_t th{border-radius: 3px;padding:auto;font-size: 1rem;cursor: pointer;margin: auto;}
  .qunatity_t a{color: black;} 
  .Image img{width:5rem;height:3rem;object-fit:contain;}
  }
 
</style>
  
</html>