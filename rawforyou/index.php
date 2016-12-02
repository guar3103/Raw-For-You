

<!DOCTYPE>

<?php
session_start();
include("functions/functions.php");
include("Include/db.php");
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
	<td colspan = "5" style="padding:5px;"><input type = "text" name = "email" placeholder="email id" required /><br></td>
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
			
	<?php
	if(isset($_POST['login'])){
		
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
	
        $sel_c = "select * from customers where customer_pass = '$c_pass' AND customer_email = '$c_email'";

		$run_c = mysqli_query($con,$sel_c);

		$check_customer = mysqli_num_rows($run_c);
		
		if($check_customer==0){
			
		echo "<script>alert('Password or Email is incorrect, please try again')</script>";	
		exit(); 
		}
		$ip = getIp();
		$sel_cart = "select * from cart where ip_add = '$ip'";
	
		$run_cart = mysqli_query($con,$sel_cart);
	
		$check_cart = mysqli_num_rows($run_cart);
	
		if($check_customer>0 AND $check_cart==0){
			
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('You logged in successfully, Thanks')</script>";
		
		echo"<script>window.open('customer/my_account.php','_self')</script>";
		}
	    else{
			
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('You logged in successfully, Thanks')</script>";
		
		echo"<script>window.open('customer/my_account.php','_self')</script>";
		}
	
	}
	?>

	</div>
	
	<div class="fullwidth">
	
	<header class= "menu">
		<nav>
				
			<ul>
				<li ><a href="#">Home</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li id ="login"><a href="#">Login</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li id ="contact"><a href="#">Contact us</a></li>
				
				

				
			</ul>
				
		
		</nav>
		<form class="search">
			<input type="text"name="Search " placeholder="search" />
			<input type = "submit" name="search" value="Search" />
			</form>

			<ul class="wel">
			<?php
				
				if(isset($_SESSION['customer_email'])){
					
					echo "<a href='customer/my_account.php'><b>Welcome:</b>" . $_SESSION['customer_email'] ."</a>" ;
				}
				else{
					
					echo "<b>Welcome Guest</b>";
				}
				?>
			</ul>
			<id class="log">
			<?php
				if(!isset($_SESSION['customer_email'])){
					
					
					echo "<a href = 'checkout.php' style = 'color:orange';> </a>";
				}
				else{
					
					echo "<a href = 'logout.php' style = 'color:orange'> Logout </a>";
					
				}
				?>
			</li>
			</ul>
	</header>

		
				
	</div>
	<div></div>
	<div class="content">
	
		<div id = "sidebar">
		
			<div id = "sidebar_title"> Categories </div>
			
			<ul id = "cat">
				<li ><a href="#">Roof</a></li>
				<li><a href="#">Ceilings</a></li>
				<li id ="login"><a href="#">Floor</a></li>
				<li><a href="#">Walls</a></li>
				<li id ="contact"><a href="#">Metals</a></li>
				<li id ="about"><a href="#">Plastics</a></li>

				
			</ul>
		</div>
		<div id = "contentarea">
		
				<?php
				
				if(isset($_SESSION['customer_email'])){
					
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style = 'color:yellow;'>Your</b>";
				}
				else{
					
					echo "<b>Welcome Guest</b>";
				}
				?>
		</div>
		
		
	
	
	</div>
	<?php getIp(); ?>
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