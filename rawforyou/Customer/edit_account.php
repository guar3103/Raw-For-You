<?php

			include("include/db.php");
			$user = $_SESSION['customer_email'];
			
			$get_customer = "select * from customers where customer_email='$user'";
			
			$run_customer = mysqli_query($con,$get_customer);
			
			$row_customer = mysqli_fetch_array($run_customer);
			$c_id = $row_customer['customer_id'];
			$name = $row_customer['customer_name'];
			$email = $row_customer['customer_email'];
			$pass = $row_customer['customer_pass'];
			$state = $row_customer['customer_state'];
			$city = $row_customer['customer_city'];
			$contact = $row_customer['customer_contact'];
			$address = $row_customer['customer_address'];
			
?>			
	
	<form action ="" method = "post"enctype = "multipart/form-data">
				
				<table align="center" width = "750">
				
					<tr align = "center">
						<td colspan = "6"><h2>Update Account</h2></td>
					</tr>
					
					<tr>
						<td align= "right">Customer Name:</td>
						<td style="padding:5px;"><input type = "text" name = "c_name" value= "<?php echo $name; ?>" required /></td>
					</tr>
					
					<tr >
						<td align= "right" >Customer Email :</td>
						<td style="padding:5px;"><input type = "text" name = "c_email"value= "<?php echo $email; ?>" required /></td>
					</tr>
					
					<tr>
						<td align= "right">Customer Password :</td>
						<td style="padding:5px;"><input type = "text" name = "c_pass"value= "<?php echo $pass; ?>" required/></td>
					</tr>
					
					<tr>
						<td align= "right">Customer State:</td>
						<td style="padding:5px;">
							<select name ="c_state" disabled>
								<option><?php echo $state; ?></option>
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
						<td style="padding:5px;"><input type = "text" name = "c_city"value= "<?php echo $city; ?>" required /></td>
					</tr>
					
					<tr>
						<td align= "right">Customer Contact:</td>
						<td style="padding:5px;"><input type = "text" name = "c_contact"value= "<?php echo $contact; ?>" required/></td>
					</tr>
					
					<tr>  
						<td align= "right">Customer Address:</td>
						<td style="padding:5px;"><input type= "text" name = "c_address"value= "<?php echo $address; ?>"required/></td>
					</tr>
					
					<tr align="center">
						<td colspan = "6"style="padding:10px;"><input type= "submit" name = "register" value = "Update Account"></td>
					</tr>
				
				</table>
			
			
			</form>
				
			
		
	

<?php

if(isset($_POST['register'])){
	
	$ip = getIp();
	
	$customer_id = $c_id;
	$c_name =$_POST['c_name'];
	$c_email =$_POST['c_email'];
	$c_pass =$_POST['c_pass'];
	
	$c_city =$_POST['c_city'];
	$c_contact =$_POST['c_contact'];
	$c_address =$_POST['c_address'];
	
	 $update_c = "update customers set customer_name='$c_name', customer_email='$c_email',customer_pass='$c_pass',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address' where customer_id ='$customer_id'";
	
	$run_update = mysqli_query($con,$update_c);
	
	if ($run_update){
		
		echo "<script>alert ('Your account is successfully updated')</script>";
		echo "<script> window.open('insert_product.php','_self') </script>";
	}
	
}


?>	
	