<?php 
include 'db.php';
include "utils.php";
require_once "header.php";
include "popup_infos.php";
autoload();
hasAccess();
?>
<html>
	<body>
        <?php require_once "top_bar.php" ?>

        <div class="content">
			<div class="banner">
					<div class="logoFlag"><img src="images/banner.jpg" /></div>
			</div>
			<script type="text/javascript">
			
			$(document).ready(function() {
 
			 $('#example').dataTable( {
					"bPaginate": false,
					"bStateSave": true
				} );
			 
				/* Init DataTables */
				var oTable = $('#example').dataTable();
				  
				/* Apply the jEditable handlers to the table */
				oTable.$('td').editable( './userAdmin_js.php', {
					"callback": function( sValue, y ) {
						var aPos = oTable.fnGetPosition( this );
						oTable.fnUpdate( sValue, aPos[0], aPos[1] );
						window.location.reload();
					},
					"submitdata": function ( value, settings ) {
						return {
							"row_id": this.parentNode.getAttribute('id\'),
							"column": oTable.fnGetPosition( this )[2]
						};
					},
					"height": "14px",
					"width": "100%"
				} );
			} );
			 
			</script>
			<?php require_once "menu.php"; ?>
			<div>
				<table cellpadding="0" cellspacing="0" border="0" class="display" id='example' class="table table-striped">
					<thead>
						<tr>
							<td>Username</td>
							<td>Password</td>
							<td>Mail</td>
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
								echo "<td>".$row['login']."</td>";
								echo "<td></td>";
								echo "<td>".$row['mail']."</td>";
								echo "<td><a class='btn' onclick='deleteUser(".$row['id'].", \"./ajax/userGestion.php\", \"delete\");'><i class='icon-remove'></i></a></td>";
								echo "</tr>";
							  }
							$res->closeCursor();
						?>
					</tbody>
				</table>
			</div>
		<?php require_once "footer.php"; /* footer */ ?>
        </div>
		<script src="./js/ajaxRequest.js"></script>
	<?php require_once "inc_script.php"; ?> <!-- load all script -->
    </body>
</html>