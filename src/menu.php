
<div class="dcjq-mega-menu">
    <ul id="mega-menu-tut" class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="<?php echo getLinkPage("about")?>">About Us</a>
            <ul>
                <li><a href="#">Ambassador</a></li>
                <li><a href="#">U.S embassy of slovenia</a></li>
            </ul>
        </li>
        <li><a href="#">Visa</a>
            <ul>
                <li><a href="#">Immigrant Visa</a></li>
                <li><a href="#">Visa Waiver Program</a></li>
                <li><a href="#">Diversity visa Lottery</a></li>
            </ul>
        </li>
        <li><a href="#">News & Events</a>
            <ul>
                <li style="margin-left : 60px" id="menu-item-1"><a href="#">Important News</a>
                    <ul>
                        <li><a href="#">News 1</a></li>
                        <li><a href="#">News 2</a></li>
                    </ul>
                </li>
                <li id="menu-item-2"><a href="#">Events</a>
                    <ul>

                        <li><a href="#">Embassy Events</a></li>
                        <li><a href="#">Alumni events</a></li>
                        <li><a href="#">Photos galleries</a></li>

                    </ul>
                </li>
                <li id="menu-item-3"><a href="#">Article</a>
                    <ul>

                        <li><a href="#">Latest news</a></li>
                        <li><a href="#">Topics of interest</a></li>
                        <li><a href="#">Studying in the US</a></li>
                        <li><a href="#">Governement report</a></li>

                    </ul>
                </li>
                <li id="menu-item-4" style="margin-left : 60px"><a href="#">Multimedia</a>
                    <ul>

                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Media ressources</a></li>

                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">US citizens Services</a>
            <ul>
                <li><a href="#">Emergencies</a></li>
                <li><a href="#">Public services</a></li>
                <li><a href="#">Travel information</a></li>
                <li><a href="#">Birth of a child</a></li>
            </ul>
        </li>
<?php
if (isset($_SESSION[SESSION_PREFIX.'id']) && (isset($_SESSION[SESSION_PREFIX.'admin']) && $_SESSION[SESSION_PREFIX.'admin'] == 1))
	{
	echo '<li><a href="#">Administration</a>
			<ul>
				<li><a href="userAdmin.php">User</a></li>
				<li><a href="admin.php">Companies</a></li>
			</ul>
		</li>';
	}
?>
        <li><a href="<?php echo getLinkPage("contact")?>">Contact us</a></li>
  <!--      <li style="width : 20px"><input id="tags" style="margin-top : 10px;margin-left:  10px"/></li> a déplacer -->
    </ul>
    
</div>
</div>