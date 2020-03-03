<!DOCTYPE html>
<html>
<head>
<title>GOOD PHARMACY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
h1{ padding:20px;
	width:1800px;
background-color:gray;
border-style:solid;
border-color:white;
}
body
{
background-image:url("https://previews.123rf.com/images/leaf/leaf1508/leaf150800532/44323995-medicines-arranged-in-shelves-at-pharmacy.jpg");
}

div{

background-color:linen;
color:black;
}

.center{
background-color:linen;
text-align:center;
width:360px;
height:250px;
padding:40px;
color:black;
}

.end{
	border-style:solid;
	text-align: center;
	width:50px;
	height:15px;
}

</style>


</head>
<!-- <script>
function myFunction() {
  alert("Logging Out");
<a href="logout.php">
}
</script>
 -->
<body>


<h1 style="text-align:center;color:white">GOOD PHARMACY</h1>

<!-- <p class="end" style="text-align: right"> -->

<form action="logout.php">
<input type="submit" value="CLICK TO LOGOUT">
</form>
<!-- <button onclick="myFunction()">LOGOUT</button> -->
 

<div class="center" style="position:absolute;top:145px">
<h3>
Bill<br><br><br>Click To Generate Bill<br><br>
</h3>
<form action="old_billgen.php">
<input type="submit" value="Click">
</form>
<!-- <a href="bill2.php" class="button">Generate</a> -->
<br><br>
</div>

<div class="center" style="position:absolute;top:145px;left:1400px" >
<h3>
Medicine Details<br><br>
Medicine-id:<br><br>
<form action="meddb.php" method="POST">
<input type="text" name="med_id" placeholder="Medicine id"><br>
</h3>
<input type="submit" value="Submit">
</form><br><br>
<form action="new_med.php" method="get">
<input type="submit" value="ADD NEW"><br><br><br>
</form>
<form action="update.php" method="get">
<input type="submit" value="UPDATE"><br>

</form>
</div>

<div class="center" style="position:absolute;left:930px" >
<h3>
Billing History<br><br>
<form action="billing_hist_back.php" method="POST">
Customer-id:<br><br>
<input type="text" name="c_id" placeholder="Customer Phone Number">
<br></h3>
<input type="submit" value="Submit">
</form>
</div>

<div class="center" style="margin:auto">
<h3>
Customer Details<br><br>
<form action="customer_view.php" method="POST">
Customer-id:<br><br>
<input type="text" name="phone_no" placeholder="Customer Phone Number">

<br></h3>
<input type="submit" value="Submit">
</form>
<form action="customer.php">
<input type="submit" value="Add new customer">
</form>

<br>

</body>


</html>