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
				<h6>Please Insert Your New Password</h6>
			</div>	

			<form method="post" action="<?php echo site_url('admin/signup/recover_password'); ?>" id="form_validate">

				<div class="field">
					<input type="password" name="password" id="password" class="txtbox_pwd" placeholder="Password">
					<label for="password">Create New Password</label>
				</div>

				<div>
					<span class="label password-indicator-label-absolute pwd_strength"></span>
				</div>

				<div class="field">
					<input type="password" name="confirm_password" id="confirm_password" placeholder="Re-Enter Password ">
					<label for="confirm_password">Once more… </label>
				</div>

				<div class="login-register-btn d-flex">
					<button type="submit" class="btn m-auto">Log In</button>
				</div>

			</form>
		</div>
	
  </body>
</html>

<script type="text/javascript">
	$(document).ready(function($) 
	{
		$("#form_validate").validate({

   			 // for check form validations
   			rules:
    		{

    			password:
    			{
    				required:true,
    				maxlength:15,
           		    minlength:10
    			
    			},
    			confirm_password:
    			{
    				required:true,
    				equalTo :'#password'
    			}
    		
    		},
    		messages:
    		{
    			password:
    			{
    				required: "This Field is Required",
    				minlength:"Minimum 10 Characters Are Required.",
        			maxlength:"Maximum 15 Characters Are Allowed."
    			},
    			confirm_password:
    			{
    				required:"This Field is Required",
    				equalTo :"Confirm Password Should Be Same As Password."
    			}
    		}

		});

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