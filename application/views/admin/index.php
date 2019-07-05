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
		<link href="<?php echo base_url('assets/'); ?>css/jquery.mCustomScrollbar.css" rel="stylesheet" />
		<link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet" />

		<title>Reddy</title>
	</head>
	<body>

<?php 

	$uri = $this->uri->segment(3);


 ?>
		<div class="dashboard-wrap d-flex">
			<div class="dashboard-l">
				<div class="logo"><a href=""><img src="<?php echo base_url('assets/'); ?>images/logo.svg" alt="" /></a></div>
				<div class="create-tour"><a href="">Create New Tour</a></div>
				<div class="navigation">
					<ul>
						<li class="dashboard-nav <?php if($uri=='') echo "active" ?>">
							<a href="<?php echo site_url('admin/dashboard'); ?>">
								<span></span> <strong>Dashboard</strong>
							</a>
						</li>

						<li class="notification-nav <?php if($uri=='notifications') echo "active" ?>">
							<a href="<?php echo site_url('admin/dashboard/notifications'); ?>">
								<span></span><strong>Notifications</strong>
							</a>
						</li>

						<li class="tours-nav <?php if($uri=='my_tours') echo "active" ?>">
							<a href="<?php echo site_url('admin/dashboard/my_tours'); ?>">
								<span></span> <strong>My Tours</strong>
							</a>
						</li>

						<li class="finances-nav <?php if($uri=='finances') echo "active" ?>">
							<a href="<?php echo site_url('admin/dashboard/finances'); ?>">
								<span></span><strong>Finances</strong>
							</a>
						</li>

						<li class="marketing-nav <?php if($uri=='marketing') echo "active" ?>">
							<a href="<?php echo site_url('admin/dashboard/marketing'); ?>">
								<span></span><strong>Marketing</strong>
							</a>
						</li>

						<li class="setting-nav <?php if($uri=='settings') echo "active" ?>">
							<a href="<?php echo site_url('admin/dashboard/settings'); ?>">
								<span></span> <strong>Settings</strong>
							</a>
						</li>

						<li class="help-nav <?php if($uri=='help') echo "active" ?>">
							<a href="<?php echo site_url('admin/dashboard/help'); ?>">
								<span></span> <strong>Help</strong>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="dashboard-r ftr-none">
				<div class="right-header">
					<a href="<?php echo site_url('admin/signup/logout'); ?>" class="btn">LOG OUT</a>
				</div>

				<div class="right-title">
					<?php 
						
						$login_data = fetch_session('login_data');

						if(strstr($login_data, '@', true))
						{
							$email = explode('@',$login_data);
							$email = $email['0'];
						?>
							<h2><span>Hi,</span><?php echo ucwords($email); ?></h2>
						<?php
						}
						else
						{
							?>
							<h2><span>Hi,</span><?php echo ucwords($login_data); ?></h2>
							<?php
						}
					 ?>
					
					<h6>This Is Your Dashboard.</h6>
				</div>

				<?php 

					if(!empty($display))
					{
						echo $display;
					}
					else
					{
						echo base_url();
					}
				 ?>
		
				<div class="right-footer"></div>
			</div>
		</div>
		<footer class="footer">
			<a href="<?php echo site_url('admin/signup/privacy_policy'); ?>">Term of use. Privacy policy</a>
		</footer>    

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="<?php echo base_url('assets/'); ?>js/jquery.mCustomScrollbar.min.js"></script>
		<script src="<?php echo base_url('assets/'); ?>js/custom.js"></script>
	</body>
</html>