
<div class="dcjq-mega-menu">
    <ul id="mega-menu-tut" class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="<?php echo getLinkPage("about")?>">About Us</a>
            <ul>
                <li><a href="#">Ambassador</a></li>
                <li><a href="#">U.S embassy of slovenia</a></li>
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
    </ul>
    
</div>
</div>