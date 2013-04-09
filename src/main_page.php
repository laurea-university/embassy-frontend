<?php
$con = connexion();

$category = new Category($con);
$result = $category->getAllCategory();
$image_link = new ImageCompany($con);

$company = new Company($con);
$companies = $company->getAllCompany();
?>
<h1 style="text-align :center"> Search by Categories</h1>

<div class="leftSide">
    <ul style="list-style-type: none;margin-top : 10px ">
        <form name=myform>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?><li><input type="checkbox" id="<?php echo $row['id_category'] ?>" onchange="searchResultByCategory('<?php echo $row['id_category'] ?>', this)" name="<?php echo $row["name"] ?>" value="<?php echo $row["id_category"] ?>" />
                    <span style="margin-left:  7px"> <?php echo $row["name"] ?></span></li><?php }
?>
        </form>
    </ul>

</div>
<div class="rightSide" >
    <div class="demo_jui">

<?php
displayTable("comp_", "example", $companies, $image_link, $category, new Country($con));
?>
    </div>
</div>
