<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reddy</title>
  </head>
  <body>
	
		<div class="login-register-r">
			<div class="login-register-title">
				<h2>Don’t Panic!</h2>
				<h6>Help Is On The Way, Just Give Us Your Email Address</h6>
			</div>	
			<form id="form_validate" method="post" action="<?php echo site_url('admin/signup/forgot_password');?>">
				
				<div class="field ml-auto">
					<input type="text" name="email" id="email" placeholder="Insert Your Email">
					<label for="email">Insert Your Email</label>
				</div>
				<div class="login-register-btn d-flex">
					<button type="submit" class="btn m-auto">Reset Password</button>
				</div>
				<div class="btm-option">
					<a href="">Already Have An Account? Sign In.</a>
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
	    			email:
	    			{
	    				required:true,
	    				email :true,
	    				remote: {
									url: "<?php echo site_url('admin/signup/is_registered'); ?>",
									type: "post"
				 				}
	    			}
        		},
        		messages:
        		{
        			email:
        			{
        				required:"This Field is Required.",
        				email : "Invalid Email ID.",
        				remote: "Please Enter Your Registered Email ID."
        			}
        		}

				});

		});
	</script>

