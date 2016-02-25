<!-- resources/views/auth/login.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LivingMetaAnalysis - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    </head>
    <body>
        <div id="container">
          <div class="row">
      			<div class="col-md-6 col-md-offset-3">
      				<div class="panel panel-login">
      					<div class="panel-heading">
      						<div class="row">
      							<div class="col-xs-6">
      								<a href="#" class="active" id="login-form-link">Login</a>
      							</div>
      							<div class="col-xs-6">
      								<a href="#" id="register-form-link">Register</a>
      							</div>
      						</div>
      						<hr>
      					</div>
      					<div class="panel-body">
      						<div class="row">
      							<div class="col-lg-12">
      								<form id="login-form" action="/auth/login" method="post" role="form" style="display: block;">
                        {!! csrf_field() !!}
                        <div class="form-group">
      										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="name" value="">
      									</div>
      									<div class="form-group">
      										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
      									</div>
      									<div class="form-group text-center">
      										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
      										<label for="remember"> Remember Me</label>
      									</div>
      									<div class="form-group">
      										<div class="row">
      											<div class="col-sm-6 col-sm-offset-3">
      												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
      											</div>
      										</div>
      									</div>
      									<div class="form-group">
      										<div class="row">
      											<div class="col-lg-12">
      												<div class="text-center">
      													<a href="hr" tabindex="5" class="forgot-password">Reset Password</a>
      												</div>
      											</div>
      										</div>
      									</div>
      								</form>
      								<form id="register-form" action="/auth/register" method="post" role="form" style="display: none;">
                        {!! csrf_field() !!}
                        <div class="form-group">
      										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="name" value="">
      									</div>
      									<div class="form-group">
      										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
      									</div>
      									<div class="form-group">
      										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
      									</div>
      									<div class="form-group">
      										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
      									</div>
      									<div class="form-group">
      										<div class="row">
      											<div class="col-sm-6 col-sm-offset-3">
      												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
      											</div>
      										</div>
      									</div>
      								</form>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      </form>
        </div>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
        <script>
        $(function() {

            $('#login-form-link').click(function(e) {
        		$("#login-form").delay(100).fadeIn(100);
         		$("#register-form").fadeOut(100);
        		$('#register-form-link').removeClass('active');
        		$(this).addClass('active');
        		e.preventDefault();
        	});
        	$('#register-form-link').click(function(e) {
        		$("#register-form").delay(100).fadeIn(100);
         		$("#login-form").fadeOut(100);
        		$('#login-form-link').removeClass('active');
        		$(this).addClass('active');
        		e.preventDefault();
        	});

        });
        </script>
    </body>
</html>
