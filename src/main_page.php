<?php

if (isset($_POST['where'])) {
    require_once "utils.php";
    include "popup_infos.php";
    autoload();
    
}
$con = connexion();

if (!isset($_POST['where'])) {
    $category = new Category($con);
    $result = $category->getAllCategory();
    ?>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

    <script>

        function searchResultByCategory(id)
        {
            $.ajax({
                type: "POST",
                url: "main_page.php",
                data: {where: id , checked : document.getElementById(id).checked }
            }).done(function( msg ) {
                $(".rightSide").html(msg);
            });
        }
    </script>

    <h1 style="text-align :center"> Search by Categories</h1>

    <div class="leftSide">
        <ul style="list-style-type: none;margin-top : 10px ">
    <?php
    while ($row = mysqli_fetch_array($result)) {
        ?><li><input type="checkbox" id="<?php echo $row['id_category'] ?>" onchange="searchResultByCategory('<?php echo $row['id_category'] ?>')" name="<?php echo $row["name"] ?>" value="<?php echo $row["id_category"] ?>" />
                    <span style="margin-left:  7px"> <?php echo $row["name"] ?></span></li><?php }
    ?>
        </ul>

    </div>
    <div class="rightSide" >
    <?php
}
?>


    <div class="demo_jui">

<?php
$image_link = new ImageCompany($con);

$company = new Company($con);
$country = new Country($con);
$where = isset($_POST["where"]) ? $_POST["where"] : null;
$checked = isset($_POST["checked"]) ? $_POST["checked"] : null;
$slovenia_company = $company->getCompanyById($country->getIdCountry(SLOVENIA), $where, $checked);
$finnish_company = $company->getCompanyById($country->getIdCountry(FINLAND), $where, $checked);
displayTable("fi_", "example", "Finnish company", $finnish_company, $image_link);
displayTable("slo_", "example2", "Slovenian company", $slovenia_company, $image_link);
?>


    </div>
<?php
if (isset($_POST['where'])) {
    ?>
    </div>
        <?php }
    ?>
<script src="js/jquery-ui.js"></script>
<script src="./bootstrap-2.3.0/js/bootstrap-carousel.js"></script>
<script src="js/ui/jquery.ui.dialog.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>  
<script type="text/javascript">
    $(document).ready(function($){
        oTable = $('#example').dataTable({
            "jQueryUI": true,
            "paginationType": "full_numbers"
        });
        
        oTable2 = $('#example2').dataTable({
            "jQueryUI": true,
            "paginationType": "full_numbers"
        });
    } );
</script>
