<?php
/*
 * utils.php for embassy
 * by lenormf
 */

function getVar($in, $predicate, $default) {
	return $predicate === true ? $default : $in;
}

function getNonEmptyVar($in, $default) {
	return getVar($in, empty($in), $default);
}

function hasAccess($tree)
{
if (isset($_SESSION[SESSION_PREFIX.'id']))
{
	if ($_SESSION[SESSION_PREFIX.'admin'] == 0)
	header("Location: ./".$tree."index.html");
}
else
	header("Location: ./".$tree."index.html");	
}

// $tree must be the path to the src field of the project. Antoine Basset 

function headerHtml($tree){

echo       '<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visas <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./'.$tree.'#">Action</a></li>
                                    <li><a href="./'.$tree.'#">Another action</a></li>
                                    <li><a href="./'.$tree.'#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="./'.$tree.'#">Separated link</a></li>
                                    <li><a href="./'.$tree.'#">One more separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">News & Events <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./'.$tree.'#">Action</a></li>
                                    <li><a href="./'.$tree.'#">Another action</a></li>
                                    <li><a href="./'.$tree.'#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="./'.$tree.'#">Separated link</a></li>
                                    <li><a href="./'.$tree.'#">One more separated link</a></li>
                                </ul>
                            </li>';
							if (isset($_SESSION[SESSION_PREFIX.'id']) && (isset($_SESSION[SESSION_PREFIX.'admin']) && $_SESSION[SESSION_PREFIX.'admin'] == 1))
							{
								echo '<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <b class="caret"></b></a>
															<ul class="dropdown-menu">
																<li><a href="./'.$tree.'/admin/userAdmin.php">User</a></li>
																<li><a href="./'.$tree.'/admin/admin.php">Companies</a></li>
															</ul>
														</li>';
							}
							
                        echo '</ul>
                        <div class="navbar-form pull-right">
                            <a title="Facebook" href="http://www.facebook.com/slovenia.usembassy?v=wall" target="_blank">
                                <img  alt="Facebook" title="Facebook" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_facebook.jpg" /></a>


                            <a title="Slocast" href="http://www.slocast.si/" target="_blank" style="margin-right : 10px">

                                <img  alt="Slocast" title="Slocast" src="http://photos.state.gov/libraries/slovakia/328671/social-media/slocast-20.jpg" >
                            </a>
                            <a title="Twitter" href="http://twitter.com/USEmbassySLO" target="_blank" style="margin-right : 10px">

                                <img  alt="Twitter" title="Twitter" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_twitter.jpg" >
                            </a>
                            <a title="YouTube" href="http://www.youtube.com/user/USEmbassyLjubljana" target="_blank" style="margin-right : 10px">

                                <img alt="YouTube" title="YouTube" src="http://photos.state.gov/libraries/slovakia/328671/social-media/20x20_youtube.jpg" >
                            </a>
                            <a class="btn" href="../login.php">Sign in</a>';
							if (isset($_SESSION[SESSION_PREFIX.'id']))
							{
								echo '<a class="btn" href="./'.$tree.'logout.php">Log out</a>';
							}
                        echo '</div>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>';
}

function getLinkPage($page)
{
    return ("index.php?page=".$page.".php");
}