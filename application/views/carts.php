<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Carts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/carts.css">
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1 id = "name_store"><a href = " <?= base_url("/product") ?>"> Store </a></h1>
            <a href = ""> Shopping Cart (5) </a>
            <h4>Carts</h4>

        </div>

        <div class = "content">
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <Th>Quantity</Th>
                    <th>total</th>
                </tr>

                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>

            </table>

            <p id = "total_cost"> Total : $21 </p>

            <form action = "" class = "continue_ship" >
                <input type = "submit" value = "continue shipping">
            </form>

        </div> 

        <div class = "shipping_info">
   
            <div class = "ship_1">
                <h2>Shipping information</h2>
                <form action = "" class = "Ship_info"> 
                    <div>
                        <input type = "text" name = "first_name" placeholder = "First Name " >
                        <input type = "text" name = "last_name" placeholder = "last name ">
                        <input type = "text" name = "address" placeholder = "Address">
                        <input type = "text" name = "address2" placeholder = "Address 2">
                        <input type = "text" name = "city" placeholder = "City">
                        <input type = "text" name = "state" placeholder = "State">
                        <input type = "text" name = "zip_code" placeholder = "Zip code">
                    </div>


                <h2>Billing information</h2>
                    <!-- <input type="hidden" name = "action" value = "register"> -->
                    <input type = "checkbox" name = "same_as" class = "bill_checkbox">
                    <label for = "same_as" class = "ship_2_label">Same as shipping info </label>
                    <div>
                        <input type = "text" name = "bill_first_name" placeholder = "First Name " >
                        <input type = "text" name = "bill_last_name" placeholder = "last name ">
                        <input type = "text" name = "bill_address" placeholder = "Address">
                        <input type = "text" name = "bill_address2" placeholder = "Address 2">
                        <input type = "text" name = "bill_city" placeholder = "City">
                        <input type = "text" name = "bill_state" placeholder = "State">
                        <input type = "text" name = "bill_zip_code" placeholder = "Zip code">
                    </div>

                </form>
            </div>

        </div>

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>