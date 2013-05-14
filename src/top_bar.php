<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="nav-collapse collapse">
                <img style="width:50px; height:50px" src="images/logo.png" class ="logoTopBar"/>
                <h2 class="titleTopBar">DB-Embassy</h2>
                <div class="navbar-form pull-right socialTopBar" >
                    <a class="btn " href="<?php echo getLinkPage("login")?>">Sign in</a>
					<?php	
						if (isset($_SESSION[SESSION_PREFIX.'id']))
							echo '<a class="btn" href='.getLinkPage("logout").'>Log out</a>';
					?>
				</div>
            </div>
        </div>
    </div>
</div>