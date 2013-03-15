<?php


function affInfoCompany($elem, $image_link, $word)
{
    ?>

    <div id="<?php echo 'dial'.$word.$elem['id'] ?>"title="<?php echo $elem['name']; ?>">
  <div id="<?php echo 'tab'.$word.$elem['id'] ?>" class="tabs">
  <ul>
    <li><a href="#tabs-1<?php echo $word.$elem['id'] ?>">Info</a></li>
    <li><a href="#tabs-2<?php echo $word.$elem['id'] ?>">Gallery</a></li>
    <li><a href="#tabs-3<?php echo $word.$elem['id'] ?>">Location</a></li>
    <li><a href="#tabs-4<?php echo $word.$elem['id'] ?>">Contact</a></li>
  </ul>
  <div id="tabs-1<?php echo  $word.$elem['id'] ?>">
    <p><?php echo $elem['info']?></p>
  </div>
  <div id="tabs-2<?php echo $word.$elem['id'] ?>">
    <img src="<?php echo $image_link->getImageByIdCompany($elem['id'])  ?>"/>
  </div>
  <div id="tabs-3<?php echo $word.$elem['id'] ?>">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=laurea+university+of+applied+science+leppavaara&amp;aq=&amp;sll=60.240212,24.924832&amp;sspn=0.139228,0.445976&amp;t=h&amp;ie=UTF8&amp;hq=laurea+university+of+applied+science&amp;hnear=Lepp%C3%A4vaara,+Finlande&amp;ll=60.240212,24.924832&amp;spn=0.130656,0.286448&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=laurea+university+of+applied+science+leppavaara&amp;aq=&amp;sll=60.240212,24.924832&amp;sspn=0.139228,0.445976&amp;t=h&amp;ie=UTF8&amp;hq=laurea+university+of+applied+science&amp;hnear=Lepp%C3%A4vaara,+Finlande&amp;ll=60.240212,24.924832&amp;spn=0.130656,0.286448" style="color:#0000FF;text-align:left">Size up</a></small>
  </div>
    <div id="tabs-4<?php echo $word.$elem['id'] ?>">
    <?php include "contact_form.php" ?>
  </div>
</div></div>

<?php
}
