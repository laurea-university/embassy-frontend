<?php

function displayTable($word, $id_table, $title, $company, $image_link) {
    ?>

    <table cellpadding="0" cellspacing="0" border="0" class="display" id="<?php echo $id_table ?>">
        <thead>
            <tr>
                <th><?php echo $title ?></th>
            </tr>
        </thead>
        <tbody class="contents">
    <?php
    while ($row = mysqli_fetch_array($company)) {
        ?><tr>
            <script>
                                              
                $(function() {
                    $("<?php echo "#dial" . $word . $row['id'] ?>" ).dialog({
                        width : 700, 
                        autoOpen: false
                    });
                    
                    $("<?php echo "#" . $word . $row['id'] ?>").click(function() {
                        $( "<?php echo "#dial" . $word . $row['id'] ?>" ).dialog( "open" );
                    });
                    
                    
                    $("<?php echo "#tab" . $word . $row['id'] ?>").tabs();    
                });

                    
            </script>            
        <?php
        affInfoCompany($row, $image_link, $word);
        ?>
            <?php if ($row != null) {
                ?><td id="<?php echo $word . $row['id'] ?>"><?php echo $row['name']; ?></td> <?php }
            ?> 
        </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
    <?php
}

function affInfoCompany($elem, $image_link, $word) {
    $images = $image_link->getImageByIdCompany($elem['id']);
    $nb_image = $images->num_rows;
    ?>

    <div id="<?php echo 'dial' . $word . $elem['id'] ?>"title="<?php echo $elem['name']; ?>">
        <div id="<?php echo 'tab' . $word . $elem['id'] ?>" class="tabs">
            <ul>
                <li><a href="#tabs-1<?php echo $word . $elem['id'] ?>">Info</a></li>
    <?php if ($nb_image > 0) { ?>
                    <li><a href="#tabs-2<?php echo $word . $elem['id'] ?>">Gallery</a></li><?php }
    ?>
                <li><a href="#tabs-3<?php echo $word . $elem['id'] ?>">Location</a></li>
                <li><a href="#tabs-4<?php echo $word . $elem['id'] ?>">Contact</a></li>
            </ul>
            <div id="tabs-1<?php echo $word . $elem['id'] ?>">
                <p><?php echo $elem['info'] ?></p><br/>
                <?php if ($elem['contact']) { ?>
                    <p> Contact : <?php echo $elem['contact'] ?></p>
        <?php
    }
    if ($elem['mail']) {
        ?>
                    <p> Mail : <?php echo $elem['mail'] ?></p>
                <?php } ?>

            </div>
                <?php if ($nb_image > 0) { ?>
                <div id="tabs-2<?php echo $word . $elem['id'] ?>">
                    <?php
                    display_pic($elem['id'], $images);
                    ?>
                </div>
                <?php } ?>
            <div id="tabs-3<?php echo $word . $elem['id'] ?>">
              <!--<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=laurea+university+of+applied+science+leppavaara&amp;aq=&amp;sll=60.240212,24.924832&amp;sspn=0.139228,0.445976&amp;t=h&amp;ie=UTF8&amp;hq=laurea+university+of+applied+science&amp;hnear=Lepp%C3%A4vaara,+Finlande&amp;ll=60.240212,24.924832&amp;spn=0.130656,0.286448&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=laurea+university+of+applied+science+leppavaara&amp;aq=&amp;sll=60.240212,24.924832&amp;sspn=0.139228,0.445976&amp;t=h&amp;ie=UTF8&amp;hq=laurea+university+of+applied+science&amp;hnear=Lepp%C3%A4vaara,+Finlande&amp;ll=60.240212,24.924832&amp;spn=0.130656,0.286448" style="color:#0000FF;text-align:left">Size up</a></small>-->
            </div>
            <div id="tabs-4<?php echo $word . $elem['id'] ?>">
            <?php include "contact_form.php" ?>
            </div>
        </div></div>

                <?php
            }

            function display_pic($id, $images) {
                ?>
    <div id="musiciansCarousel_<?php echo $id ?>" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
    <?php
    $i = 0;
    while ($image = mysqli_fetch_array($images)) {
        if ($i == 0) {
            ?>
                    <div class="active item">
                        <a href="#"><img src="<?php echo $image["addr_image"] ?>" class="centerPic" /></a>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="item">
                        <a href="#"><img src="<?php echo $image["addr_image"] ?>" class="centerPic" /></a>
                    </div>
            <?php
        }
        $i++;
    }
    ?>              
        </div>

        <!-- Carousel nav -->
        <a class="carousel-control left" href="#musiciansCarousel_<?php echo $id ?>" data-slide="prev"> < </a>
        <a class="carousel-control right" href="#musiciansCarousel_<?php echo $id ?>" data-slide="next"> > </a>
    </div>

    <script type="text/javascript">
    	
        $(document).ready(function(){
            $('#musiciansCarousel_<?php echo $id ?>').carousel({
                interval: 2000
            });			
    			
        });

    </script>
    <?php
}