<?php 
include '../db.php';
include '../utils.php';
hasAccess('../');
?>

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
	
<?php

	headerHtml('../');

	function boolString($bValue = false) {
		return ($bValue ? 'true' : 'false');
	}
		
	$con=mysqli_connect("localhost","root","","embassy");
			// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
			
?>
		
		<div>
			<form>
			<table id='myTable' class="table table-striped">
				<thead>
					<tr>
						<td>Username</td>
						<td>Mail</td>
						<td>Admin</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
						$result = mysqli_query($con,"SELECT * FROM user");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<tr id="row'.$row['id'].'">';
							echo "<td>";
								echo '<input class="input-small" type="text" value="'.$row['login'].'">';
							echo "</td>";
							echo "<td>";
								echo '<input type="text" value="'.$row['mail'].'">';
							echo "</td>";
							echo "<td>";
								echo '<input type="text" value="'.boolString($row['admin']).'">';
							echo "</td>";
							echo "<td><a class='btn' href='#' onclick='deleteUser(".$row['id'].", \"../ajax/userGestion.php\", \"delete\");'><i class='icon-remove'></i></a></td>";
							echo "</tr>";
						  }

						mysqli_close($con);
					?>
				</tbody>
			</table>
			<a class='btn' href='#' onclick='adduserRow();'><i class='icon-plus-sign'></i></a>
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