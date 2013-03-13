<!DOCTYPE html>
<html lang="en">
    <?php 
	include	'db.php';
    include "utils.php";
    require_once "header.php";
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
                ?>
                    <div class="leftcollumn">
						<?php require_once "left_side.php" ?> <!-- info left side -->
                    </div>
                    <div class="rightCollumn">
						<?php require_once "right_side.php" ?> <!-- info right side -->
                    </div>
				<?php
				} else if (isset($_GET['page']) && $_GET['page'] != "index.php" && file_exists($_GET['page'])){
    
    require_once($_GET['page']);
}
else if (isset($_GET['page']) && $_GET['page'] != "index.php" && file_exists($_GET['page']) == false) {
    require_once("404.php");
}
?>
                </div>

            <?php
require_once "footer.php"; /* footer */
?>
        </div>

<?php
require_once "inc_script.php";
?> <!-- load all script -->
    </body>
</html>
