<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Add</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/edit.css">

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

        div.main_container div.content {
            padding: 20px;
            width: 500px;
            min-height: 200px;
            border: 1px solid black;
            margin: 100px 0px 0px 300px;
        }
            div.main_container div.content form{
            display: inline-block;
            }
                div.main_container div.content form input{
                    width: 200px;
                    height: 20px;
                    display: inline-block;
                    vertical-align: top;
                    margin: 10px 0px 10px 0px;
                    font-size:15px ;
                }
                div.main_container div.content label{
                    margin: 10px 0px 0px 0px;
                    font-size: 15px;
                    font-weight: bold;
                }
                div.main_container div.content textarea{
                    font-size:15px ;
                    padding: 10px;
                }
                div.main_container div.content select{
                    margin: 10px 0px 0px 0px;
                    font-size: 15px;
                    font-weight: bold;
                    border-radius:5px ;
                }
                div.main_container div.content .upload_img{
                    height: 30px;
                    background-color: white;
                }
                div.main_container div.content .cancel_btn{
                    width: 80px;
                    height: 30px;
                    font-size: 15px;
                    font-weight:bold ;
                    padding: 2px;
                    background-color: white;
                    border: none;
                    border: 1px solid black;
                    border-radius: 5px;
                    cursor: pointer;
                }
                div.main_container div.content .cancel_btn:hover{
                    background-color: #a10822;
                    color: white;
                    border: none;
                }
                div.main_container div.content .preview_btn{
                    width: 80px;
                    height: 30px;
                    font-size: 15px;
                    font-weight:bold ;
                    padding: 2px;
                    background-color: white;
                    border: none;
                    border: 1px solid black;
                    border-radius: 5px;
                    cursor: pointer;
                }
                div.main_container div.content .preview_btn:hover{
                    background-color: black;
                    color: white;
                    border: none;
                }
                div.main_container div.content .update_btn{
                    width: 80px;
                    height: 30px;
                    font-size: 15px;
                    font-weight:bold ;
                    padding: 2px;
                    background-color: white;
                    border: none;
                    border: 1px solid black;
                    border-radius: 5px;
                    cursor: pointer;
                }
                div.main_container div.content .update_btn:hover{
                    background-color: #114006;
                    color: white;
                    border: none;
                }
    </style>
</head>
  
<body>
    <div class = "main_container">
        <div class = "header">
            <h1>Dashboard</h1>
            <h2><a href = "" >Orders </a></h2>
            <h2><a href = "/show_product""> Products </a></h2>
            <h3> <a href = "/logoff"> Logoff </a></h3>
            <h4>Add Product</h4>
        </div>

        <div class = "content">
            <h1>Edit Product - ID 2</h1>

            <form action = "">
                <input type = "text" name = "product_name" placeholder = "Name">
                <textarea name = "description" placeholder = "Description here" cols="50" rows="10"> </textarea>
                <label for = "category">Category</label>
                <select id="category" name="category">
                    <option value = "shirt">Shirt</option>
                    <option value = "bag"> Bag</option>
                    <option value = "jeans">Jeans</option>
                </select>
                <input type = "text" name = "add_new_category" placeholder = "Add new category ">
                <input type="file" name="image" value = "Download_image" class = "upload_img">
                <input type="submit" name="action" value="Cancel" class = "cancel_btn"/>
                <input type="submit" name="action" value="Preview" class = "preview_btn"/>
                <input type="submit" name="action" value="Update" class = "update_btn"/>

            </form>

        </div>

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>