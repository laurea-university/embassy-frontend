<!DOCTYPE html>
<html lang="en">
    <?php 
    include "utils.php";
    include "header.php";
    ?> <!-- header  , head block -->
    <body>

        <?php include "top_bar.php" ?> <!-- top bar -> fixed -->

        <div class="content">

            <div class="banner">

                <div class="logoSlovenia"><img src="images/slovenia.png" style="padding-top : 5px" /></div>
                <div class="logoFlag"><img src="images/banner.jpg" /></div>

            </div>
            <?php include "menu.php" ?>
            <div class="MainInfos">
                <?php
                if (!isset($_GET['page'])) {
                    ?>
                    <div class="leftcollumn">
                    <?php include "left_side.php" ?> <!-- info left side -->
                    </div>

                    <div class="rightCollumn">
    <?php include "right_side.php" ?> <!-- info right side -->
                    </div>
<?php
} else if (isset($_GET['page']) && $_GET['page'] != "index.php"){
    
    include($_GET['page']);
}?>
                </div>

            <?php
include "footer.php"; /* footer */
?>
        </div>

<?php
include "inc_script.php";
?> <!-- load all script -->
    </body>
</html>
