<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
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


.loginbox input[type="submit"]
{
	border:none;
	outline: none;
	height:40px;
	background: yellow;
	color: #fff;
	font-size: 18px;

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

<!DOCTYPE html>
<html>
<head>
<title>Room Booking</title>
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


.loginbox input[type="submit"]
{
	border:none;
	outline: none;
	height:40px;
	background: yellow;
	color: #fff;
	font-size: 18px;

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
<form name="Registration" action="" method="POST">
<div align="center">
<p>
<label for="name">Name</label>
<input type="text" name="namer" placeholder="Name">
</p>
<br>
<p>
<label for="contact_no">Contact No.</label>
<input type="text" name="contact_nor" placeholder="Contact No.">
</p>
<br>
<p>
<label for="email_id">Email Id.</label>
<input type="email" name="emailr" placeholder="Email Id">
</p>
<br>
<label for="username">Username</label>
<input type="text" name="usernamer" placeholder="Username">
</p>
<br>
<label for="password">Password</label>
<input type="password" name="passwordr" placeholder="Password">
</p>
<br>
<div align="center">
<p>
<input type="submit" name="register" value="Register">
</p>
</div>
</form>



<?php
        if(isset($_POST["register"])){
        if(!empty($_POST['namer']) && !empty($_POST['contact_nor']) && !empty($_POST['emailr']) && !empty($_POST['usernamer']) && !empty($_POST['passwordr'])) 
        {  
        $namer=$_POST['namer'];  
        $contact_nor=$_POST['contact_nor'];
        $emailr=$_POST['emailr'];  
        $usernamer=$_POST['usernamer'];
        $passwordr=$_POST['passwordr'];
        $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="insert into registered_customer(Name,Contact_No,Email_Id,Username,Password) values('$namer','$contact_nor','$emailr','$usernamer','$passwordr')";
    if ($conn->query($sql) === TRUE) {
    header("Location: show_id.php"); 
    echo "You have successfully registered.";
} else {
    echo "Error inserting record: " . $conn->error;
}

    }    
 else {  
    echo "All fields are required!";  
}  
}  
?>  




</div>
</body>
</html>
