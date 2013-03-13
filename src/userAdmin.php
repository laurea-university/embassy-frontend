<?php 
include 'db.php';
include 'utils.php';
hasAccess('');
require_once "header.php";

	function boolString($bValue = false) {
		return ($bValue ? 'true' : 'false');
	}
		
	$con=mysqli_connect("localhost","root","","embassy");					//TODO
			// Check connection
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL: " . mysqli_connect_error();		//TODO
			
?>
<body>
<?php require_once "top_bar.php" ?>

     <div class="content">
		<div class="banner">
                <div class="logoSlovenia"><img src="images/slovenia.png" style="padding-top : 5px" /></div>
                <div class="logoFlag"><img src="images/banner.jpg" /></div>
        </div>
			
        <?php require_once "menu.php"; ?>
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
						$result = mysqli_query($con,"SELECT * FROM user");		//TODO
						while($row = mysqli_fetch_array($result))				//TODO
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
							echo "<td><a class='btn' href='#' onclick='deleteUser(".$row['id'].", \"./ajax/userGestion.php\", \"delete\");'><i class='icon-remove'></i></a></td>";
							echo "</tr>";
						  }
						mysqli_close($con);									//TODO
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
<?php require_once "footer.php"; /* footer */ ?>
        </div>
		<script src="./js/ajaxRequest.js"></script>
<?php require_once "inc_script.php"; ?> <!-- load all script -->
    </body>
</html>