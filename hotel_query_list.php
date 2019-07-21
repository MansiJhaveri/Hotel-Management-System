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


<?php

$servername = "localhost";
$username = "root";
$password = "Damd@689800";
$dbname = "hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="select * from contact_us ";




$result=$conn->query($sql);
echo "<font color=white>";
echo "<center>";
echo "<table border='1' width=100%>
<tr>
<th>Sr.No.</th>
<th>Name</th>
<th>Email Id</th>
<th>Query</th>
<th>Reply</th>
</tr>";

while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td align=center>" . $row['Sr_No'] . "</td>";
echo "<td align=center>" . $row['Name'] . "</td>";
echo "<td align=center>" . $row['Email_Id'] . "</td>";
echo "<td align=center>" . $row['Query'] . "</td>";
echo "<td align=center>" . $row['Reply'] . "</td>";
echo "</tr>";

}
echo "</table>";
echo "</center>";
echo "</font>";


mysqli_close($conn);
?>

<form name="Give_reply" action="" method="POST">
<font color="white">
<h2>Give Reply</h2>
<p>Sr. No.
<input type="text" name="rsrno" placeholder="Sr No">
</p>
<p>Reply
<input type="text" name="reply" placeholder="Reply" size="50" style="height: 80px;">
</p>
<p>
<input type="submit" name="record_reply" value="Record Reply">
</p>
</font>
</form>

<?php
       echo "<font color=white>";
        if(isset($_POST["record_reply"])){
       if(!empty($_POST['rsrno']) && !empty($_POST['reply']))
       {  
        $rsrno=$_POST['rsrno'];  
        $reply=$_POST['reply'];
        $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="update contact_us set Reply='$reply' where Sr_No='$rsrno'";
    if ($conn->query($sql) === TRUE) {
    echo '<meta http-equiv="refresh" content="0.05">';
    echo "Reply recorded successfully.";

} else {
    echo "Query not found: " . $conn->error;

}
}
else {  
    echo "All fields are required!";  
}
} 
echo "</font>";
?>



</body>
</html>