<?php
include("config.php");

if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql="INSERT INTO users(name,email,password)
          VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Registration Successful');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#667eea,#764ba2);
}

.container{
width:400px;
padding:30px;
background:rgba(255,255,255,0.15);
backdrop-filter:blur(15px);
border-radius:20px;
box-shadow:0 10px 30px rgba(0,0,0,.3);
}

h1{
text-align:center;
color:white;
margin-bottom:20px;
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:none;
border-radius:10px;
}

button{
width:100%;
padding:12px;
background:#22c55e;
border:none;
border-radius:10px;
color:white;
font-size:16px;
cursor:pointer;
}

p{
text-align:center;
margin-top:15px;
color:white;
}

a{
color:yellow;
text-decoration:none;
}

</style>
</head>

<body>

<div class="container">

<h1>Create Account</h1>

<form method="post">

<input type="text"
name="name"
placeholder="Full Name"
required>

<input type="email"
name="email"
placeholder="Email"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button name="signup">
Sign Up
</button>

</form>

<p>
Already have an account?
<a href="login.php">Login</a>
</p>

</div>

</body>
</html>