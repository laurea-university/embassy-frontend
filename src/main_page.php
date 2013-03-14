<?php
$con = connexion();

$category = new Category($con);
$result = $category->getAllCategory();
$image_link = new ImageCompany($con);
$slovenia_company = (new Company($con))->getCompanyById((new Country($con))->getIdCountry(SLOVENIA));
$finnish_company = (new Company($con))->getCompanyById((new Country($con))->getIdCountry(FINLAND));
?>
<h1 style="text-align :center"> Search by Categories</h1>

<div class="leftSide">
    <ul style="list-style-type: none;margin-top : 10px ">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?><li><input type="checkbox" oncheck="searchResultByCategory('<?php echo $row['id'] ?>')" name="<?php echo $row["name"] ?>" value="<?php echo $row["id"] ?>" />
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

    <script src="js/ui/jquery.ui.core.js"></script>
    <script src="js/ui/jquery.ui.widget.js"></script>
    <script src="js/ui/jquery.ui.mouse.js"></script>
    <script src="js/ui/jquery.ui.draggable.js"></script>
    <script src="js/ui/jquery.ui.position.js"></script>
    <script src="js/ui/jquery.ui.resizable.js"></script>
    <script src="js/ui/jquery.ui.button.js"></script>
    <script src="js/ui/jquery.ui.dialog.js"></script>
    <script src="js/ui/jquery.ui.effect.js"></script>
    <script src="js/ui/jquery.ui.effect-blind.js"></script>
    <script src="js/ui/jquery.ui.effect-explode.js"></script>
    <script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>  

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
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
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
                
                
                
    <div id="<?php echo 'dialfi_'.$row_finland['id'] ?>"title="<?php echo $row_finland['name']; ?>">
  <div id="<?php echo 'tabfi_'.$row_finland['id'] ?>" class="tabs">
  <ul>
    <li><a href="#tabs-1<?php echo 'fi_'.$row_finland['id'] ?>">Info</a></li>
    <li><a href="#tabs-2<?php echo 'fi_'.$row_finland['id'] ?>">Gallery</a></li>
    <li><a href="#tabs-3<?php echo 'fi_'.$row_finland['id'] ?>">Location</a></li>
    <li><a href="#tabs-4<?php echo 'fi_'.$row_finland['id'] ?>">Contact</a></li>
  </ul>
  <div id="tabs-1<?php echo 'fi_'.$row_finland['id'] ?>">
    <p><?php echo $row_finland['info']?></p>
  </div>
  <div id="tabs-2<?php echo 'fi_'.$row_finland['id'] ?>">
    <img src="<?php echo $image_link->getImageByIdCompany($row_finland['id'])  ?>"/>
  </div>
  <div id="tabs-3<?php echo 'fi_'.$row_finland['id'] ?>">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
    <div id="tabs-4<?php echo 'fi_'.$row_finland['id'] ?>">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div></div>
                
                
                
                
   <div id="<?php echo 'dialslo_'.$row_slovenia['id'] ?>"title="<?php echo $row_slovenia['name']; ?>">
  <div id="<?php echo 'tabslo_'.$row_slovenia['id'] ?>" class="tabs">
  <ul>
    <li><a href="#tabs-1<?php echo 'slo_'.$row_slovenia['id'] ?>">Info</a></li>
    <li><a href="#tabs-2<?php echo 'slo_'.$row_slovenia['id'] ?>">Gallery</a></li>
    <li><a href="#tabs-3<?php echo 'slo_'.$row_slovenia['id'] ?>">Location</a></li>
    <li><a href="#tabs-4<?php echo 'slo_'.$row_slovenia['id'] ?>">Contact</a></li>
  </ul>
  <div id="tabs-1<?php echo 'slo_'.$row_slovenia['id'] ?>">
    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
  </div>
  <div id="tabs-2<?php echo 'slo_'.$row_slovenia['id'] ?>">
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <div id="tabs-3<?php echo 'slo_'.$row_slovenia['id'] ?>">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
    <div id="tabs-4<?php echo 'slo_'.$row_slovenia['id'] ?>">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>
       </div>
                
                
                
                
    <?php if ($row_finland != null) {
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
