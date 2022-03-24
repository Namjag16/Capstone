<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Clickable Prototype</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="style.css">
    
    <style>

    </style>

</head>
  
<body>

    <div class = "main_container">
        <p>* <a href = "<?= base_url("/login") ?>">User Log in(100% completed with register)</a> </p>
        <p> 1.<a href = "<?= base_url("/product")?>" > Product Page (80% completed) </a></p>
        <p> 2.<a href = "<?= base_url("/show")?>">Item Page (70% completed) </a> </p>
        <p> 3.<a href = "<?= base_url("/cart") ?>">Cart Page (80% completed) </a> </p>
        <p> 4.<a href = "<?= base_url("/cart") ?>"> Checkout Page (100% completed) </a> </p>
        <p> 5.<a href = "<?= base_url("/admin") ?>">Admin Login page (100% completed)</a> </p>
        <p> 6.<a href = "<?= base_url("/dashboard") ?>">Admin Dashboard (100% completed)</a> </p>
        <p> 7.<a href = " <?= base_url('/show_details') ?>">Admin Order Detail (80% completed)</a> </p>
     
    </div>

</body>
  
</html>