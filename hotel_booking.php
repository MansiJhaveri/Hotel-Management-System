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
<script type = "text/javascript">
function validateForm() {
    var name1 = document.Room_Booking.name.value;
    var contact_no1 = document.Room_Booking.contact_no.value;    
    var email1 = document.Room_Booking.email.value;
    var name2=name1.match(/^[A-Z a-z]+$/);
    var contact_no2=contact_no1.match(/^[0-9]+$/); 
    var email2=email1.match();
    if(name2==null||contact_no2==null||email2==null)
    {
     alert("Enter valid details");
    }
    else  
    {
     window.location="database.php";
    }
}
</script>
<div align="right">
<a href="hotel_login.php"><input type="button" value="Logout"></a>
</div>
<div align="right">
<a href="cancel_booking.php"><input type="button" value="Cancel Booking"></a>
</div>
<div align="right">
<a href="hotel_query_list.php"><input type="button" value="Query List"></a>
</div>


<div class="loginbox">
<img src="avatar.jpg" class="avatar">
<form name="Room_Booking" onsubmit="return validateForm()">
<div align="center">
<p>
<label for="name">Name</label>
<input type="text" name="name" placeholder="Name">
</p>
<p>
<label for="contact_no">Contact No.</label>
<input type="text" name="contact_no" placeholder="Contact No.">
</p>
<p>
<label for="email_id">Email Id.</label>
<input type="email" name="email" placeholder="Email Id">
</p>
</div>
<div align="center">
<p>
<label for="from">From</label>
<input type="date" name="from_date">
</p>
<p>
<label for="to">To</label>
<input type="date" name="to_date">
</p>
</div>
<div align="center">

<p>
             <label>Room Type</label>
             <select id = "room_type">
               <option value = "1">Single</option>
               <option value = "2">Double</option>
               <option value = "3">Triple</option>
               <option value = "4">Quad</option>
             </select>
</p>
<p> 
<label>No. of Rooms</label>
<select id = "no_of_rooms">
<option value = "1">1</option>
<option value = "2">2</option>
<option value = "3">3</option>
<option value = "4">4</option>
<option value = "5">5</option>
</select>
<p>
</div>
<div align="center">
<p>
<input type="submit" name="submit" value="Submit">
</p>
</div>
</form>
</div>
</html>
