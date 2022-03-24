<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/admin_dashboard.css">
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1>Dashboard</h1>
            <h2><a href = "<?= base_url('/dashboard')?>" >Orders </a></h2>
            <h2><a href = "<?= base_url("/show_product") ?>"> Products </a></h2>
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
                        <td><a href = "<?= base_url('/show_details') ?>"> 1 </a> </td>
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