<!DOCTYPE html> 
<html> 
<head> 
<title>Download / CASH Music</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="alternate" type="application/rss+xml" title="CASH Music blog RSS Feed" href="http://feeds.feedburner.com/cashmusic" /> 
<meta name="description" content="CASH Music is a nonprofit organization that builds open source digital tools for musicians and labels. Our mission is to help educate and empower artists and their fans to foster a more viable and sustainable future for music." />
<meta name="keywords" content="artists art copyleft open community free open web music musicians code download alternative" />
<link rel="image_src" href="http://cashmusic.org/assets/images/cashmusic_fb.jpg" />

<link href="../assets/css/cashmusic.css" rel="stylesheet" type="text/css" /> 

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

	<?php include('../assets/includes/sidebar.php'); ?>
	
	<div id="mainspc">
		<h1 class="mainpage">Download</h1>

		<p class="callout"><br />
			Open source means developers can grab our code and help out right away, while musicians can get a peek at what's coming soon.
		</p>

		<p>
			At the bottom of the page are a few smaller self-contained releases that helped lead us to this point, but currently all of 
			our active development efforts are going towards the platform. 
		</p><p>	
			Still in developer preview stages, our platform is a distributed PHP framework that makes music tech simple
			and easy to set up. Install it to just about any webhost and you have instant access to
			things like tourdate management, paid downloads, download codes, streaming audio, email collection, and more. All playing
			nice with the third party services you use.
		</p><p>
			You may have noticed links to demos and code in the <b>giant bright callout box</b> just to the left of this. But to be 
			thorough:
		</p><p>
			<a href="https://github.com/cashmusic/DIY">Main platform repository on github</a><br />
			<a href="https://github.com/cashmusic/DIY/issues">Issue tracker (To-do list)</a><br />
			<a href="http://demo.cashmusic.org/interfaces/php/demos/">Live demos</a><br />
			<a href="http://cashmusic.github.com/DIY/">Platform documentation (In-progress)</a><br />
		</p><p>
			We'll soon be publishing a roadmap, including final release dates and a feature schedule. 
		</p>
		<br />
		<h2 class="tight">Older releases</h2>
		<p>
			These are older but still useful releases. The main reason they're not being actively developed is that they're being
			rolled into the platform as well — so the next versions of these tools will be included in the final platform release.
		</p><p>
			<a href="http://cashmusic.org/tools/social/">Tweet For Track</a><br />
			<a href="http://cashmusic.org/tools/social/">Facebook Like For Track</a><br />
			<a href="http://cashmusic.org/tools/flower/">Flower (Simple JavaScript audio/video/interface library)</a>
		</p>

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