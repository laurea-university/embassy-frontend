<?php

require_once "popup_infos.php";

$con = connexion();

$category = new Category($con);
$result = $category->getAllCategory();
$image_link = new ImageCompany($con);

$company =  new Company ($con);
$country = new Country ($con);

$slovenia_company = $company->getCompanyById($country->getIdCountry(SLOVENIA));
$finnish_company = $company->getCompanyById($country->getIdCountry(FINLAND));
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
    <style type="text/css" title="currentStyle">
        @import "media/css/demo_page.css";
        @import "media/css/demo_table_jui.css";
    </style>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>



    <div class="demo_jui">
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
                <tr>
                    <th>Finnish company</th>
                    <th>Slovenian company</th>
                </tr>
            </thead>
            <tbody class="contents">
                <?php
                while (($row_slovenia = mysqli_fetch_array($slovenia_company)) && ($row_finland = mysqli_fetch_array($finnish_company))) {
                    ?><tr>
                <script>
                                      
                    $(function() {
    $( "<?php echo '#dialfi_'.$row_finland['id'] ?>" ).dialog({
       width: 700,
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 700
      },
      hide: {
        effect: "explode",
        duration: 700
      }
    });

                    $("<?php echo "#dialslo_" . $row_slovenia['id'] ?>" ).dialog({
                        width : 700, 
                        autoOpen: false,
                        show: {
                            effect: "blind",
                            duration: 1000
                        },
                        hide: {
                            effect: "explode",
                            duration: 1000
                        }
                    });


    $("<?php echo '#fi_'.$row_finland['id'] ?>" ).click(function() {
      $("<?php echo '#dialfi_'.$row_finland['id'] ?>" ).dialog( "open" );
    });
   
   
   
                    $("<?php echo "#slo_" . $row_slovenia['id'] ?>").click(function() {
                        $( "<?php echo "#dialslo_" . $row_slovenia['id'] ?>" ).dialog( "open" );
                    });
   
   
$("<?php echo "#tabfi_" . $row_finland['id'] ?>").tabs();    
$("<?php echo "#tabslo_" . $row_slovenia['id'] ?>").tabs();    

                     

  });

            
                </script>            
    <?php 
affInfoCompany($row_finland, $image_link, "fi_");    
affInfoCompany($row_slovenia, $image_link, "slo_");    
    
    if ($row_finland != null) {
        ?><td id="fi_<?php echo $row_finland['id'] ?>"><?php echo $row_finland['name']; ?> </td> <?php }
    ?>
                <?php if ($row_slovenia != null) {
                    ?><td id="slo_<?php echo $row_slovenia['id'] ?>"><?php echo $row_slovenia['name']; ?></td> <?php }
                ?> 


                </tr>
<?php

}
?>
            </tbody>
        </table>
    </div>
</div>
