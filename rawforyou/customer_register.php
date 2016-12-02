

<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");

?>
<html>
<head>
	<title> Raw for You </title >
	
	<link rel = "stylesheet" href = "style/style.css" media = "all">
	

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>	

<body>

	<div id ="aboutdiv" class = "about">
	We were moving around in Pune.  Many construction sites was going on in Pune.  We had seen that, 
	the contractor leave their material as complete their work.  
	We are planning to make website, which will help the used of raw material. 

	</div>
	<div id ="contactdiv" class = "about">
	<form>
		<table align ="center" width= "600" >
	<tr>
	<td  align ="right"><b>Name :</b></td>
	<td style="padding:5px;"><input type = "text" placeholder="Name" /><br></td>
	</tr>
	<tr>
	<td align ="right"><b>Email Address:</b> </td>
	<td style="padding:5px;"><input type = "text" placeholder="Emai id" /><br>
	</tr>
	<tr>
	<td align ="right"><b color ="skyblue">Mobile Number:</b></td>
	<td style="color:skyblue; padding:5px;"> <input type = "text" placeholder="Mobile no." /><br></td>
	</tr>
	<td align ="right"><b>Your Message:</b> </td>
	<td style="padding:5px;"><textarea></textarea><br></td>
	</tr>
	<tr align ="center">
	<td  colspan = "5"style="padding:5px;"><input type = "submit" name= "submit" value = "Submit"></td>
	</tr>
</table>	
	</form>		

	</div>
	
	<div id ="logindiv" class = "about">
	
	<form action ="" method = "post">
	<table align ="center" width= "600" >
	<tr>
	<td  align ="center"><b>Email id :</b></td>
	<td colspan = "5" style="padding:5px;"><input type = "text" name = "emailid" placeholder="email id" required /><br></td>
	</tr>
	<tr>
	<td align ="center"><b> Password:</b> </td>
	<td colspan = "5" style="padding:5px;"><input type = "password" name = "pass" placeholder = "Password" required /><br>
	</tr>
	
	<tr align ="center">
	<td  colspan = "5" style="padding:5px;"><input type = "submit" name= "login" value = "Login"></td>
	</tr>
</table>
<h2 style = "float:right; padding-right:20px;"><a href = "customer_register.php"style = "text-decoration:none;"> NEW? Register Here</a></h2>	
</form>

	</div>
	
	<div class="fullwidth">
	
	<header class= "menu">
		<nav>
				
			<ul>
				<li ><a href="index.php">Home</a></li>
				<li><a href="#">My Account</a></li>
				<li id="login" ><a href="#">Login</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li id ="contact"><a href="#">Contact us</a></li>
				<li id ="about"><a href="#">about</a></li>

				
			</ul>
				
		
		</nav>
		<form class="search">
			<input type="text"name="Search " placeholder="search" />
			<input type = "submit" name="search" value="Search" />
			</form>

	</header>

		
				
	</div>
	<div></div>
	<div class="content" colspan = "50">
	
	<form action ="" method = "post" enctype = "multipart/form-data">
				
				<table  bgcolor="green" colspan = "50" align="center" width = "1400">
				
					<tr  align = "center">
						<td color="black" colspan = "10" style="padding:10px;color:black;text:arial;"><h2 >Create Account</h2></td>
					</tr>
					
					<tr>
						<td align= "right">Customer Name:</td>
						<td style="padding:7px;"><input type = "text" name = "c_name" required /></td>
					</tr>
					
					<tr >
						<td align= "right" >Customer Email :</td>
						<td style="padding:7px;"><input type = "text" name = "c_email" required /></td>
					</tr>
					
					<tr>
						<td align= "right">Customer Password :</td>
						<td style="padding:7px;"><input type = "password" name = "c_pass" required/></td>
					</tr>
					
					<tr>
						<td align= "right">Customer State:</td>
						<td style="padding:7px;">
							<select name ="c_state" >
								<option>Select State</option>
								<option>Andhra Pradesh</option>
								<option>Bihar</option>
								<option>Karnataka</option>
								<option>Maharashtra</option>
								<option>Tamilnadu</option>
								<option>Utter Pradesh</option>
								<option>West Bengal</option>
								<option>Madhya Pradesh</option>
								<option>Gujrat</option>
								<option>Punjab</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td align= "right">Customer City:</td>
						<td style="padding:7px;"><input type = "text" name = "c_city" required /></td>
					</tr>
					
					<tr>
						<td align= "right">Customer Contact:</td>
						<td style="padding:7px;"><input type = "text" name = "c_contact" required/></td>
					</tr>
					
					<tr>  
						<td align= "right">Customer Address:</td>
						<td style="padding:7px;"><input type= "text" name = "c_address"required/></td>
					</tr>
					
					<tr align="center">
						<td colspan = "6"style="padding:5px;"><input type= "submit" name = "register" value = "Create Account"></td>
					</tr>
				
				</table></p>
			
			
			</form>	
		</div>
		
	
	<div class ="body">
	
		
	</div>

		<script>
		
			$( document ).ready(function() {
				
				$("#about").click(function(){
					
					if ($('#aboutdiv').is(":hidden")){
						$('#contactdiv').slideUp('slow');
						$("#aboutdiv").slideDown('slow');
						
					}
					else{
						$('#contactdiv').slideUp('slow');
						$('#aboutdiv').slideUp('slow');
					}
			});
			
		
				
				$("#contact").click(function(){
					
					if ($('#contactdiv').is(":hidden")){
						$('#aboutdiv').slideUp('slow');
						$("#contactdiv").slideDown('slow');
						
					}
					else{
						$('#aboutdiv').slideUp('slow');
						$('#contactdiv').slideUp('slow');
					}
			});
			
			
			
			$("#login").click(function(){
					
					if ($('#logindiv').is(":hidden")){
						$('#contactdiv').slideUp('slow');
						$('#aboutdiv').slideUp('slow');
						$("#logindiv").slideDown('slow');
						
					}
					else{
						$('#aboutdiv').slideUp('slow');
						$('#contactdiv').slideUp('slow');
						$('#logindiv').slideUp('slow');
					}
			});	
			
	});
						
		
		
		
		</script>
	
	
	
	
</body>
</html>

<?php

if(isset($_POST['register'])){
	
	$ip = getIp();
	$c_name =$_POST['c_name'];
	$c_email =$_POST['c_email'];
	$c_pass =$_POST['c_pass'];
	$c_state =$_POST['c_state'];
	$c_city =$_POST['c_city'];
	$c_contact =$_POST['c_contact'];
	$c_address =$_POST['c_address'];
	
	 echo $insert_c="insert into customers(customer_ip,customer_name,customer_email,customer_pass,customer_state,customer_city,customer_contact,customer_address ) values('$ip','$c_name','$c_email','$c_pass','$c_state','$c_city','$c_contact','$c_address')";
	
	$run_c = mysqli_query($con,$insert_c);
	
	$sel_cart = "select * from cart where ip_add = '$ip'";
	
	$run_cart = mysqli_query($con,$sel_cart);
	
	$check_cart = mysqli_num_rows($run_cart);
	
	if($check_cart==0){
	
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('Account has been created successfully', Thanks)</script>";
		
		echo"<script>window.open('customer/my_account.php','_self')</script>";
	}
	else{
		
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('Account has been created successfully, Thanks')</script>";
		
		echo"<script>window.open('checkout.php','_self')</script>";
	}
	
}


?>	