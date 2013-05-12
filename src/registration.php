  <body>
    <div class="container">
      <div class="offset4">
        <br/><h1>Registration:</h1><br>
      </div>
      <!-- Registration form -->
      <div class="container" style="margin-left: 100px">
	  <?php 
if(isset($_POST["regUsrname"], $_POST["regEmail"], $_POST["regPwd"], $_POST["regVerif"])
		&& !empty($_POST["regUsrname"]) && !empty($_POST["regEmail"]) && !empty($_POST["regPwd"]) && !empty($_POST["regVerif"]))
{
	$user = $_POST["regUsrname"];
	$mail = $_POST["regEmail"];
	$passwd = $_POST["regPwd"];
	if (VerifyLogin($user, $db) == TRUE && VerifyMail($mail, $db) == TRUE)
	{
		 if($passwd==$_POST["regVerif"])
			{
			$res = $db->prepare("insert into user (login,mail,passwd) values (:login, :mail, :passwd)");
			$res->execute(array('login'=>$user,
								'mail'=>$mail,
								'passwd'=>SHA1($passwd)));
														
			echo "<br/><h3 class='text-success'>You have registered sucessfully ! <br/> A mail will be send into your mailbox.</h3><br/>";
			//mail($mail, "Welcome to DbEmbassy", "Hi dear $user,\n Welcome to our website, and feel free to visit us regularly to see our new companies which have registred.\n Your password is $passwd");
			echo "<br/><h4 class='text-info'>You will now be redirected to the login page !</h4><br/>";
			header("Refresh: 5;URL=index.php?page=login.php");
			}
		else
		{
		 echo "<br/><h3 class='text-error'> ERROR ! Passwords doesnt match !</h3><br/>";
		 echo "<br/><h4 class='text-info'>You will now be redirected to the registration page !</h4><br/>";
		 header("Refresh: 5;URL=index.php?page=registration.php");
		}
	}
	else
	{
		echo "<br/><h3 class='text-error' > ERROR ! Login, email or company name already used !</h3><br/>";
		echo "<br/><h4 class='text-info'>You will now be redirected to the registration page !</h4><br/>";
		header("Refresh: 5;URL=index.php?page=registration.php");
	}

}
else
{
				?>
	  
       <form ACTION="index.php?page=registration.php" class="form-signin" METHOD="post">
            <div>
                <div>
                    <h4>Login Informations:</h4><br>
                    <input type="text" placeholder="Username" name="regUsrname">
                    <input type="text" placeholder="Email" name="regEmail">
                    <input type="password" placeholder="Password" name="regPwd">
                    <input type="password" placeholder="Password verification" name="regVerif">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-large btn-primary">Send</button>
            </div>
        </form>

<?php } ?>
		
      </div>
    </div>
    <!-- javascript
    ================================================== -->
    <script src="./bootstrap-2.3.0/js/html5shiv.js"></script>
    <script src="./bootstrap-2.3.0/js/jquery.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-transition.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-alert.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-modal.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-dropdown.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-scrollspy.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-tab.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-tooltip.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-popover.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-button.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-collapse.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-carousel.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-typeahead.js"></script>
  </body>
</html>
