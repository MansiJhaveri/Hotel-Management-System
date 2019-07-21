<html>
<head>
<title>Change Username/Password</title>
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
<form action="" method="POST" name="Change_customerusernamepassword">
<div align="center">
<p>
<label for="old_username">Old Username</label>
<input type="text" name="old_username" placeholder="Old Username">
</p>
<p>
<label for="old_password">Old Password</label>
<input type="password" name="old_password" placeholder="Old Password">
</p>
<p>
<label for="new_username">New Username</label>
<input type="text" name="new_username" placeholder="New Username">
</p>
<p>
<label for="new_password">New Password</label>
<input type="password" name="new_password" placeholder="New Password">
</p>
<p>
<input type="submit" name="submit" value="Change">
</p>
</form>

<?php
        if(isset($_POST["submit"])){
        if(!empty($_POST['old_username']) && !empty($_POST['old_password']) && !empty($_POST['new_username']) && !empty($_POST['new_password'])) 
        {  
        $user=$_POST['old_username'];  
        $pass=$_POST['old_password'];
        $nuser=$_POST['new_username'];  
        $npass=$_POST['new_password'];
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
         $sql1="update registered_customer set Username='$nuser',Password='$npass' where Username='$user' and Password='$pass'";
         $result=$conn->query($sql1); 
         echo "Username/Password updated successfully.";
      }else {
         echo "Enter valid username/password";
      }    
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  


</div>
</body>
</html>
