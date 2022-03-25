<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Login </title>
	<meta charset = "utf-8">
	<meta name = "viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel = "stylesheet" type="text/css" href="assets/css/user_login.css">

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

        div.login {
            width: 200px;
            height: 300px;
            margin: 100px 0px 0px 500px;
        }
        div.login form input{
            width: 200px;
            height: 30px;
            padding: 5px;
            margin: 5px;
            border: 1px solid black;
            font-size: 15px;
            border-radius: 5px;
        }
        div.login .admin_login_btn{
            margin: 10px 0px 0px 115px;
            width: 100px;
            background-color: black;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }
        div.login .admin_login_btn:hover{
            background-color: white;
            color: black;
        }
        div.login p{
            margin: 10px 0px 0px;
            text-align: center;
        }
            div.login p a{
                margin: 10px 0px 0px;
                text-align: center;
                font-style: italic;
                text-decoration: none;
                font-size: 14px;
            }
            div.login p a:hover{
                text-decoration: underline;
            }
        .error{
            color: red;
        }
    </style>

</head>

<body>

    <div class = "main_container">
        <div class = "header">
            <h1> Store</h1>
            <h4>login</h4>
        </div>
        <div class = "content">
            <div class = "login">
                <h1>Log in </h1>
                <form action = "/Users/login" method = "POST">
                    <input type = "text" name = "email" placeholder = "Email Address">
                    <input type = "password" name = "password" placeholder = "Password">
                    <input type = "submit" value = "Submit" class = "admin_login_btn">
                </form>
                <p>Dont have an account yet?  <a href = "/register">Register </a></p> 
                <p class = "error"> <?=   $this->session->flashdata('error');?></p>
                <p class = "success"> <?=   $this->session->flashdata('success');?></p>
            </div>
        </div>
    </div>

</body>
</html>