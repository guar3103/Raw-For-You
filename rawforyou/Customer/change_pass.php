

<h2 style="text-align:center;">Change your Password</h2>
<form action ="" method = "post">
<p>	<table align ="center" width= "700"  >
	<tr>
	<td  align ="right" style="margin-top:1000px;"><b>Enter current Password :</b></td>
	<td style="padding:5px;"><input type = "password" name = "current_pass" required /><br></td>
	</tr>
	<tr>
	<td align ="right"><b>Enter new Password:</b> </td>
	<td style="padding:5px;"><input type = "password" name = "new_pass" required /><br>
	</tr>
	<tr>
	<td align ="right"><b>Enter new password again:</b></td>
	<td style="padding:5px;"> <input type = "password" name = "new_pass_again" required /><br></td>
	</tr>
	<tr align ="center">
	<td  colspan = "5"style="padding:5px;"><input type = "submit" name= "change_pass" value = "Change Password"></td>
	</tr>
</table>	
</form>


<?php
include("include/db.php");

if(isset($_POST['change_pass'])){
	$user = $_SESSION['customer_email'];
	
	$current_pass=$_POST['current_pass'];
	$new_pass=$_POST['new_pass'];
	$new_again=$_POST['new_pass_again'];

	$sel_pass = "select *from customers where customer_pass ='$current_pass' AND customer_email= '$user'";
	
	$run_pass= mysqli_query($con,$sel_pass);
	
	$check_pass = mysqli_num_rows($run_pass);
	
	if($check_pass==0){
		
		
		echo "<script>alert('Your current password is ')</script>";
		exit();
		
	}
	if($new_pass!=$new_again){
		
		echo "<script>alert('Your password is not match ')</script>";
		exit();
	}
	else{
		
		$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$user'";
	
		$run_update= mysqli_query($con,$update_pass);
        echo "<script>alert('Your password is updated successfully')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
		}
	
	}




?>