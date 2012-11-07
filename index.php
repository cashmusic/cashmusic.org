<?php
	include('../seed/0.2/logic/prep.php');
	include('../seed/0.2/logic/paypal.php');
	include('../seed/0.2/logic/emaillist.php');
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" type="image/png" href="http://cashmusic.org/images/icons/cash.png" />

	<title>CASH Music</title>

	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<link rel="stylesheet" href="assets/css/app.css">

	<script src="assets/scripts/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="topspc">
		<div data-0="top:0px;" data-410="top:-150px;" id="jackson">&nbsp;</div>
		<div id="hellospc">
			<?php
			if (isset($_SESSION['seed_state_emaillist'])) {
				if ($_SESSION['seed_state_emaillist'] == 'completed') {
				?>
				<h1>Thanks!</h1>
				You're all signed up.<br />
			<?php
				} else {
			?>
				<h1>Error.</h1>
				Please try again.
			<?php
				}
			} else {
			?>
				<h1>Hello.</h1>
			<?php
			}
			?>
			Just want to download the platform? <a href="https://github.com/downloads/cashmusic/platform/cashmusic_web_installer.zip"><b>Click here.</b></a><br />
			Developers looking to help build it? <a href="http://cashmusic.github.com/"><b>Here.</b></a>
		</div>
	</div>

	<div data-0="bottom:29%;background-color:rgb(255,255,0);" data-410="bottom:10%;background-color:rgb(255,255,0);" data-650="background-color:rgb(255,255,0);" data-700="background-color:rgb(223,8,84);" data-1200="background-color:rgb(223,8,84);" data-1350="background-color:rgb(255,255,0);" id="mainnav">
		<div id="mainnavlinks">
			<span style="font-size:12px;font-weight:bold;line-height:1em;color:#000;">CASH Music</span><br />
			<a href="#platform">Platform</a> <a href="#about">About us</a> <a href="#more">More</a> <a href="http://blog.cashmusic.org/">Blog</a>
		</div>
	</div>

	<div data-anchor-target="#platform" data-0="background-color:rgb(250,250,248);" data-bottom-center="background-color:rgb(250,250,248);" data-center-center="background-color:rgb(35,31,32);" data-top="background-color:rgb(35,31,32);" data-top-center="background-color:rgb(250,250,248);" id="videobg">&nbsp;</div>
	<div class="row" id="mainspc">
		<div class="twelve columns">
			<div class="section">
				<h2>CASH Music is a nonprofit organization that builds open source tools for musicians.</h2>
				<div class="row">
					<div class="eight columns">
						<p>
							Our mission is to help educate and empower artists and their fans to foster a more viable and sustainable future for music.
						</p><p>
							We're working with musicians to build a free and open platform of tools they need to control their own careers. We see the 
							open web as a vital piece of the solution for a healthy music industry. In addition to building technology we're preparing 
							outreach and educational programs, ensuring that artists have not only access but ability. 
						</p><p>
							If you have any questions, just write us at <a href="mailto:info@cashmusic.org">info@cashmusic.org</a>.
						</p>
					</div>
					<div class="four columns">
						<p>
							<a href="http://twitter.com/cashmusic">twitter</a> / <a href="http://www.facebook.com/cashmusic.org">facebook</a> / <a href="http://github.com/cashmusic">github</a><br />
							<a href="https://groups.google.com/d/forum/cash-build">development group</a><br />
							<a href="http://help.cashmusic.org/kb">help.cashmusic.org</a>
						</p>
						<div>
							<span class="smalltext"><b>Join our mailing list</b></span><br>
							<form method="post" action=""> 
							<input name="seed_email" value="" style="width:160px;" type="text">
							<input name="seed_emaillist" value="go" type="hidden"> 
							<input name="seed_listid" value="1" type="hidden"> 
							<input name="seed_verified" value="1" type="hidden">  	
							<input value="join" class="button" style="color:#fff;font-weight:normal;" type="submit">
							</form> 
						</div>
					
					</div>
				</div>
			</div>

			<div id="platform" class="section" data-0="color:rgb(35,31,32);" data-bottom-center="color:rgb(35,31,32);" data-center-center="color:rgb(255,255,255);" data-top-center="color:rgb(35,31,32);">
				<div class="cashmusic_video_container">
					<iframe src="http://player.vimeo.com/video/38076031?byline=0&amp;portrait=0&amp;badge=0&amp;color=df0854" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
				<h3>The Platform</h3>
				We've built a totally free platform of tools for artists and labels to sell, share, and promote music 
				directly to their audience. We feel it's vital that all musicians have access to basic web tools that 
				are free, open, and theirs to own. It can be <a href="https://github.com/downloads/cashmusic/platform/cashmusic_web_installer.zip">downloaded here</a>
				and a hosted version will launch by year's end.
			</div>

			<div id="about" class="section">
				<h3>About us</h3>
				<div class="row">
					<div class="four columns">
						We're a small staff led by Maggie Vail and Jesse von Doom. We work directly with our musician and label members to design our platform, under the guidance of our board.
					</div>
					<div class="eight columns">
						<b>The CASH Music board</b><br />
						<a href="http://iamdaveallen.com/" target="_blank">Dave Allen</a>, 
						<a href="http://www.battblog.com/" target="_blank">Anthony Batt</a>, 
						<a href="http://www.jonathancoulton.com/" target="_blank">Jonathan Coulton</a>, 
						<a href="http://battalionarmour.com/nu/" target="_blank">Tishaun Dawson</a>, 
						<a href="http://finette.com/">Pascal Finette</a>, 
						<a href="http://hawthornlandings.org/" target="_blank">Leslie Hawthorn</a>, 
						<a href="http://www.kristinhersh.com/" target="_blank">Kristin Hersh</a>, 
						<a href="http://www.toolshed.biz/promovuz" target="_blank">Dick Huey</a>, 
						<a href="http://www.zoekeating.com/" target="_blank">Zoë Keating</a>, 
						<a href="http://simplesocialgraces.blogspot.com/">Molly Neuman</a>, 
						<a href="http://fenwayrecordings.com/" target="_blank">Nick Palmacci</a>, 
						<a href="http://creativecommons.org/staff#ericsteuer" target="_blank">Eric Steuer</a>, 
						<a href="http://jigsawunderground.blogspot.com/" target="_blank">Tobi Vail</a>, 
						<a href="http://blog.aweissman.com/">Andrew Weissman</a>, 
						<a href="http://whitesmithentertainment.com/" target="_blank">Emily White</a>
					</div>
				</div>
			</div>

			<div id="more" class="section" style="padding-bottom:60px;">
				<h3>More</h3>
				<div class="row">
					<div class="four columns">
						<p>
							Want to see where we're going? Check our <a href="/roadmap/">roadmap</a>.
						</p><p>
							For more technical information check out our 
							<a href="http://cashmusic.github.com/">developer resources</a>,
							<a href="https://groups.google.com/d/forum/cash-build">the development mailing list</a>, 
							or just fork <a href="http://github.com/cashmusic">the code</a>.
						</p>
					</div>
					<div class="four columns" style="position:relative;">
						<a href="http://cashmusic.bigcartel.com/product/cash-music-logo-shirt"><img src="assets/images/shirt.jpg" style="width:30%;margin-right:4%;" alt="logo shirt" /></a>
						<div style="display:inline-block;width:60%;vertical-align:top;">A great way to support what we're doing is to <a href="http://cashmusic.bigcartel.com/product/cash-music-logo-shirt">buy a shirt</a>.</div>
						<br /><br />
					</div>
					<div class="four columns">
						<span class="smalltext">Help with a donation:</span><br />
						<form method="post" action="/donate/"> 
						<input name="seed_addtoamt" value="10.00" style="width:5em !important;display:inline !important;margin-right:5px;" type="text" />
						<input name="seed_payment" value="go" type="hidden" /> 
						<input name="seed_sku" value="donation" type="hidden" /> 
						<input value="contribute" class="button" type="submit" style="width:auto;display:inline !important;" /><br /> 
						<img src="/assets/images/paypal_logo_b.png" alt="paypal" height="12" width="38" /> 
						</form> 
						<span class="altcopystyle"> 
						CASH Music is a registered non-profit in Oregon. Donations do not qualify for a US tax write-off.
						</span>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<script type="text/javascript" src="assets/scripts/skrollr.min.js"></script>
	<script type="text/javascript">
		if (document.documentElement.clientWidth > 480) {
			skrollr.init();
		}
	</script>
</body>
</html>
