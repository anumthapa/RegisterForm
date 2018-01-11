<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php  include 'form1_css.html';?>
<body>
	<div class ="form">
		<ul class="tab-group">
			<li class="tab"><a href="#signup">SignUp</a></li>
			<li class="tab-active"><a href="#login">LogIn</a></li>
		</ul>

		<div class="tab-contain">
			<div id="login">
				<h1>WELCOME</h1>

		<form action ="form1.php" method="post" autocomplete="off">
			<div class="field-wrap">
				<label>
					Email Adress<span class="req">*</span>
				</label>
				<input type="email" required autocomplete="off" name="email">
			</div>		

			<div class="field-wrap">
				<label>
				  Password <span class="req">*</span>
				</label>
				<input type="password" required autocomplete="off" name="password">
			</div>	
			<p class="forget"><a href="#">Forget Password?</a></p>
			<button class="button button-block" name="login">Log In</button>
		</form>
			</div>

			<div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
</div>
</body>
</html>