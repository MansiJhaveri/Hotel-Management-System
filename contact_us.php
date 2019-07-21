<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
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
        height:1100px;
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

<div class="loginbox">

<br><br><br><br><br><br><br><br><br><br><br>
<center><p><h1>CONTACT US</h1></p></center>
<p>Address :- Khatri Park Co-Operative Housing Society Bungalow No. 20, Valvan, Lonavala, Lonavala, Maharashtra 410403</p>
<p>Contact Number :- 02223657898,02226490675,02224534708,+9190745931</p>
<p>Email Id :- <font color="lightblue"><u>monrepos@gmail.com</u></font></p>
<p>Website :- <font color="lightblue"><u>monrepos.com</u></font></p>
<p>Open now : <details>Sunday :&nbsp&nbsp10AM-10PM<br>Monday :&nbsp&nbsp10AM-10PM<br>Tuesday :&nbsp&nbsp10AM-10PM<br>Wednesday :&nbsp&nbsp10AM-10PM<br>Thursday :&nbsp&nbsp10AM-10PM<br>Friday :&nbsp&nbsp10AM-10PM<br>Saturday :&nbsp&nbsp10AM-10PM<br><summary>10AM-10PM</summary></details></p>

<center><p><h2>Post a message</h2></p></center>

<form name="contact_us" method="POST" action="">
<p>Name</p> 
<input type="text" name="cname" placeholder="Name">
<p>Email Id.</p>
<input type="text" name="cemail" placeholder="Email">
<p>Message</p>
<input type="text" name="message" placeholder="Message">
<input type="submit" name="submit" value="Submit">
<br>
<p align="right"><a href="customer_query_list.php">Frequently Asked Questions</a></p>
</form>

 <?php
        if(isset($_POST["submit"])){
        if(!empty($_POST['cname']) && !empty($_POST['cemail']) && !empty($_POST['message'])) 
        {  
        $cname=$_POST['cname'];  
        $cemail=$_POST['cemail'];
        $message=$_POST['message'];
        $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="insert into contact_us(Name,Email_Id,Query) values('$cname','$cemail','$message') ";
/*$result=$conn->query($sql);   */

if ($conn->query($sql) === TRUE) {
    echo "Your message has been recorded";
} else {
    echo "Error inserting record: " . $conn->error;
}
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  

</div>
</body>
</html>