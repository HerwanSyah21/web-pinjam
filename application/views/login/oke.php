<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Login Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Registration / Login form Responsive Widget, Login forms,Flat Pricing tables,Flat Drop downs  Sign up Web forms, Login sign up Responsive web Forms," />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom CSS -->
<link href="<?=base_url('/assets/login/') ?>css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS --><!--
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">-->
<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

<!--font CSS-->
<script src="<?base_url('/assets/login/') ?>js/jquery2.0.3.min.js"></script>
</head>
<body class="dashboard-page">
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>login</h2>
					</div>
					<div id="message">
		              <?php 
		                 echo $this->session->flashdata('message');
		              ?>
		            </div>
					<div class="panel panel-widget agile-validation">
						<div class="validation-grids validation-grids login-form">
							<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
								<div class="form-body form-body-info">
									<form data-toggle="validator" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
										<div><br><br>
											<div class="form-group has-feedback">
												<input type="text" class="form-control" name="username" placeholder="Masukkan Username" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											</div>
											<div class="form-group">
												<input type="password" data-toggle="validator" class="form-control" id="Masukkan Password" name="password" placeholder="Password" required="">
											</div>
											<?php
													if ($this->session->flashdata('login') == TRUE): ?>
														<div role="alert" class="alert alert-success alert-dismissible fade in">
															<p style="color: red"><?php echo $this->session->flashdata('login') ?></p>
														</div>
													<?php endif;?>
											<div class="bottom">
												<div class="form-group">
													<button type="submit" class="btn btn-primary">Login</button>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"> </div>
				</div>
		</div>
	</div>
				<!-- //validation -->
	</div>
	</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2019 Login . All Rights Reserved</p>
		</div>
		<!-- //footer -->
		<!-- input-forms -->
		<script type="text/javascript">
		 function time() {
		     $("#message").fadeOut();
		 }
		  setInterval(time,3000); 
		</script>
				
		<script type="text/javascript" src="<?base_url('/assets/login/') ?>js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="<?base_url('/assets/login/') ?>js/validator.min.js"></script>
		<!--//validator js-->
</body>
</html>
