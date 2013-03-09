<?php 

include '../db.php';

if (isset($_POST['type'])){
	if ($_POST['type'] == 'delete')
	{
		$res = $db->query("DELETE FROM user WHERE id = ".$_POST['id']);
	}
}
?>