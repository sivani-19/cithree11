<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <div class="sales">
          <span class="sales_span">Sales</span>
          <span class="sales_span_i"><i class="fa-solid fa-truck-fast"></i></span>
        </div>
        <div class="visitors">
        <span class="visitors_span">Visitors</span>
        <span class="visitors_span_i"><i class="fa-solid fa-users"></i></span>
        </div>
        <div class="profit">
        <span class="profit_span">profit</span>
        <span class="profit_span_i"><i class="fa-solid fa-arrow-up-right-dots"></i></span>
        </div>
        <div class="order">
         <span class="order_span">order</span>
         <span class="order_span_i"><i class="fa-solid fa-bag-shopping"></i></span>
        </div>
    </div>
   
</body>
<style>
    .dashboard{ text-align: center;position: relative;display: flex;margin-left: 18%;}
    .dashboard div{background-color: black;color: aliceblue;margin:20px;display: grid;height:10rem;width:50rem;border-radius: 20px;font-size: 2rem;}
     .sales_span{display: flex;justify-content: start;align-items: start;left:12%;top:22%;position: relative;}
     .sales_span_i{display: flex;justify-content: end;align-items: start;right:12%;top:-2%;position: relative; }
     .sales_span_i i{background-color: cadetblue;padding: 20px;border-radius: 50%;}
     .sales_span::after{content:"";display: block;border-bottom: 1px solid white;width: 50%;margin-top: 15%;margin-left: -25%;}

     .visitors_span{display:flex;justify-content: start;align-items: start;left:12%;top:22%;position: relative;}
    .visitors_span_i{display: flex;justify-content: end;align-items: start;right:12%;top:-2%;position: relative;}
    .visitors_span::after{content:"";display: block;border-bottom: 1px solid white;width: 50%;margin-top: 15%;margin-left: -35%;}
    .visitors_span_i i{background-color: cadetblue;padding: 20px;border-radius: 50%;}

     .profit_span{display: flex;justify-content: start;align-items:start;left:12%;top:22%;position: relative;}
     .profit_span_i{display: flex;justify-content: end;align-items: start;right:12%;top:-2%;position: relative;}
     .profit_span::after{content:"";display: block;border-bottom: 1px solid white;width: 50%;margin-top: 15%;margin-left: -25%;}
     .profit_span_i i{background-color: cadetblue;padding: 20px;border-radius: 50%;}

     .order_span{display: flex;justify-content: start;align-items: start;left:12%;top:22%;position: relative;}
     .order_span_i{display: flex;justify-content: end;align-items: start;right:12%;top:-2%;position: relative;}
     .order_span::after{content:"";display: block;border-bottom: 1px solid white;width: 50%;margin-top: 15%;margin-left: -25%;}
     .order_span_i i{background-color: cadetblue;padding: 20px;border-radius: 50%;}
     .chart_div{margin-left: 18%;}
</style>
</html>