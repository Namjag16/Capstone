<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/admin_product.css">
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1>Dashboard</h1>
            <h2><a href = "<?= base_url('/dashboard')?>" >Orders </a></h2>
            <h2><a href = "<?= base_url("/show_product") ?>"> Products </a></h2>
            <h3> <a href = "<?= base_url('/logoff')?>"> Log off </a></h3>
            <h4>Product</h4>
        </div>

        <div class = "content">
            <div class = "navigation">
                <form action="">
                    <input type="text" placeholder = "Search">
                </form>

                <a href = "" class = "add_product_btn"> Add new product </a>
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
                    <tr>
                        <td>1</td>
                        <td>bdsads</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td class = "edit_remove_btn"><a href = "<?= base_url('/edit')?>" >Edit </a> | <a href = "">  Delete </a> </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>bdsads</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td class = "edit_remove_btn"><a href = "" >Edit </a> | <a href = "">  Delete </a> </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>bdsads</td>
                        <td>dsadsa</td>
                        <td>dsadsa</td>
                        <td class = "edit_remove_btn"><a href = "" >Edit </a> | <a href = "">  Delete </a> </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>