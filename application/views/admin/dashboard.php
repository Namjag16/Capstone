<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/admin_dashboard.css">

    <style>
        *{
            margin: 0px;
            overflow: hidden;
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

        div.main_container div.content{
            margin: 0px;
            margin: 100px;
        }
            div.main_container div.content div.content_box{
                width: 1000px;
                height: 500px;
                border: 1px solid black;
            }
            div.main_container div.content div.content_box table{
                width: 1000px;
                border-collapse: collapse;
                padding: 20px;
            }
            div.main_container div.content div.content_box tr,th,td{
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }

            div.main_container div.content form{
                margin: 0px 0px 15px 0px;
            }
                div.main_container div.content form input,select,option{
                    font-size: 15px;
                    padding: 5px;
                    font-weight: bold;
                    border-radius: 5px;
                }
    </style>

</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1>Dashboard</h1>
            <h2><a href = "/dashboard" >Orders </a></h2>
            <h2><a href = "/show_product"> Products </a></h2>
            <h3> <a href = "<?= base_url('/logoff')?>"> Log off </a></h3>
            <h4>Order</h4>
        </div>

        <div class = "content">
            <form action="">
                <input type = "text" placeholder = "Search">
                <select id="Status" name="status">
                    <option value = "show all">Show All</option>
                    <option value = "order in process"> Order in Process</option>
                    <option value = "shipped">Shipped</option>
                    <option value = "cancelled">Cancelled</option>
                </select>
            </form>

            <div class = "content_box">
                <table>
                    <tr>
                        <th>Order Id </th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Billing address</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td><a href = "/show_details"> 1 </a> </td>
                        <td>bdsads</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>bdsads</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>bdsads</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>