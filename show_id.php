<!DOCTYPE html>
<html>
<head>
<title>Query List</title>
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
	width:1000px;
        height:1000px;
	background:#000;
	color: #fff;
	top:50%;
	left:50%;
	position:absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 10px 30px;
}


.loginbox p{
	margin:0;
	padding: 10px;
	font-weight: bold;
}



</style>
</head>
<body>
<h2><font color="white">Your have registered with the following details. Thanks for registering!</font></h2>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="select * from registered_customer where Id=(select max(Id) from registered_customer)";




$result=$conn->query($sql);
echo "<font color=white>";
echo "<center>";
echo "<table border='1' width=100%>
<tr>
<th>Id</th>
<th>Name</th>
<th>Contact No</th>
<th>Email Id</th>
<th>Username</th>
<th>Password</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td align=center>" . $row['Id'] . "</td>";
echo "<td align=center>" . $row['Name'] . "</td>";
echo "<td align=center>" . $row['Contact_No'] . "</td>";
echo "<td align=center>" . $row['Email_Id'] . "</td>";
echo "<td align=center>" . $row['Username'] . "</td>";
echo "<td align=center>" . $row['Password'] . "</td>";
echo "</tr>";

}




echo "</table>";
echo "</center>";
echo "</font>";


mysqli_close($conn);
?>

</body>