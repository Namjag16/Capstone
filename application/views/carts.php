<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Carts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/carts.css">

    <style>
        *{
            margin: 0px;
            overflow: hidden;
        }
        #total_cost{
            margin: 10px 0px 0px 945px;
        }
        .continue_ship{
            height: 20px;
            margin: 10px 0px 0px 915px;;
        }
        div.main_container{
            margin: 0px;
        }
            div.main_container div.header{
            margin: 0px;
            padding: 10px;
            width: 100%;
            height: 40px;
            border: 1px solid black;
            background-color: black;
            color: white;
            }
            div.main_container div.header h1{
            display: inline-block;
            }
            div.main_container div.header #name_store{
                margin: 0px 1000px 0px 0px;
            }
            div.main_container div.header p{
            display: inline-block;
            vertical-align: top;
            margin: 8px 0px 0px 850px;
            font-weight: bold;
            }
            div.main_container div.header a{
            display: inline-block;
            vertical-align: top;
            margin: 0px 0px 0px 10px;
            text-decoration: none;
            cursor: pointer;
            color: white;
            }
            div.main_container div.header h4{
                margin: 0px 0px 0px 10px;
            }  

        div.main_container div.content{
            padding: 20px;
            margin: 0px;
        }
            div.main_container div.content table{
                width: 800px;
                border-collapse: collapse;
                margin: 20px 0px 0px 200px;
            }
            div.main_container div.content th{
                border: 1px solid black;
                padding: 10px;
            }

            div.main_container div.content td{
                border: 1px solid black;
                padding: 5px;
            }

        div.main_container div.shipping_info{
            margin: 0px;
            padding: 50px;
        }
            div.main_container div.shipping_info div.ship_1{
                border: 1px solid black;
                width: 500px;
                min-height: 300px;
                padding: 10px;
                display: inline-block;
                vertical-align: top;
                margin: 0px 0px 0px 300px;
            }
                div.main_container div.shipping_info div.ship_1 form{
                    margin: 20px 0px 0px 0px;
                }
                div.main_container div.shipping_info div.ship_1 input{
                    width: 200px;
                    height: 30px;
                    margin: 5px;
                    font-size:13px ;
                    font-weight: bold;
                    /* display: inline-block; */
                }
                div.main_container div.shipping_info div.ship_1 h2{
                    display: inline-block;
                }
                div.main_container div.shipping_info div.ship_1 .bill_checkbox{
                    display: inline-block;
                    vertical-align: top;
                    width: 15px;
                }

    </style>
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1 id = "name_store"><a href = "/product"> Store </a></h1>
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