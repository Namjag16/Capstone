<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Login </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/login.css">
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
                <form action = "<?= base_url('/user_login')?>" method = "POST">
                    <input type = "text" name = "username" placeholder = "Username">
                    <input type = "password" name = "password" placeholder = "Password">
                    <input type = "submit" value = "Submit" class = "admin_login_btn">
                </form>
                <p>Dont have an account yet?  <a href = "<?= base_url('/register')?>" >Register </a></p> 
            </div>

        </div>
    </div>
</body>
</html>