<!DOCTYPE html>
<html lang="en">
  
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="style.css">
    
    <style>
        div.footer{
            margin: 0px 0px 0px 20px;
        }
            div.footer div.items{
                /* border: 1px solid black; */
                margin: 0px;
                margin: 0px 20px 0px 0px ;
            }
            div.footer div.items a{
                border: 1px solid black;
                width: 180px;
                height: 180px;
                display: inline-block;
                margin: 10px;
                vertical-align: top;
                text-decoration: none;
                color:black;
                
            }
            div.footer div.items img{
                height: 180px;
                width: 180px;
            }
            div.footer div.items p{
                background-color: hsla(4, 0%, 0%,0.4); 
                text-decoration: none;
                position: relative;
                bottom: 27px;
                box-shadow: 3px 3px 7px grey;
                font-size: 20px;
                text-align: center;
            }
    </style>

</head>
<body>
    <div class = "footer">
        <h1>Similar Items</h1>

        <div class = 'items'>
<?php foreach($data AS $row){
?>
            <a href = "/Users/show/<?= $row['id'] ?>" class = "product_img_container">
                <img src = "<?= base_url($row['image']) ?>" alt = "<?= $row['name']?>" >
                <p>Price $<?= $row['price']?></p>
            </a >
<?php }
?>
        </div>

    </div>
</body>
  
</html>
