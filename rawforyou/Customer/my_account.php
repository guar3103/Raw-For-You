<!DOCTYPE>

<?php
session_start();
include("Functions/functions.php");

?>

<html>
<head>
	<title> Raw for You </title >
	
	<link rel = "stylesheet" href = "style/style.css" media = "all">
</head>	

<body>



		<div class="fullwidth">
	
	<header class= "menu">
		<nav>
				
			<ul>
				<li ><a href="../index.php">Home</a></li>
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
					
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] ;
				}
				
				

    
					?>
					
					</ul>
	</header>

		
				
	</div>
	<div></div>
	<div class = "content_wrapper">

	

		<div id ="content_area"> 
			
			<?php cart(); ?>
			
			<div id ="shopping_cart">
			
				<span style = "float:right; font-size:15px; padding:5px; line-height:40px";  > 
				
				<?php
				
				if(isset($_SESSION['customer_email'])){
					
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] ;
				}
				
				
				?>
				

				
				
				<?php
				if(!isset($_SESSION['customer_email'])){
					
					
					echo "<a href = 'checkout.php' style = 'color:orange';> Login </a>";
				}
				else{
					
					echo "<a href = 'logout.php' style = 'color:orange'> Logout </a>";
					
				}
				?>
				</span>
			</div>
			
			
			
			
		
		</div>
		
				<?php
				
				if(isset($_SESSION['customer_email'])){
					
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] ;
				}
				
				
				?>
				

				
				
				<?php
				if(!isset($_SESSION['customer_email'])){
					
					
					echo "<a href = 'checkout.php' style = 'color:orange';> Login </a>";
				}
				else{
					
					echo "<a href = 'logout.php' style = 'color:orange'> Logout </a>";
					
				}
				?>
		
		<div id ="sidebar">
		<div id = "sidebar_title"> My Acoount </div>
		
		<!-- Selecting Categories -->
			
			<ul id = "cat">
			
			<?php
			
			$user = $_SESSION['customer_email'];
			
			$get_name = "select * from customers where customer_email='$user'";
			$run_name = mysqli_query($con,$get_name);
			$row_name = mysqli_fetch_array($run_name);
			$c_name = $row_name['customer_name'];
			?>
			
			
			
			
			<li><a href ="my_account.php?my_orders">My Orders</a></li>
			<li><a href ="my_account.php?insert_product">Insert Material</a></li>
			<li><a href ="my_account.php?edit_account">Edit Acoount</a></li>
			<li><a href ="my_account.php?change_pass">Change Password</a></li>
			<li><a href ="my_account.php?delete_account">Delete Acoount</a></li>
			<li><a href ="logout.php">Logout</a></li>
				
			</ul>
			
			
			
			
			
			
			
		</div>

	</div>
	<div id = "product_box">
			
			<h2 style="align:center">Welcome:<?php echo "$c_name"; ?> < /h2>
			
			<?php
			if(!isset($_GET['my_orders'])){
				if(!isset($_GET['insert_product'])){
				if(!isset($_GET['edit_account'])){
					if(!isset($_GET['change_pass'])){
						if(!isset($_GET['delete_account'])){
						
				echo "
				<h2 style = 'padding:20px;'>Welcome: $c_name</h2>
				<b>You can see your orders progress here <a href = 'my_account.php?my_orders'>link </a></b>"	;			 
						}
					}
				}
			}
			}
			?>
			<?php
			if(isset($_GET['edit_account'])){
				
				include("edit_account.php");
			}
			if(isset($_GET['insert_product'])){
				
				include("insert_product.php");
			}
			if(isset($_GET['change_pass'])){
				
				include("change_pass.php");
			}
			?>
				
		</div>	
	</div>	
	
	<div id ="footer"> 
	
	
	
	</div>
	
	
		

</body>
</html>	
	
	