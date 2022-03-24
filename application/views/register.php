<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/register.css">
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
                <form action = "">
                    <input type = "text" name = "first_name" placeholder = "First name">
                    <input type = "text" name = "last_name" placeholder = "Last Name">
                    <input type = "text" name = "contact_num" placeholder = "Contact Number">
                    <input type = "text" name = "email" placeholder = "Email">
                    <input type = "password" name = "password" placeholder = "Password"> 
                    <input type = "password" name = "c_password" placeholder = "Confirm Password"> 
                    <input type = "submit" value = "Register" class = " register_btn">
                </form>
                <p> I already have a account!<a href = " <?= base_url('/login')?>"> Login</a> </p>
            </div>
        </div>
    </div>
</body>
</html>