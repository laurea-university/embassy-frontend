<?php
include 'db.php';
include 'utils.php';
require_once "header.php";
autoload();
?>
<!DOCTYPE html>
<html lang="en">
  <body>
    <?php require_once "top_bar.php" ?>

     <div class="content">
            <div class="banner">
                <div class="logoSlovenia"><img src="images/slovenia.png" style="padding-top : 5px" /></div>
                <div class="logoFlag"><img src="images/banner.jpg" /></div>
            </div>
      
        <?php require_once "menu.php"; ?>

    <div class="container">
      <div class="offset4">
        <h1><u>Registration </u>:</h1><br>
      </div>
      <!-- Registration form -->
      <div class="container" style="margin-left: 100px">
       <form ACTION="register.php" class="form-signin" METHOD="post">
            <div>
                <div>
                    <h4><u>Login Informations </u>:</h4><br>
                    <input type="text" placeholder="Username" name="regUsrname">
                    <input type="text" placeholder="Email" name="regEmail">
                    <input type="password" placeholder="Password" name="regPwd">
                    <input type="password" placeholder="Password verification" name="regVerif">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-large btn-primary">Send</button>
            </div>
        </form>
      </div>
      <hr>
      <div>
            <?php require_once "footer.php";?>
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
