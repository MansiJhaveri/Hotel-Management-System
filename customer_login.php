<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
	<style>
body
{
	margin:0;
	padding:0;
	background: url(hotel.jpg);
	background-size : cover;
	font-family : sans-serif;
}
.loginbox{
	width:350px;
	height:500px;
	background:#000;
	color: #fff;
	top:50%;
	left:50%;
	position:absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}

.avatar{
	width:100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top:calc(-100px/2);
	left:calc(50% - 50px);
}
h1{
	margin:0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}

.loginbox p{
	margin:0;
	padding: 0;
	font-weight: bold;
}

.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}

.loginbox input[type="text"],input[type="password"]
{
	border:none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height:40px;
	color: #fff;
	font-size:16px;
}

.loginbox input[type="submit"]
{
	border:none;
	outline: none;
	height:40px;
	background: yellow;
	color: #fff;
	font-size: 18px;

}


.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.loginbox a
{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}
.loginbox a:hover
{
	color: #ffc107;
}
</style>
</head>
<body>

	<div class="loginbox">
	<img src="avatar.jpg" class="avatar">
	<h1>Login Here</h1>
        <br>
	<form action="" method="POST" name="login">
		<p>Username</p>
		<input type="text" name="user" placeholder="Enter Username">
		<p>Password</p>
		<input type="password" name="pass" placeholder="Enter Password">
		<input type="submit" name="submit" value="Login">
		<a href="change_customerusernamepassword.php">Change username/password?</a><br>
	</form>
        <?php
        if(isset($_POST["submit"])){
        if(!empty($_POST['user']) && !empty($_POST['pass'])) 
        {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];
        $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="select Username,Password from registered_customer where Username='$user' and Password='$pass'";
$result=$conn->query($sql);   
$row=$result->fetch_assoc();
$count = mysqli_num_rows($result);

 if($count == 1) {
         header("location: customer_booking.php");
      }else {
         echo "Enter valid data";
      }
     
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  



    </div>
</body>
</html>
