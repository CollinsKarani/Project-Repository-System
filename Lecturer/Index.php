<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Project repository system</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assetsLogin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assetsLogin/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assetsLogin/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assetsLogin/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assetsLogin/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
      <style>
      .required,.error{
          color: #FF0000;
      }

      </style>
	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>

									<span class="red"MMUST</span>
									<span class="white" id="id-text2">PROJECT REPOSITORY</span>
								</h1>

							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">

												Please Enter Your Information
											</h4>

											<div class="space-6"></div>
                                                <?php
   //	session_start();
	require_once ('inc/connect.php');

	if(isset($_POST['btn-login']))
	{
		$user_number = trim($_POST['RegNo']);
	   	$user_password = trim($_POST['password']);
	  // $password = md5($user_password);

		try
		{

			$stmt = $conn->prepare("SELECT * FROM login_tbl WHERE Username=:RegNo");
			$stmt->execute(array(":RegNo"=>$user_number));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();

			if($row['password']==$user_password){

                 if($row['role_id']==1){
                 $_SESSION['admin_session'] = $row['username'];
                 $_SESSION['role'] = $row['role_id'];
                 header("Location: admin/administration.php");
                 }
                 else if($row['role_id']==2){
                     $_SESSION['staff_session'] = $row['username'];
                      $_SESSION['role'] = $row['role_id'];
                      header("Location: Lecturer/Lecturer.php");
                 }
                   else if($row['role_id']==3){
                     $_SESSION['user_session'] = $row['username'];
                      $_SESSION['role'] = $row['role_id'];
                      header("Location: student/dashboard.php");
                 }

			}
			else{


				echo '<div class="alert alert-danger"><strong>Sorry!!</strong> &nbsp; Wrong Details Entered. </div>'; // wrong details
			}

		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>
										   	<form class="form-signin" method="post" id="">
												<fieldset>
                                                 <div id="error">
                                              <!-- error will be shown here ! -->
                                                  </div>
                                                   <div class="space-4"></div>
													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input type="text" class="form-control" placeholder="Username" name="RegNo" id="RegNo" autocomplete="off" />
															<i class="ace-icon fa fa-user"></i>
														</span>

													</label>

                                                    	<label class="block clearfix">
                                                           <span class="block input-icon input-icon-left">
															<input type="password" class="form-control" placeholder="Password" name="password" id="password" autocomplete="off" id="password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                                        </label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-left">

														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary" name="btn-login" id="btn-login">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
                                            <div class="social-or-login center">
												<span class="bigger-110"><strong>Already have an account?</strong> <a href="Registration.php"><strong>Create Account</strong></a></span>
											</div>

											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="space-6"></div>

											<div class="social-login center">
												<a class="btn btn-primary">
													<i class="ace-icon fa fa-facebook"></i>
												</a>

												<a class="btn btn-info">
													<i class="ace-icon fa fa-twitter"></i>
												</a>

												<a class="btn btn-danger">
													<i class="ace-icon fa fa-google-plus"></i>
												</a>
											</div>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">

												</a>
											</div>

											<div>
                                                <a href="#" data-target="#signup-box" class="user-signup-link">

												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->


							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assetsLogin/js/jquery.2.1.1.min.js"></script>
        <script type="text/javascript" src="validation.min.js"></script>
         <script type="text/javascript" src="script.js"></script>
		<!-- <![endif]-->
        <script type="text/javascript" src="assetsLogin/js/login.js"></script>
		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});



		</script>
	</body>
</html>
