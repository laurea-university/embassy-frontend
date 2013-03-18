<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="nav-collapse collapse">
                <img src="images/logo.png" class ="logoTopBar"/>
                <h2 class="titleTopBar">Embassy of slovenia</h2>
                <div class="navbar-form pull-right socialTopBar" >
                    <span class="marginRight10"> Follow us : </span>
                    <a title="Facebook" href="http://www.facebook.com/slovenia.usembassy?v=wall" target="_blank">
                        <img  alt="Facebook" title="Facebook" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_facebook.jpg" /></a>


                    <a title="Slocast" href="http://www.slocast.si/" target="_blank" class="marginRight5">

                        <img  alt="Slocast" title="Slocast" src="http://photos.state.gov/libraries/slovakia/328671/social-media/slocast-20.jpg" >
                    </a>
                    <a title="Twitter" href="http://twitter.com/USEmbassySLO" target="_blank" class="marginRight5">

                        <img  alt="Twitter" title="Twitter" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_twitter.jpg" >
                    </a>
                    <a title="YouTube" href="http://www.youtube.com/user/USEmbassyLjubljana" target="_blank" class="marginRight5">

                        <img alt="YouTube" title="YouTube" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_youtube.jpg" >
                    </a>
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