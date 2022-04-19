<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Show Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="">

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
            padding: 20px;
            margin: 0px;
        }
            div.main_container div.content div.image_container{
                border: 1px solid black;
                width: 700px;
                height: 700px;
                margin: 10px 0px 0px 0px;
                display: inline-block;
                vertical-align: top;
                padding: 20px;
            }

                div.main_container div.content div.image_container div.main_image{
                    width: 400px;
                    height: 400px;
                    border: 1px solid black;
                    padding: 20px;
                    margin: 0px 0px 20px 0px ;
                }
                div.main_container div.content div.image_container div.main_image img{
                    width: 400px;
                    height: 400px;
                }
                div.main_container div.content div.image_container table td{
                    width: 200px;
                    height: 150px;
                    border: 1px solid black;
                    padding: 10px;
                    margin: 10px 0px 0px 0px;
                }

            div.main_container div.content div.description_container{
                border: 1px solid black;
                width: 300px;
                height: 700px;
                margin: 10px 0px 0px 0px;
                display: inline-block;
                padding: 20px;

            }   
    </style>
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1>NAME OF STORE</h1>
            <p> Name </p>
            <a href = ""> Shopping Cart (5) </a>
        </div>

        <div class = "content">
            <a href = "/users/all_product">Go back </a>
            <h1> NAME OF PRODUCT</h1>

            <div >
                <div class = "image_container">
                    <div class = "main_image">
                            <img src = "<?= base_url($image) ?>" alt = "<?= $name?>">
                    </div>
                </div>

                <div class = "description_container">
                <p> <?= $description ?> </p>
                    <form action=""> 
                        <input type="submit" Value = "Buy">
                        <input type="">
                    </form>
                </div>

            </div>
        </div> 

        <div class = "footer">
        <h2>Similar items</h2>
            <table>
                <tr>
                    <td>Image here</td>
                    <td>Image here</td>
                    <td>Image here</td>
                    <td>Image here</td>
                    </tr>
            </table>
        </div>
    
    </div>

</body>
  
</html>