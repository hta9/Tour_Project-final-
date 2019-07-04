<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/'); ?>favicon-32x32" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
	<link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet" />
	
	<!-- Validations -->
	 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
 	 <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.js"></script>
 	 <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"></script>
 	 <script type="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/additional-methods.js"></script>
 	 <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/additional-methods.min.js"></script>

	<!-- End: Validations -->

  <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />

  <!-- sweet alert end -->

    <title>Reddy</title>

      <style type="text/css">
  		
  		.error
  		{
  			color: red !important;
  		}

  </style>

  </head>
  <body>
	<div class="login-register d-flex">
		<div class="login-register-l">
			<a href=""><img src="<?php echo base_url('assets/'); ?>images/logo-white.png" alt=""/></a>
		</div>
		
<?php  
              if (!empty($display))
                  {
                  	echo $display;
                  }
                  else
                  {
                  	base_url();
                  }

?>


	</div>
	<footer class="footer">
		<a href="">Term of use. Privacy policy</a>
	</footer>    

  </body>
</html>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



