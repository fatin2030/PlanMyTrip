<html lang="en">
<head>
   
    <title>Change Password</title>
</head>
<body>
<center>
	<form method="post" action="../controller/changePassword.php" enctype="">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name ="password" value=""/><br />
						New Password<br />
						<input type="newPassword" name="newPassword" value="" /><br />
						Retype New Password<br />
						<input type="rePassword" name="rePassword" value=""/>								
						<hr />
						<input type="submit" name="submit" value="Change" />     
						<a href="adminHome.php">Home </a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>

    
</body>



</html>