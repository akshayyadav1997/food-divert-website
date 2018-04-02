<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
/*body{/*background-color : #00CED1;
width: 500px;
margin: auto;}
form {
    background-color : #00CED1;
    border: 3px solid #f1f1f1;
}*/


body{

    background-color: #000034;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #0000FF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    border-radius: 15px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color:  #0000FF;
    border-radius: 15px;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

p{

    width: 40%;
}

img.avatar {
    width: 20%;
    border-radius: 20%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2><center><font color="white">Login Form</font></center></h2>
<div>
<form action="process.php" method="POST">
  <div class="imgcontainer">
    <img src="http://logottica.com/wp-content/uploads/2011/05/fd-francisdrake-design-1v1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <center><label><b>Username</b></label>
    <input type="text" id="user" placeholder="Enter Username" name="user" required><br></center>

    <center><label><b>Password</b></label>
    <input type="password" id="pass" placeholder="Enter Password" name="pass" required></center>
        
    <center><p><button type="submit" id="btn" name="submit" value="Login"><font color="white">Login</font></button></p></center>
    <!--<input type="checkbox" checked="checked"> Remember me-->
  </div>

  <!--<div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>-->
</form>
</div>
</body>
</html>
