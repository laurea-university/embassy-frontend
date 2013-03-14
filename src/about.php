<?php

$con = connexion();

$category = new Category($con);
$result = $category->getAllCategory(); 
?>
<h1>Search by Categories</h1>


<div class="leftSide">
    <ul style="list-style-type: none;margin-top : 10px ">
        <?php 
        while($row = mysqli_fetch_array($result))
						  {
            
        ?><li><input type="checkbox" oncheck="searchResultByCategory('<?php echo $row['id']?>')" name="<?php echo $row["name"]?>" value="<?php echo $row["id"]?>" /><span style="margin-left:  7px"> <?php echo $row["name"]?></span></li><?php
            
        }?>
    </ul>
    
</div>
<div class="rightSide">
		<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table_jui.css";
			@import "./themes/smoothness/jquery-ui-1.8.4.custom.css";
		</style>

<div class="demo_jui">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>Finnish company</th>
			<th>Slovenian company</th>
		</tr>
	</thead>
	<tbody class="contents">
		<tr>
			<td >Trident</td>
			<td>Internet</td>
		</tr>
		<tr>
			<td>Trident</td>
			<td>Internet</td>
		</tr>
		<tr >
			<td>Trident</td>
			<td>Internet</td>
		</tr>
		<tr >
			<td>Trident</td>
			<td>Internet</td>
		</tr>
		<tr >
			<td>Trident</td>
			<td>Internet Explorer 7</td>
		</tr>
		<tr >
			<td>Trident</td>
			<td>AOL browser (AOL desktop)</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Firefox 1.0</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Firefox 1.5</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Firefox 2.0</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Firefox 3.0</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Camino 1.0</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Camino 1.5</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Netscape 7.2</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Netscape Browser 8</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Netscape Navigator 9</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilla 1.0</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilla 1.1</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilla 1.2</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilla 1.3</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilla 1.4</td>
		</tr>
		<tr >
			<td>coucouo</td>
			<td>Mozilla 1.20</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilla 21.1</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilla 41.2</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilla1.3</td>
		</tr>
		<tr >
			<td>Gecko</td>
			<td>Mozilllol 1.4</td>
		</tr>
	</tbody>
</table>
		</div>