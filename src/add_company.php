<?php 
$req1 = $db->prepare('SELECT * FROM category');
$req2 = $db->prepare('SELECT * FROM country');
$req1->execute();
$req2->execute();
$category = $req1->fetchAll(PDO::FETCH_ASSOC);
$country1 = $req2->fetchAll(PDO::FETCH_ASSOC);
?>
  <body>
    <div class="container">
      <div class="offset4">
        <br/><h1>Add a new company :</h1><br>
      </div>
      <div class="container" style="margin-left: 100px">
	 
<?php 

if (isset($_POST['name']))
{
	$checker = false;
	if (isset($_POST['name']) && !empty($_POST['name']) && verifCompany($_POST['name'], $db))
	{
		$checker = true;
		$req = $db->prepare('INSERT INTO `embassy`.`company` (`name`, `title`, `info`, `location`, `contact`, `website`, `phone`, `valid`, `mail`) VALUES (:name, :title, :info, :location, :contact, :website, :phone, 1, :mail);');
		$req->execute(array(
							':name' => $_POST['name'],
							':title' => $_POST['title'],
							':info' => $_POST['info'],
							':location' => $_POST['location'],
							':contact' => $_POST['contact'],
							':website' => $_POST['website'],
							':phone' => $_POST['phone'],
							':mail' => $_POST['mail']
							));
		
		$res = $db->prepare('SELECT id FROM company WHERE name = :name');
		$res->execute(array(':name' => $_POST['name']));
		$id_company = $res->fetchAll(PDO::FETCH_ASSOC);
		$id = $id_company[0]['id'];

		$res = $db->prepare('SELECT country FROM `embassy`.country WHERE id_country = '.$_POST['location']);
		$res->execute();
		$countryRes = $res->fetchAll(PDO::FETCH_ASSOC);
		$country = $countryRes[0]['country'];
		
		$req = $db->prepare('INSERT INTO `embassy`.`company_addr` (`id_company`, `address`, `postal_code`, `country`, `valid`) VALUES (:id_company, :address, :postal_code, :country, 0);');
		$tmp = $req->execute(array(
							':id_company' => $id,
							':address' => $_POST['address'],
							':postal_code' => $_POST['postal_code'],
							':country' => $country
							));
													
		$req = $db->prepare('INSERT INTO `embassy`.`link_cat_comp` (`id_category`, `id_company`) VALUES (:id_category, :id_company);');
		$tmp = $req->execute(array(
							':id_category' => $_POST['category'],
							':id_company' => $id
							));
							
	$tok = strtok($_POST['addr_image'], " \n\t");
	$toktab = null;
	while ($tok !== false) 
	{
		$toktab[] = $tok;
		$tok = strtok(" \n\t");
	}	
		if ($toktab != NULL){
			$req = $db->prepare('INSERT INTO `embassy`.`images_company` (`id_company`, `addr_image`) VALUES (:id_company, :addr_image);');
			foreach ($toktab as $val)
			{
				$tmp = $req->execute(array(
									':id_company' => $id,
									':addr_image' => $val
				));
			}
		}
		echo "<br/><h3 class='text-success'>The company as been sucessfully registered !</h3><br/>";
	}
	if (!$checker) 
		echo "<br/><h3 class='text-error'> ERROR ! Please check the existence of the company and filling fields !</h3><br/>";

}
?>
	  
       <form ACTION="index.php?page=add_company.php" class="form-signin" METHOD="post">
			<div class="bs-docs-grid">
				<div class="row-fluid show-grid">
					<div class="span6">
					
						<h3>Category :</h3>
						<select name="category" class="span9">
							<?php
							foreach ($category as $val)
								echo '<option value="'.$val['id_category'].'" >'.$val['name'].'</option>';
							?>
						</select>
					</div>
				</div>
				<div class="row-fluid show-grid">
					<div class="span6 ">
						<h3>Global Information :</h3>
						<div class="bs-docs-grid">
							<div class="row-fluid show-grid">
								<div class="span4">
									<input class="input-medium" name="name" type="text" placeholder="Name"><br/>
									<input class="input-medium" name="title" type="text" placeholder="Title"><br/>
									<input class="input-medium" name="contact" type="text" placeholder="Contact"><br/>
									<input class="input-medium" name="website" type="text" placeholder="Website"><br/>
									<input class="input-medium" name="phone" type="text" placeholder="Phone number"><br/>
									<input class="input-medium" name="mail" type="text" placeholder="Mail"><br/>
								</div>
								<div class="span8">
									<textarea rows="9" placeholder="Informations" name="info"></textarea><br/>
								</div>
							</div>
						</div>
					</div>
					<div class="span6 ">
						<h3>Address :</h3>
						<select name="location" class="span4">
							<?php
							$i = 0;
							foreach ($country1 as $val)
							{
								if ($i == 0)
									echo '<option selected="selected" value="'.$val['id_country'].'" >'.$val['country'].'</option>';
								else
									echo '<option value="'.$val['id_country'].'" >'.$val['country'].'</option>';

								$i += 1;
							}
							?>
						</select><br/>
						<input class="input-medium" name="address" type="text" placeholder="Address"><br/>
						<input class="input-medium" name="postal_code" type="text" placeholder="Postal code">
					</div>
					<div class="span6 ">
						<h3>Images links :</h3>
						<div class="span8">
							<textarea rows="5" placeholder="Link of image separate by a space or a back line" name="addr_image"></textarea><br/>
						</div>
					</div>
				</div>
            </div>
            <div>
                <button type="submit" class="btn btn-large btn-primary">Send</button>
            </div>
        </form>
      </div>
    </div>
    <!-- javascript
    ================================================== -->
    <script src="./bootstrap-2.3.0/js/html5shiv.js"></script>
    <script src="./bootstrap-2.3.0/js/jquery.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-transition.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-alert.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-modal.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-dropdown.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-scrollspy.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-tab.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-tooltip.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-popover.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-button.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-collapse.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-carousel.js"></script>
    <script src="./bootstrap-2.3.0/js/bootstrap-typeahead.js"></script>
  </body>
</html>
