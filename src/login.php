<?php 
include 'db.php';
include 'utils.php';
if (isset($_SESSION[SESSION_PREFIX.'id']))
	header("Location: index.php");
require_once "header.php";
 ?>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

  <body>
        <?php require_once "top_bar.php" ?> <!-- top bar -> fixed -->

        <div class="content">

            <div class="banner">

                <div class="logoSlovenia"><img src="images/slovenia.png" style="padding-top : 5px" /></div>
                <div class="logoFlag"><img src="images/banner.jpg" /></div>

            </div>
            <?php require_once "menu.php" ?>
			<BR/>
			<div class="container">
			  <form  method="post" class="form-signin" action="identification.php">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="text" name="mail" class="input-block-level" placeholder="Email address">
				<input type="password" name="passwd" class="input-block-level" placeholder="Password">
				<label class="checkbox">
				  <input type="checkbox" name="remember" checked="checked" value="remember-me"> Remember me
				</label>
				<button class="btn btn-large btn-primary" type="submit">Sign in</button>
				<span style="float:right">Not register ? Click <a>here</a></span>
			  </form>
			</div>
			<BR/><BR/>
		<?php require_once "footer.php"; /* footer */ ?>
		</div>
		<?php require_once "inc_script.php"; ?> <!-- load all script -->
    </body>
</html>