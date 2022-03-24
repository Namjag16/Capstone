<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/product.css">
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1>NAME OF STORE</h1>
            <p> Name </p>
            <a href = " <?= base_url("/cart") ?> "> Shopping Cart (5) </a>
        </div>

        <div class = "content">

            <div class = "left_nav">
                <form action = "" method = "POST">
                    <input type = "text" name = "product_name" placeholder = "Product Name">
                    <input type = "submit" value = "Ok" class = "search_btn">
                </form>

                <section>
                    <h2>Categories</h2>
                    <ul>
                        <li>T-shirts()</li>
                        <li>Shoes()</li>
                        <li>Cup()</li>
                        <Li>Fuits()</Li>
                        <li class = "italic_li">Show all</li>
                    </ul>
                </section>
            </div>

            <div class = "main_content">
                <div class = "main_content_header">
                    <h1>Name of product</h1>
                </div>

                <div  class = "main_content_box" >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                    <div class ="product_img_container">
                    </div >
                </div>
            </div>

        </div>

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>