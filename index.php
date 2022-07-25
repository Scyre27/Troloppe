<?php
	require('includes/connection.inc.php');
	require('includes/functions.inc.php');
	
	$msg="";
	
	if(isset($_POST['submit'])) {
	    
		$email=get_safe_value($con,$_POST['email']);
		$password=get_safe_value($con,$_POST['password']);
		$sql="select * from users where Email='$email' and UPassword='$password'";
		
		$res=mysqli_query($con,$sql);
		$count=mysqli_num_rows($res);
		
		if($count>0)
		{
			$row=mysqli_fetch_assoc($res);
			if($row['status']=='0')
			{
				$msg="Account deactivated";	
			}
			else
			{
				$_SESSION['ADMIN_LOGIN']='yes';
				$_SESSION['ADMIN_ID']=$row['UserId'];
				$_SESSION['ADMIN_USERNAME']=$email;
				$_SESSION['ADMIN_ROLE']=$row['role'];
				header('location:dashboard.php');
				die();
			}
		}
		else
		{
			$msg="PLEASE ENTER CORRECT LOGIN DETAILS";	
		}
	}
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from troloppe.ahsankesrani.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 07:43:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Troloppe | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='assest/images/logo.png' />


</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <h3>Login</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(assest/images/3.jpg);">
                        </div>
                        <div class="login-wrap p-4">
                            <div class="d-flex">
                                <div class="w-100">
                                    <img src="assest/images/logo.png" class="img-fuild">
                                    <h5>Sign in to your account</h5>
                                </div>
                                
                            </div>
							<br/>
							<div class="field_error"><?php echo $msg?></div>
							<!--<form class="card-body" action="https://troloppe.ahsankesrani.com/login-process" method="POST">-->
							<form class="card-body" method="POST">
                                <input type="hidden" name="_token" value="yUyHgN8AQ8w6A4RbU3Lka0h8UP5fVsGhuU3sSNkY">
								<div class="form-group mb-3">
									<input type="email"  class="form-control" name="email" value="" placeholder="Enter email address" required/>
								</div>
                                <div class="form-group mb-3">
                                    <input type="password"  class="form-control" name="password" placeholder="password" required/>
								</div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-100">
                                        <a href="register.php">Don't have an account? Register here</a >
                                    </div>
                                </div>
								<br>
								<p class="w-100">Terms of use . <a href="#">Privacy policy</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.min.html"></script>
    <script src="assets/js/popper.html"></script>
    <script src="assets/js/bootstrap.min.html"></script>
    <script src="assets/js/main.html"></script>

</body>


<!-- Mirrored from troloppe.ahsankesrani.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 07:43:59 GMT -->
</html>
