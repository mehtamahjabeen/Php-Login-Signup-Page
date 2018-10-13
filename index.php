<!DOCTYPE html>
<html>

 <!-- Custom styles for this template -->
 
<head>
<link href="Css/style.css" rel="stylesheet">
    <title>
        login page
    </title>
</head>
<body style="background-color: #00bfff6b;">

	<div class="Heading">
		<div class="container">
		  <div class="row">
                <div class="col text-center">
                    <div id="Head">
                        <h2><b>Get Your Membership </b></h2>
                    </div>

                </div>
            </div>
			<div class="row">
                <div class= "Forms">
				<!-- Sign Up-->
				<div col-lg-6 mb-6 id="SignUp">
                <h3><b>Register Today!</b></h3>
                <form class="contact-form" action = 'SignUp.php' method ="POST" >
                <h4>Full Name<input type = 'text' name = 'fullname' placeholder="Full Name"></h4>    
                <h4>Username<input type = 'text' name = 'username' placeholder="Username"></h4>
                <h4>Password  <input type = 'password' name = 'password' placeholder="Password"></h4>
                <input type = 'submit' value = 'Sign Up'>
    </form>	
				</div>
                <!-- /Sign Up-->
                
                <!-- Sign In-->
				<div col-lg-6 mb-6 id="SignIn">
                <h3><b>Already Registered?<br> Sign In Now !</b></h3>
                <form class="contact-form" action = 'Login.php' method ="POST" >
                <h4>Username<input type = 'text' name = 'username' placeholder="Username"></h4>
                <h4>Password  <input type = 'password' name = 'password' placeholder="Password"></h4>
         <input type = 'submit' value = 'Sign In'>
    </form>	
				</div>
				<!-- /Sign In-->
			</div></div>
		</div>
	</div>

</body>
</html>