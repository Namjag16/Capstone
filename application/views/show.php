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
            overflow-wrap: break-word;
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
            margin: 8px 0px 0px 750px;
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
            div.main_container div.content .Go_back{
                /* border: 1px solid black; */
                text-decoration: none;
                transition: 1s;
            }
            div.main_container div.content .Go_back:hover{
                font-size: 18px;
            }
            div.main_container div.content div.image_container{
                border: 1px solid black;
                width: 700px;
                height: 500px;
                margin: 10px 0px 0px 0px;
                display: inline-block;
                vertical-align: top;
                padding: 20px;
            }
                div.main_container div.content div.image_container div.main_image{
                    width: 400px;
                    height: 400px;
                    /* border: 1px solid black; */
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
                height: 500px;
                margin: 10px 0px 0px 0px;
                display: inline-block;
                padding: 20px;
            }
                div.main_container div.content div.description_container h1{
                    margin: 0px 0px 10px 0px;
                }
                div.main_container div.content div.description_container section{
                    margin: 20px 0px 0px 0px;
                }
                    div.main_container div.content div.description_container section p{
                        margin: 3px 0px 5px 30px;
                        font-size: 20px;
                    }
                    div.main_container div.content div.description_container #section_price{
                        margin: 20px 0px 0px 0px;
                    }  
                div.main_container div.content div.description_container form{
                    margin: 100px 0px 0px 0px;
                }
                    div.main_container div.content div.description_container input{
                       width: 90px;
                       height: 30px;
                       font-size: 15px;
                    }
                    div.main_container div.content div.description_container .btn_buy{
                       width: 50px;
                       height: 30px;
                       font-size: 15px;
                       background-color: white;
                       border:none;
                       border: black 1px solid ;
                       border-radius: 5px;
                       font-weight: bold;
                       transition: 1s;
                    }
                    div.main_container div.content div.description_container .btn_buy:hover{
                        background-color: black;
                        color: white;
                    }
                    div.main_container div.content div.description_container .error{
                        color: red;
                        font-weight: 500;
                    }
                    div.main_container div.content div.description_container .sucess{
                        color: green;
                        font-weight: 500;
                    }  
            
        div.main_container div.footer{
            /* border: 1px solid black; */
            margin: 10px 0px 0px 20px;
        }
    </style>
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1>NAME OF STORE</h1>
            <p> <?= $this->session->userdata('first_name')?></p>
            <a href = "/Users/show_all_carts"> Shopping Cart (5) </a>
            <a href = "/Users/logoff"> Log off </a>
        </div>

        <div class = "content">
            <a href = "/users/all_product" class = "Go_back">Go back </a>
            <h1> <?= $name ?></h1>

            <div >
                <div class = "image_container">
                    <div class = "main_image">
                            <img src = "<?= base_url($image) ?>" alt = "<?= $name?>">
                    </div>
                </div>

                <div class = "description_container">
                    <h1>Item Description</h1>
                    <p> <?= $description ?> </p>

                    <section>
                        <h3>Item Name</h3>
                        <p> <?= $name ?> </p>
                        
                        <h3 id = "section_price">item Price</h3>
                        <p> $<?= $price ?> </p>
                    </section>


                    <form action = "/users/save_at_carts" method = "POST"> 
                        <input type = "hidden" name = 'user_id' value = <?= $this->session->user_id; ?> >
                        <input type = "hidden" name = 'item_id' value = <?= $id ?> > 
                        <input type = "hidden" name = 'item' value = <?= $name ?> > 
                        <input type = "hidden" name = 'price' value = <?= $price ?> > 
                        <input type = "number" name = "quantity" placeholder = "Quantity">
                        <input type ="submit" Value = "Buy" class = "btn_buy">
     
                    </form>
<?php           if(!empty($this->session->flashdata('error'))){
?>
                    <p class = "error"><?= $this->session->flashdata('error');?></p>
<?php           }    
?>
<?php           if(!empty($this->session->flashdata('sucess'))){
?>
                    <p class = "sucess"><?= $this->session->flashdata('sucess');?></p>
<?php           }    
?>
                
                </div>

            </div>
        </div> 

        <div class = "footer">
        </div>

    </div>

</body>
  
</html>