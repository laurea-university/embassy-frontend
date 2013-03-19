<?php 
include 'db.php';
include 'utils.php';
hasAccess('');
require_once "header.php";

	function boolString($bValue = false) {
		return ($bValue ? 'true' : 'false');
	}
		
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
			<form action='insertUser.php' method='post'>
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
						$sql = 'SELECT * FROM `user`';
						$res = $db->query($sql);
						while($row = $res->fetch())
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
							echo "<td><a class='btn' onclick='deleteUser(".$row['id'].", \"./ajax/userGestion.php\", \"delete\");'><i class='icon-remove'></i></a></td>";
							echo "</tr>";
						  }
						$res->closeCursor(); 
					?>
				</tbody>
			</table>
			<a class='btn' onclick='adduserRow();'><i class='icon-plus-sign'></i></a>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<a href="index.php"><button type="button" class="btn">Cancel</button></a>
			</div>
			</form>
		</div>
<?php require_once "footer.php"; /* footer */ ?>
        </div>
		<script src="./js/ajaxRequest.js"></script>
<?php require_once "inc_script.php"; ?> <!-- load all script -->
    </body>
</html>