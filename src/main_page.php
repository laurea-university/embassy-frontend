<?php

$con = connexion();

$category = new Category($con);
$result = $category->getAllCategory();
$image_link = new ImageCompany($con);

$company =  new Company ($con);
$country = new Country ($con);

$where = isset($_POST["where"]) ? $_POST["where"] : null;

$slovenia_company = $company->getCompanyById($country->getIdCountry(SLOVENIA), $where);
$finnish_company = $company->getCompanyById($country->getIdCountry(FINLAND), $where);

?>

<h1 style="text-align :center"> Search by Categories</h1>

<div class="leftSide">
    <ul style="list-style-type: none;margin-top : 10px ">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?><li><input type="checkbox" oncheck="searchResultByCategory('<?php echo $row['id_category'] ?>')" name="<?php echo $row["name"] ?>" value="<?php echo $row["id_category"] ?>" />
                <span style="margin-left:  7px"> <?php echo $row["name"] ?></span></li><?php }
        ?>
    </ul>

</div>

<div class="rightSide">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

    <div class="demo_jui">
<?php

displayTable("fi_","example", "Finnish company", $finnish_company, $image_link);
displayTable("slo_","example2", "Slovenian company", $slovenia_company, $image_link);
?>
        

    </div>
</div>
