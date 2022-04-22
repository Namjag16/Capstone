<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Preview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/edit.css">

    <style>
        *{
            margin: 0px;
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

        div.main_container div.content {
            padding: 20px;
            width: 800px;
            min-height: 500px;
            /* border: 1px solid black; */
            margin: 100px 0px 0px 200px;
        }
        div.main_container div.content section#image{
            width: 300px;
            height: 300px;
            display: inline-block;
        }
        div.main_container div.content img{
            width: 300px;
            height: 300px;
        }
        div.main_container div.content section#item_description{
            display: inline-block;
            vertical-align: top;
            width: 300px;
            height: 300px;
            margin: 50px 0px 0px 60px;
        }
            div.main_container div.content section#item_description p{
                margin: 30px 0px 0px 0px;
            }

        div.main_container div.content section h2{
            margin: 10px 0px 0px 20px;
            display: inline-block;
            vertical-align: top;
        }
        div.main_container div.content section p{
            margin: 15px 0px 0px 0px;
            display: inline-block;
            vertical-align: top;
            font-size: 15px;
        }

        div.main_container form input {
            width: 100px;
            height: 30px;
            font-size: 15px;
            margin: 10px 0px 0px 250px;
            background-color: white;
            border: none;
            border: 1px solid black;
            border-radius: 5px;
            font-weight: bolder;
            transition: 1s;
            cursor: pointer;
        }
        div.main_container form input:hover {
            background-color: black;
            color: white;
        }

    </style>
</head>
  
<body>
    <div class = "main_container">
        <div class = "header">
            <h1>Preview</h1>
            <h2><a href = "<?= base_url('admins/dashboard')?>" >Orders </a></h2>
            <h2><a href = "<?= base_url('admins/show_product')?>""> Products </a></h2>
            <h3> <a href = "/logoff"> Logoff </a></h3>
            <h4>Preview Product</h4>
        </div>
    
        <div class = 'content'>
            <section id = 'image'>
                <img src = "<?= base_url("$image"); ?>"  alt = "<?= $name ?>" >
            </section>

            <section id = 'item_description'>
                <h1>Item Description</h1>
                <p><?= $description ?> </p>
            </section>

            <section>
                <h2>Name:</h2> <p><?= $name ?> </p>
                <h2>Category:</h2> <p><?= $Category_type ?></p> 
                <h2>Price:</h2>  <p><?= $price ?></p> 
            </section>
        </div>
        <form action = "<?= base_url('admins/edit_product/').$id?>">
            <input type="submit" Value = 'Back' >
        </form> 
    </div>

</body>
  
</html>