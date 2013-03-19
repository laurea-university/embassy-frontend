<?php 
include 'db.php';
include 'utils.php';
hasAccess('');
require_once "header.php";
?>
<body>

        <?php require_once "top_bar.php" ?>

        <div class="content">
            <div class="banner">
                <div class="logoSlovenia"><img src="images/slovenia.png" style="padding-top : 5px" /></div>
                <div class="logoFlag"><img src="images/banner.jpg" /></div>
            </div>
			
        <?php require_once "menu.php";?>
			<form>
			<table id='myTable' class="table table-striped">
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
						$sql = 'SELECT * FROM `company`';
						$res = $db->query($sql);
						while($row = $res->fetch())
						  {
						  	echo '<tr id="row'.$row['id'].'">';
							echo "<td>";
								echo '<input class="input-small" type="text" value="'.$row['name'].'">';
							echo "</td>";
							echo "<td>";
								echo '<textarea type="text">'.$row['info'].'</textarea>';
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
							echo "<td><a class='btn' onclick='deleteUser(".$row['id'].", \"./ajax/adminGestion.php\", \"delete\");'><i class='icon-remove'></i></a></td>";
							echo "</tr>";
						  }
						$res->closeCursor();
					?>
				</tbody>
			</table>
			<a class='btn' onclick='addRow();'><i class='icon-plus-sign'></i></a>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<a href="index.php"><button type="button" class="btn">Cancel</button></a>
			</div>
			</form>
<?php require_once "footer.php"; /* footer */ ?>
        </div>
		<script src="./js/ajaxRequest.js"></script>
<?php require_once "inc_script.php"; ?> <!-- load all script -->
    </body>
</html>