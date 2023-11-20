<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product_display</title>
</head>
<body>
    <?php if($this->session->flashdata('alert')):?>
        <div class="flash-message" id="flash-message"><?php echo $this->session->flashdata('alert');?></div>
<?php endif;?>
<?php echo form_open('product_dashboard');?>
    <form action="<?php echo base_url('product_dashboard');?>" method="post">
    <div class="dashboard">
        <div class="sales">
            <table>
        <?php foreach($data as $row):?>
            <div class="product_box">
                <div class="child_product">
                <img src="<?php echo base_url('./uploads/' . $row->Image); ?>" style="width:9rem;height:8rem;object-fit:contain;">
                </div>
                <div class="child_product product_name ">
                <?php echo $row->ProductName;?>
                </div>
                <div class="child_product amount ">
                <?php echo $row->Amount;?>
                </div>
                <div class="child_product id ">
                <?php $id= $row->id;?>
                </div>
                <div class="cart_value" name="add_cart"><div class="child_product "><button type="submit" name="add_cart">
                    <a href="<?php  echo base_url('product_dashboard?id='.$id)?>">Add Cart</button></a>
                </div></div>
                <div class="child_product Buy_Now" name="Buy_now">
                <button type="submit" name="Buy_Now"><a href="<?php  echo base_url('Buy_Now?id='.$id)?>"> Buy Now</a></button>
            </div>
            </div>
            <?php endforeach;?>
            <table>
            </div>
        </div>
        </form>
    </div>
</body>
<style> 
    .sales{
        display: flex;
        flex-wrap: wrap;/* any extra things are out of the screen then it send to next row */
        justify-content: center;
        align-items: center;
    }
    .product_box{
        border:1px solid black;
        margin: 1rem;
        padding: 1rem;
    }
    .product_name{
        font-size: 1.3rem;
    }  
    .amount{
        color:blue ;
        font-size: 1.2rem;
    }
    .cart_value,.Buy_Now
    {
        position:relative;
        text-align: center;
       
    }
    .cart_value button,.Buy_Now button{
     padding:0.5rem 3rem;
     margin-top:0.4rem;
    text-align: center;
    color:white;
        background-color: black;
    
    }
</style>
   <script>
     setTimeout(function() {
            document.getElementById('flash-message').style.display = "none";
        }, 1000); // 2000 milliseconds (2 seconds)

    </script>
</html>