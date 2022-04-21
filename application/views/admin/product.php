<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/admin_product.css">

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

        div.main_container div.content{
            margin: 0px;
            margin: 100px;
        }
            div.main_container div.content div.content_box{
                width: 1000px;
                height: 500px;
                border: 1px solid black;
                overflow-y: scroll;
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
            div.main_container div.content div.content_box .edit_remove_btn a{
                text-decoration: none;
                color: black;
                font-weight: bold;
            }
            div.main_container div.content div.content_box .edit_remove_btn a:hover{
                text-decoration: underline;
                width: 70px;
                padding: 2px;
                background-color: black;
                color: white;
                border-radius: 5px;
            }
            

        div.main_container div.content div.navigation{
            margin: 0px;
        }
            div.main_container div.content form{
                margin: 0px 0px 15px 0px;
                display: inline-block;
            }
                div.main_container div.content form input,select,option{
                    font-size: 15px;
                    padding: 5px;
                    font-weight: bold;
                    border-radius: 5px;
                }

            div.main_container div.content .add_product_btn{
                display: inline-block;
                vertical-align: top;
                border: 1px solid black;
                width: 150px;
                padding: 5px;
                font-size: 15px;
                background-color: black;
                color: white;
                text-align: center;
                font-weight: bold;
                text-decoration: none;
                border-radius: 5px;
                margin: 0px 0px 0px 600px;
            }
            div.main_container div.content .add_product_btn:hover{
                background-color: white;
                color: black;
                text-decoration: underline;
            }
    </style>
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1>Dashboard</h1>
            <h2><a href = "dashboard" >Orders </a></h2>
            <h2><a href = ""> Products </a></h2>
            <h3> <a href = "/logoff"> Log off </a></h3>
            <h4>Product</h4>
        </div>

        <div class = "content">
            <div class = "navigation">
                <form action="">
                    <input type="text" placeholder = "Search">
                </form>

                <a href = "/add" class = "add_product_btn"> Add new product </a>
            </div>

            <div class = "content_box">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Inventory count</th>
                        <th>Quantity Sold</th>
                        <th>Action</th>
                    </tr>
<?php       foreach($data as $row ){
?>
                    <tr>
                        <td> <?= $row['id']?> </td>
                        <td> <?= $row['name']?>  </td>
                        <td> <?= $row['inventory']?>  </td>
                        <td> <?= $row['sold']?> </td>
                        <td class = "edit_remove_btn"><a href = "edit_product/<?= $row['id']?> " >Edit </a> | <a href = "">  Delete </a> </td>
                    </tr>
<?php }
?>
                </table>
            </div>
        </div>

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>