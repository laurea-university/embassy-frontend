<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Embassy of Slovenia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="../bootstrap-2.3.0/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }

        </style>
        <link href="../bootstrap-2.3.0/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../bootstrap-2.3.0/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../bootstrap-2.3.0/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../bootstrap-2.3.0/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../bootstrap-2.3.0/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../bootstrap-2.3.0/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../bootstrap-2.3.0/ico/favicon.png">
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visas <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">News & Events <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Business <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-form pull-right">
                            <a title="Facebook" href="http://www.facebook.com/slovenia.usembassy?v=wall" target="_blank">
                                <img  alt="Facebook" title="Facebook" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_facebook.jpg" /></a>


                            <a title="Slocast" href="http://www.slocast.si/" target="_blank" style="margin-right : 10px">

                                <img  alt="Slocast" title="Slocast" src="http://photos.state.gov/libraries/slovakia/328671/social-media/slocast-20.jpg" >
                            </a>
                            <a title="Twitter" href="http://twitter.com/USEmbassySLO" target="_blank" style="margin-right : 10px">

                                <img  alt="Twitter" title="Twitter" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_twitter.jpg" >
                            </a>
                            <a title="YouTube" href="http://www.youtube.com/user/USEmbassyLjubljana" target="_blank" style="margin-right : 10px">

                                <img alt="YouTube" title="YouTube" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_youtube.jpg" >
                            </a>
                            <a class="btn" href="../login.php">Sign in</a>
                        </div>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
		
		<?php
		
			$con=mysqli_connect("localhost","root","","embassy");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			
		?>
		
		<div>
			<form>
			<table class="table table-striped">
				<thead>
					<tr>
						<td>Company Name</td>
						<td>Info</td>
						<td>Location</td>
						<td>Staff</td>
						<td>Website</td>
						<td>Phone</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
						$result = mysqli_query($con,"SELECT * FROM company");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo "<tr>";
							echo "<td>";
								echo '<input class="input-small" type="text" value="'.$row['name'].'">';
							echo "</td>";
							echo "<td>";
								echo '<input type="text" value="'.$row['info'].'">';
							echo "</td>";
							echo "<td>";
								echo '<input type="text" value="'.$row['location'].'">';
							echo "</td>";
							echo "<td>";
								echo '<input type="text" value="'.$row['staff'].'">';
							echo "</td>";
							echo "<td>";
								echo '<input type="text" value="'.$row['website'].'">';
							echo "</td>";
							echo "<td>";
								echo '<input type="text" value="'.$row['phone'].'">';
							echo "</td>";
							echo "<td><a class='btn' href='#' onclick='deleteUser(".$row['id'].", \"../ajax/adminGestion.php\", \"delete\");'><i class='icon-remove'></i></a></td>";
							echo "</tr>";
						  }

						mysqli_close($con);
					?>
				</tbody>
			</table>
			<a class='btn' href='#'><i class='icon-plus-sign'></i></a>
			</form>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<button type="button" class="btn">Cancel</button>
			</div>
		</div>

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../js/ajaxRequest.js"></script>
        <script src="../bootstrap-2.3.0/js/jquery.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-transition.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-alert.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-modal.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-dropdown.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-scrollspy.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-tab.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-tooltip.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-popover.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-button.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-collapse.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-carousel.js"></script>
        <script src="../bootstrap-2.3.0/js/bootstrap-typeahead.js"></script>
	</body>
</html>