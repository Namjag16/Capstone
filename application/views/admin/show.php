<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Show Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/show_details.css">
</head>
  
<body>
    <div class = "main_container">
        <div class = "header">
            <h1>Dashboard</h1>
            <h2><a href = "" >Orders </a></h2>
            <h2><a href = "<?= base_url("/show_product") ?>"> Products </a></h2>
            <h3> <a href = "<?= base_url('/logoff')?>"> Log off </a></h3>
            <h4>show details</h4>
        </div>

        <div class = "content">
            <div class = "ship_info">
                <h1>Order Id: #</h1>

                <div class = "customer_shipping_info">
                    <h2>Customer Shipping info:</h2>
                    <p>Name: </p>
                    <p>Address: </p>
                    <p>City: </p>
                    <p>State: </p>
                    <p>Zip: </p>
                </div>

                <div class = "customer_billing_info">
                    <h2>Customer billing info:</h2>
                    <p>Name: </p>
                    <p>Address: </p>
                    <p>City: </p>
                    <p>State: </p>
                    <p>Zip: </p>
                </div>

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
                        <tr>
                            <td>1</td>
                            <td>Bag</td>
                            <td>23</td>
                            <td>3</td>
                            <td>69</td>
                        </tr>
                    </table>
                </div>

                <div class = "sub_total">
                    <p>Sub-Total: </p>
                    <p>Shipping: </p>
                    <p>Total Price: </p>
                </div>

            </div>

        </div>

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>