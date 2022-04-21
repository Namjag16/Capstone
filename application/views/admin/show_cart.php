<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Show Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/show_details.css">

    <style>
         *{
            margin: 0px;
            /* outline: solid red 1px; */
        }

        div.order_box{
            display: flexbox;
            bottom: 100px;
            left: 100px;
            display: inline-block;
            vertical-align:text-top;
            border:1px solid black;
            margin: 0px 0px 0px 300px ;
        }
        div.order_box div.order table{
            width: 100%;

        }

    </style>
</head>
  
<body>
    <div class = "order_box">
        <div class = "order">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
<?php       foreach($info AS $row){
?>                     
                <tr>
                    <td> <?= $row['id']?> </td>
                    <td> <?= $row['items']?> </td>
                    <td> <?= $row['price']?> </td>
                    <td> <?= $row['quantity']?> </td>
                    <td> <?= $row['Total']?> </td>
                </tr>
<?php } 
?>
            </table>
        </div>

        <div class = "sub_total">
            <p>Sub-Total: </p>
            <p>Shipping: </p>
            <p>Total Price: </p>
        </div>
    </div>
</body>
  
</html>