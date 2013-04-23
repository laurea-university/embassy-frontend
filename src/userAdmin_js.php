<?php
include 'db.php';

$rawdata    = $_POST;
$table		= 'user'
$query      = "show columns from $table";
$result = $db->query($query);

$fields     = array();
while ($row = $result->fetch())
{
            $feldname = $row['Field'];
            array_push($fields, $feldname);
}

$id             = $rawdata['row_id'];
$value          = $rawdata['value'];
$column         = $rawdata['column'];

$column         = $column + 1;

$fieldname      = $fields[$column];

$value = utf8_decode($value);
 
$query  = "update $table set $fieldname = '$value' where id = '$id'";
$result = $db->query($query);

if (!$result) { echo "Update failed"; }
else          { echo "UPD: $value"; }
 
$res->closeCursor();
?>