<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/product.css">

    <style>
        *{
            margin: 0px;
        }
        div.main_container{
            margin: 0px;
        }
            div.main_container div.header{
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
            div.main_container div.header p{
            display: inline-block;
            vertical-align: top;
            margin: 8px 0px 0px 850px;
            font-weight: bold;
            }
            div.main_container div.header a{
            display: inline-block;
            vertical-align: top;
            margin: 8px 0px 0px 10px;
            text-decoration: none;
            cursor: pointer;
            color: white;
            }

        div.main_container div.content{
            margin: 0px;

        }
            div.main_container div.content div.left_nav{
                margin: 10px 0px 0px 10px;
                width: 200px;
                height: 500px;
                border: 1px solid black;
                display: inline-block;
                vertical-align: top;
            }
            div.main_container div.content div.left_nav form{
                /* border: 1px solid black; */
                padding: 10px;
                display: inline-block;
            }
            div.main_container div.content div.left_nav form input{
                width: 120px;
                height: 20px;
                font-size: 14px ;
                display: inline-block;
                border: none;
                border-bottom: 1px solid black;
            }
            div.main_container div.content div.left_nav .search_btn{
                width: 40px;
                height: 25px;
                vertical-align: top;
                background-color: white;
                border: none;
                border: 1px solid black;
                cursor: pointer;
                font-weight:bold ;
                display:inline-block;
                border-radius: 5px;
            }
            div.main_container div.content div.left_nav .search_btn:hover{
                background-color: black;
                color: white;
            }

            div.main_container div.content div.left_nav section{
                padding: 10px;
                margin: 0px;
            }

            div.main_container div.content div.left_nav ul{
            list-style-type: none;
            font-size: 14px;
            margin: 0px 0px 0px 15px;
            padding: 0px;
            }

            div.main_container div.content div.left_nav li{
            list-style-type: none;
            font-size: 14px;
            cursor: pointer;
            margin: 5px 0px 0px 0xp;
            }
            div.main_container div.content div.left_nav .italic_li{
            list-style-type: none;
            font-size: 14px;
            font-style: italic;
            margin: 10px 0px 0px 0px;

            }

            div.main_container div.content div.main_content{
                border: 1px solid black;
                width: 950px ;
                height: 800px;
                display: inline-block;
                margin: 10px 0px 0px 10px;
            }
                div.main_container div.content div.main_content_header{
                    border: 1px solid black;
                    height: 50px;
                    padding: 10px;
                }
                div.main_container div.content div.main_content_box{
                    /* border: 1px solid black; */
                    height: 650px;
                    padding: 20px;
                    overflow: auto;
                }
                    div.main_container div.content div.product_img_container{
                        border: 1px solid black;
                        width: 150px;
                        height: 150px;
                        display: inline-block;
                        margin: 10px;
                    }
        </style>
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