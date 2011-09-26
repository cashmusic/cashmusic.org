<?php
	include('../seed/0.2/logic/prep.php');
	include('../seed/0.2/logic/paypal.php');
	include('../seed/0.2/logic/emaillist.php');
?>
<!DOCTYPE html> 
<html> 
<head> 
<title>CASH Music</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/rss+xml" title="CASH Music blog RSS Feed" href="http://feeds.feedburner.com/cashmusic" /> 
<meta name="description" content="CASH Music is a nonprofit organization that builds open source digital tools for musicians and labels. Our mission is to help educate and empower artists and their fans to foster a more viable and sustainable future for music." />
<meta name="keywords" content="artists art copyleft open community free open web music musicians code download alternative" />
<link rel="image_src" href="http://cashmusic.org/assets/images/cashmusic_fb.jpg" /> 

<link href="assets/css/cashmusic.css" rel="stylesheet" type="text/css" /> 
<style type="text/css">
	.memberslist {font:italic 11.25px/1.75em georgia, times, serif;color:#a7a9ac;}
</style>

<script type="text/javascript">
/* Modernizr 2.0.6 (Custom Build) | MIT & BSD
 * Build: http://www.modernizr.com/download/#-fontface-cssclasses-teststyles
 */
;window.Modernizr=function(a,b,c){function y(a,b){return!!~(""+a).indexOf(b)}function x(a,b){return typeof a===b}function w(a,b){return v(prefixes.join(a+";")+(b||""))}function v(a){k.cssText=a}var d="2.0.6",e={},f=!0,g=b.documentElement,h=b.head||b.getElementsByTagName("head")[0],i="modernizr",j=b.createElement(i),k=j.style,l,m=Object.prototype.toString,n={},o={},p={},q=[],r=function(a,c,d,e){var f,h,j,k=b.createElement("div");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:i+(d+1),k.appendChild(j);f=["&shy;","<style>",a,"</style>"].join(""),k.id=i,k.innerHTML+=f,g.appendChild(k),h=c(k,a),k.parentNode.removeChild(k);return!!h},s,t={}.hasOwnProperty,u;!x(t,c)&&!x(t.call,c)?u=function(a,b){return t.call(a,b)}:u=function(a,b){return b in a&&x(a.constructor.prototype[b],c)};var z=function(a,c){var d=a.join(""),f=c.length;r(d,function(a,c){var d=b.styleSheets[b.styleSheets.length-1],g=d.cssRules&&d.cssRules[0]?d.cssRules[0].cssText:d.cssText||"",h=a.childNodes,i={};while(f--)i[h[f].id]=h[f];e.fontface=/src/i.test(g)&&g.indexOf(c.split(" ")[0])===0},f,c)}(['@font-face {font-family:"font";src:url("https://")}'],["fontface"]);n.fontface=function(){return e.fontface};for(var A in n)u(n,A)&&(s=A.toLowerCase(),e[s]=n[A](),q.push((e[s]?"":"no-")+s));v(""),j=l=null,e._version=d,e.testStyles=r,g.className=g.className.replace(/\bno-js\b/,"")+(f?" js "+q.join(" "):"");return e}(this,this.document);
</script>

<?php
	$all_colors = array('cd074d','ca8c07','97b800','0080c9','8a00ca');
	$page_color = $all_colors[array_rand($all_colors)];
	echo '<style type="text/css">a {color:#' . $page_color . ';}#topspc, #sidebar {background-color:#' . $page_color . ';}</style>';
?>

<link rel="icon" type="image/png" href="https://cashmusic.org/assets/images/icons/cash.png" /> 
</head> 

<body> 

<div id="wrap"> 
	<div id="topspc">
		<div id="navspc">
			<a href="/">Home</a> <a href="/download/">Download</a> <a href="/donate/">Donate</a> <a href="/about/">About</a> <a href="http://blog.cashmusic.org/">Blog</a> <a href="http://help.cashmusic.org/">Help</a>
		</div>
	</div>

	<?php include('./assets/includes/sidebar.php'); ?>
	
	<div id="mainspc">
		<h1 class="mainpage">CASH Music</h1>

		<?php
		if (isset($_SESSION['seed_state_emaillist'])) {
			if ($_SESSION['seed_state_emaillist'] == 'completed') {
				echo '<p class="callout"><br /><br /><br />Okay, you’re on the list. Thanks for signing up!</p>';
			} else {
				echo '<p class="callout"><br /><br /><br />Something went wrong in there. Try again, please?</p>';
			}
			unset($_SESSION['seed_state_emaillist']);
		}
		?>

		<p class="callout"><br />
			<b>CASH Music</b> is a nonprofit organization that builds open source digital tools for musicians and labels. Our mission is to help educate and empower artists and their fans to foster a more viable and sustainable future for music.
		</p>

		<p>
			What Wordpress did for bloggers, we're doing for musicians. The goal is to help artists find sustainability and to encourage innovation in the music industry. To that end we built a free and open platform that’s available to all artists, designed in partnership with the artists and labels who are members of our organization.
		</p>
			
		<b class="lightest">Some of our members</b><br />
		<div class="oneofthree firstcol memberslist">
			Brendan Benson <br />
			Boy &amp; Bear <br />
			Kim Boekbinder <br />
			Calexico <br />
			Chinese Stars <br />
			Clogs <br />
			Jonathan Coulton <br />
			Family of the Year <br />
			The Frames <br />
			The Go! Team <br />
			Rebecca Gates <br />
			GOLD MOTEL <br />
			HEALTH <br />
			Kristin Hersh <br />
			Marketa Irglova <br />
			Iron &amp; Wine <br />
			Paul Q. Kolderie <br />
			Steve Lawson 
		</div>
		<div class="oneofthree memberslist">
			Ted Leo <br />
			Lushlife <br />
			Erin McKeown <br />
			Amanda Palmer <br />
			She Makes War <br />
			Donita Sparks<br />
			The Swell Season <br />
			Throwing Muses <br />
			Urge Overkill <br />
			Sydney Wayser <br />
			Xiu Xiu <br />
			Zola Jesus <br />
			Anchor Brain <br />
			Army of Bad Luck <br />
			Brassland <br />
			Chunklet <br />
			Domino Record Co <br />
			Fast Weapons
		</div>
		<div class="oneofthree lastcol memberslist">
			Fat Cat Records <br />
			Favorite Gentlemen <br />
			Fenway Recordings <br />
			Frenchkiss Records <br />
			Kill Rock Stars <br />
			Lovepump United <br />
			Memphis Industries <br />
			Overcoat Management <br />
			Redeye <br />
			Sacred Bones <br />
			Saddle Creek <br />
			Simple Social Graces <br />
			Toolshed <br />
			Whitesmith Entertainment
		</div>
		<div class="clearfix">.</div>

		<br />
		<h2 class="tight">CASH Mailing List</h2>
		
		<form method="post" action="http://cashmusic.org/"> 
		<input type="text" name="seed_email" value="" style="width:220px;" />
		<input type="hidden" name="seed_emaillist" value="go" /> 
		<input type="hidden" name="seed_listid" value="1" /> 
		<input type="hidden" name="seed_verified" value="1" />  	
		<input type="submit" value="tell me more" class="button" style="color:#fff;font-weight:normal;" />
		</form> 
		<p class="fineprint">News and announcements. Monthlyish.<br />We won't share your email.</p>
		
		<br /><br />
		<span class="fineprint">Brought to you in part by:<br /></span>
		<a href="https://webfwd.org/"><img src="/assets/images/webfwd_logo.png" width="128" height="43" alt="WebFWD" /></a>
	</div>
</div>

<div id="footer">
	<p><b>&copy; 2011 CASH Music.</b> <a href="http://cashmusic.github.com/">Get the code</a> <a href="http://help.cashmusic.org/">Get help</a> <a href="http://cashmusic.org/donate/" class="donatelink"><b>Donate</b></a></p>
</div>

<script type="text/javascript">
//<![CDATA[ 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
//]]> 
</script><script type="text/javascript">
//<![CDATA[ 
try {var pageTracker = _gat._getTracker("UA-7451645-1");pageTracker._trackPageview();} catch(err) {}
//]]> 
</script>
</body>
</html>