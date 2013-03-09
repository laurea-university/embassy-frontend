<?php 
include 'db.php';
if (isset($_SESSION[SESSION_PREFIX.'id']))
	header("Location: index.html");
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./bootstrap-2.3.0/css/bootstrap.css" rel="stylesheet">
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
    <link href="./bootstrap-2.3.0/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./bootstrap-2.3.0/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./bootstrap-2.3.0/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./bootstrap-2.3.0/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./bootstrap-2.3.0/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="./bootstrap-2.3.0/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="./bootstrap-2.3.0/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <form  method="post" class="form-signin" action="identification.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="mail" class="input-block-level" placeholder="Email address">
        <input type="password" name="passwd" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" name="remember" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
		<span style="float:right">Not register ? Click <a>here</a></span>

      </form>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
