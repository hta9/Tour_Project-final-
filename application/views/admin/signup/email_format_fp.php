<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	.button {
  background-color: #ccccb3;
  border: 1px solid black;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}

.button:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<table>
	
		<tr>
			 <td>
				<h4> Hi <b><?php echo strstr(ucwords($email), '@', true);?>,</b></h4>

			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td>
				You Recently Requested to Reset Your Password for Your <b>Reddy Tours</b> Account.Click Below Link To Reset Password.
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>

		<tr>
				
		<td>
			<a class="button" href="<?php echo site_url('admin/signup/change_password'); ?>">Reset Your Password </a>
		</td>
		</tr>

		<tr></tr>
		<tr></tr>
		<tr>
		<td>If You did not Request Password Reset, Simple Ignore This Email.  </td>
	</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
		<td>Thanks,
			<br>
			 <b>Reddy Tours</b>
		</td>
		</tr>

</table>
</body>
</html>