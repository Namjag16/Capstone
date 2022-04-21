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
            overflow: hidden;
            /* outline: solid red 1px; */
        }
        div.main_container div.header {
            background-color: black;
            width: 100vmax;
            height: 30px;
            padding: 20px;
            color: white;
        }
            div.main_container div.header h1{
                display: inline-block;
                margin: 0px 50px 0px 0px;
            }
            div.main_container div.header h2{
                margin: 0px 20px 0px 0px;
                display: inline-block;
            }

            div.main_container div.header h3{
                margin: 0px 0px 0px 750px;
                display: inline-block;
            }
            div.main_container div.header a{
                color: white;
                text-decoration: none;
            }
            div.main_container div.header a:hover {
                color: white;
                text-decoration:underline;
            }

        div.main_container div.content {
            margin: 0px;
        }
            div.main_container div.content div.ship_info {
                padding: 20px;
                width: 300px;
                min-height: 500px;
                border: 1px solid black;
                margin: 10px;
                display: inline-block;
            }
                div.main_container div.content div.ship_info div.customer_shipping_info {
                    margin: 10px;
                    padding: 5px;
                }
                div.main_container div.content div.ship_info div.customer_billing_info {
                    margin: 10px;
                    padding: 5px;
                }
                div.main_container div.content div.ship_info p {
                    font-size: 15px;
                }
                
/* 
            div.main_container div.content div.order_box{
                padding: 20px;
                width: 700px;
                min-height: 100px;
                border: 1px solid black;
                margin: 10px 0px 0px 50px;
                display: inline-block;
                vertical-align: top;

            }
            div.main_container div.content div.order{
                width: 700px;
                height: 520px    ;
                border: 1px solid black;
                overflow: auto;
            }
                div.main_container div.content div.order table,tr{
                    width: 700px;
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                div.main_container div.content div.order th,td{
                    border: 1px solid black;
                    text-align: center;
                    padding: 5px;
                    font-size: 15px;
                }
                
            div.main_container div.content div.order_box div.sub_total{
                margin: 10px 0px 0px 600px;
                border: 1px solid black;
                padding: 5px;
            } */

    </style>
</head>
  
<body>
    <div class = "main_container">
        <div class = "header">
            <h1>Dashboard</h1>
            <h2><a href = "/dashboard" >Orders </a></h2>
            <h2><a href = "/show_product"> Products </a></h2>
            <h3> <a href = "/logoff"> Log off </a></h3>
            <h4>show details</h4>
        </div>

        <div class = "content">
            <div class = "ship_info">
<?php       foreach($data AS $row){
?>
                <h1>Order Id: <?= $row['id'] ?></h1>

                <div class = "customer_shipping_info">
                    <h2>Customer Shipping info:</h2>
                    <p>Name: <?= $row['first_name'] ?> <?= $row['last_name'] ?></p>
                    <p>Address: <?= $row['address'] ?> </p>
                    <p>City: <?= $row['City'] ?> </p>
                    <p>State: <?= $row['State'] ?> </p>
                    <p>Zip: <?= $row['zip'] ?> </p>
                </div>

                <div class = "customer_billing_info">
                    <h2>Customer billing info:</h2>
                    <p>Name:  <?= $row['billing_first_name'] ?> <?= $row['billing_last_name'] ?></p>
                    <p>Address: <?= $row['billing_address'] ?></p>
                    <p>City: <?= $row['billing_city'] ?> </p>
                    <p>State: <?= $row['billing_state'] ?></p>
                    <p>Zip: <?= $row['billing_zip'] ?></p>
                </div>

<?php } 
?>
            </div>
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
        </div>
    </div>

</body>
  
</html>