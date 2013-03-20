<!DOCTYPE html>
<html lang="en">
    <?php 
    include 'db.php';
    require_once "utils.php";
    require_once "header.php";
    include "popup_infos.php";
    autoload();    
    ?> <!-- header  , head block -->
    <body>

        <?php require_once "top_bar.php" ?> <!-- top bar -> fixed -->

        <div class="content">

            <div class="banner">

                <div class="logoSlovenia"><img src="images/slovenia.png" style="padding-top : 5px" /></div>
                <div class="logoFlag"><img src="images/banner.jpg" /></div>

            </div>
            <?php require_once "menu.php" ?>
            <div class="MainInfos">
                <?php
                if (!isset($_GET['page'])) {
                    include "main_page.php";

}
else if (isset($_GET['page']) && $_GET['page'] != "index.php" && file_exists($_GET['page'])){
    
    include($_GET['page']);
    
}
else if (isset($_GET['page']) && $_GET['page'] != "index.php" && file_exists($_GET['page']) == false) {
    
    require_once("404.php");
    
}
?>
                </div>

            <?php
include "footer.php"; /* footer */
?>
        </div>

<?php
include "inc_script.php";
?>
    </body>
</html>
