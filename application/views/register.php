<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="">

    <style>
        *{
        margin: 0px;
        }
        div.main_container div.header {
            background-color: black;
            width: 100%;
            height: 30px;
            padding: 20px;
            color: white;
        }
        div.register {
            width: 400px;
            min-height: 300px;
            /* border: 1px solid black; */
            margin: 80px 0px 0px 390px;
            padding: 20px;
        }
        div.register h1{
            /* font-size: 50px; */
            /* text-align: center; */
            margin: 0px 0px 0px 100px;
        }
        div.register p {
            font-size: 13px;
            margin: 0px 0px 0px 110px;
        }
        div.register p .error{
            font-size: 13px;
            color: red;
        }
        div.register p .success{
            font-size: 13px;
            color: green;
        }
            div.register p a{
                text-decoration: none;
                font-style: italic;
                font-size: 15px;
            }
            div.register p a:hover {
                text-decoration: underline;
            }
        div.register form {
            padding: 5px;
        }
            div.register form input{
                width: 200px;
                height: 30px;
                padding: 5px;
                margin: 5px 5px 5px 100px;
                border: 1px solid black;
                font-size: 15px;
                border-radius: 5px;
                
            }
        div.register .register_btn{
            margin: 10px 0px 0px 115px;
            width: 100px;
            background-color: black;
            color: white;
            cursor: pointer;
            font-weight: bold;
            margin: 0px 0px 0px 215px;
        }
        div.register .register_btn:hover{
            background-color: white;
            color: black;
        }
    </style>

</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1> Store</h1>
            <h4>Register</h4>
        </div>
        <div class = "content">
            <div class = "register">
                <h1>Register</h1>
                <form action = "/Users/register" method = "POST">
                    <input type = "text" name = "first_name" placeholder = "First name">
                    <input type = "text" name = "last_name" placeholder = "Last Name">
                    <input type = "text" name = "contact_num" placeholder = "Contact Number">
                    <input type = "text" name = "email" placeholder = "Email">
                    <input type = "password" name = "password" placeholder = "Password"> 
                    <input type = "password" name = "c_password" placeholder = "Confirm Password"> 
                    <input type = "submit" value = "Register" class = " register_btn">
                </form>
                <p> I already have a account!<a href = "/login"> Login</a> </p>
                <p class = "error"><?= $this->session->flashdata('error');?></p>
                <p class = "success"><?= $this->session->flashdata('success');?></p>
            </div>
        </div>
    </div>
</body>
</html>