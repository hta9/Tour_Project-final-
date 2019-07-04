<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/'); ?>favicon-32x32" sizes="32x32" />

    <title>Reddy</title>

  </head>
  <body>
	
		<div class="login-register-r">
			<div class="login-register-title">
				<h2>Welcome Back! </h2>
				<h6>Please Login To Your Account</h6>
			</div>	
			<form id="form_validate" method="post" >

				<div class="field">
					<input type="text" name="login" id="login" value="<?php if (get_cookie('login')) { echo get_cookie('login'); } ?>" placeholder="Username Or Email">
					<label for="login">Username / Email</label>
				</div>

				<div class="field">
					<input type="password" name="password" value="<?php if (get_cookie('password')) { echo get_cookie('password'); } ?>" id="password" placeholder="Password">
					<label for="password">Password</label>
				</div>

				<div class="remember-password d-flex">

					<div class="remember-me">
						<input type="checkbox" id="test2" name="remember" 
						<?php 
						if (get_cookie('login')) 
						{ 
						?> 
							checked="checked"  

						<?php 
						}
					?>>

						<label for="test2">Remember me</label>
					</div>

					<a class="ml-auto" href="<?php echo site_url('admin/signup/forgot_password'); ?>">Forgot Password</a>

				</div>

				<div class="login-register-btn d-flex">
					<button type="submit" class="btn mr-auto" id="btn_submit" name="btn_submit">Login</button>
					<button type="button" class="btn ml-auto" onclick="location.href='<?php echo site_url('admin/signup/register'); ?>'">Sign Up</button>
				</div>
			</form>
		</div>
	   

  </body>
</html>

	<script type="text/javascript">
		
		$(document).ready(function($) {
			

			$("#form_validate").validate({

       			 // for check form validations
       			rules:
        		{

        			login:
        			{
        				required:true
        			
        			},
        		
           		    password:
           		    {
           		    	required:true
           		    }
        		},
        		messages:
        		{
        			login:
        			{
        				required:"This Field is Required."
        			},
        			password:
        			{
        				required:"This Field is Required."
        			}
        	
        		}

	
				});

					
				$('#btn_submit').click(function(event) 
				{
					event.preventDefault();

					var login = $('#login').val();
					var password=$('#password').val();
				
					

					if ($('#test2').is(':checked')) 
					{
						$('#test2').val('1');
					}	
					else
					{
						
						$('#test2').val('0');
					}

					var remember = $('#test2').val();


					$.ajax({
						url: '<?php echo site_url('admin/signup/login'); ?>',
						type: 'POST',
						data: 
						{
							login: login,
							password:password,
							remember:remember
						},
						success:function(data)
						{
							if(data=='false')
							{
								swal("Invalid Id or Password");
								return false;
							}
							else
							{
								window.location = '<?php echo site_url('admin/signup/register') ?>'
							}

						}
					})
					
					
				});

		});
	</script>

 



