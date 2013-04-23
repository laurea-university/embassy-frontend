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
					<div class="logoSlovenia"><img src="images/slovenia.png" style="padding-top : 5px" /></div>
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
				oTable.$('td').editable( './admin_js.php', {
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
							<td>Company Name</td>
							<td>Info</td>
							<td>Location</td>
							<td>Contact</td>
							<td>Website</td>
							<td>Phone</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = 'SELECT country.country, company.* FROM `company` LEFT JOIN country ON company.location=country.id_country ORDER BY name';
							$res = $db->query($sql);
							while($row = $res->fetch())
							  {
								echo '<tr id="row'.$row['id'].'">';
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['info']."</td>";
								echo "<td>".$row['country']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['website']."</td>";
								echo "<td>".$row['phone']."</td>";
								echo "<td><a class='btn' onclick='deleteUser(".$row['id'].", \"./ajax/adminGestion.php\", \"delete\");'><i class='icon-remove'></i></a></td>";
								echo '</tr>';
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