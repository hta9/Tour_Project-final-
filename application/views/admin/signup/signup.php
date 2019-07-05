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
				<h2>Welcome! </h2>
				<h6>Please Sign Up Here</h6>
			</div>	

			<form method="post" action="<?php echo site_url('admin/signup/register'); ?>" id="form_validate">

				<div class="d-flex first-last-name">

  					<div class="field mr-auto">
  						<input type="text" name="firstname" id="firstname" placeholder="First Name">
  						<label for="firstname">First Name</label>
  					</div>

  					<div class="field ml-auto">
  						<input type="text" name="lastname" id="lastname" placeholder="Last Name">
  						<label for="lastname">Last Name</label>
  					</div>

				</div>

				<div class="field ml-auto">
					<input type="text" name="username" id="username" placeholder="Username">
					<label for="username">Username</label>
				</div>

				<div class="field ml-auto">
					<input type="text" name="email" id="email" placeholder="Email">
					<label for="email">Email</label>
				</div>
	

				<div class="field">
					<input type="password" name="password" class="txtbox_pwd" id="password" placeholder="Password">
					<label for="password">Password</label>
				</div>

				<div>
				  <span class="label password-indicator-label-absolute pwd_strength"></span>
			  </div>

				<div class="field">
					<input type="password" name="confirm_password" id="confirm_password" 
					placeholder="Confirm Password">
					<label for="confirm_password">Confirm Password</label>
				</div>

				<div class="d-flex agree-with">
					<div class="remember-me">
						<input type="checkbox" id="terms" name="terms" value="terms">
						<label for="terms">I Agree With <a href="<?php echo site_url('admin/signup/terms_conditions'); ?>">Terms And Conditions</a></label>
					</div>
				</div>

				<div class="login-register-btn d-flex">
					<button type="submit" class="btn m-auto" >Sign Up</button>
				</div>

				<div class="btm-option">
					<a href="<?php echo site_url('admin/signup/login'); ?>">Already Have An Account? Sign In.</a>
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
        			firstname:
        			{
        				required:true,
        				lettersonly:'#firstname'

        			},
        			lastname:
        			{
        				required:true,
        				lettersonly:'#lastname'

        			},
        			username:
        			{
        				required:true,
        				remote: {
									url: "<?php echo site_url('admin/signup/verify_username'); ?>",
									type: "post"
				 				}
        			},
        			email:
        			{
            			required: true,
            			email 	: true,
            			remote: {
									url: "<?php echo site_url('admin/signup/verify_email'); ?>",
									type: "post"
				 				}
           		    },
           		    password:
           		    {
           		    	required:true,
           		    	maxlength:15,
           		    	minlength:10
           		    },
           		    confirm_password:
           		    {
           		    	equalTo : "#password",
           		    	required: true
           		    },
           		    terms:
           		    {
           		    	required:true
           		    }


        		},
        		messages:
        		{
        			firstname:
        			{
        				required:"This Field is Required."
        			},
        			lastname:
        			{
        				required:"This Field is Required."
        			},
        			username:
        			{
        				required:"This Field is Required.",
        				remote :"This Username is Already Exist."
        			},
        			email:
        			{
        				required:"This Field is Required.",
        				email   :"Enter Valid Email-Address.",
        				remote :"This Email Id is Already Exist."
        			},
        			password:
        			{
        				required:"This Field is Required.",
        				minlength:"Minimum 10 Characters Are Required.",
        				maxlength:"Maximum 15 Characters Are Allowed."
        			},
        			confirm_password:
        			{
        				required:"This Field is Required.",
        				equalTo :"Confirm Password Should Be Same As Password."
        			},
        			terms:
        			{
        				required:"Sorry, You Have To Accept Terms and Condiions!"
        			}
        		}

	
				});

			$.validator.addMethod("lettersonly", function(value, element) {
  				return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
			}, "Letters Only Please.");
		});
	</script>

<script type="text/javascript">

    $(document).on('keyup','#password',function()
    {
        var pass_str = $('#password').val();
        pass_length = pass_str.length;

        if(pass_length<10)
        {
            $('.pwd_strength').css({'background-color':'#F44336','margin-right':'100%','color':'white','border':'1px solid grey'}).html('Weak');
            $('txtbox_pwd').css('border','1px red');

        }

        if(pass_length>=10 && (pass_str.match(/([a-zA-Z])/) || pass_str.match(/([0-9])/)))
        {
            $('.pwd_strength').css('background-color','#2196F3').html('Normal');
        }

        if(pass_length>=10 && pass_str.match(/([a-zA-Z])/) && pass_str.match(/([0-9])/) && pass_str.match(/([!,@,#,$,%,^,&,*,(,),+,?,_,~])/))
        {
            $('.pwd_strength').css('background-color','#00BCD4').html('Good');
        }

        if(pass_length>=10 && pass_str.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/) && pass_str.match(/([0-9])/) && pass_str.match(/([!,@,#,$,%,^,&,*,(,),+,?,_,~])/))
        {
            $('.pwd_strength').css('background-color','#4CAF50').html('Strong');
        }
    });

	    $('#password').focusout(function(event) 
	    {
	    	$('.pwd_strength').hide();
	    });
</script>