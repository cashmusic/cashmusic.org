<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html> 
<html> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/rss+xml" title="CASH Music blog RSS Feed" href="http://feeds.feedburner.com/cashmusic" /> 
<meta name="description" content="CASH Music is a nonprofit organization that builds open source digital tools for musicians and labels. Our mission is to help educate and empower artists and their fans to foster a more viable and sustainable future for music." />
<meta name="keywords" content="artists art copyleft open community free open web music musicians code download alternative" />
<link rel="image_src" href="http://cashmusic.org/assets/images/cashmusic_fb.jpg" /> 

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
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	
	/* 
	<div class="nav_news navlink<?php if ($post->post_name == 'news' || $post->post_type == 'post') {echo ' navselected';} ?>"><a href="/news/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clear.gif" alt="news" /></a></div>
	*/
?>
</head>

<body <?php body_class(); ?>> 

<div id="wrap"> 
	<div id="topspc">
		<div id="navspc">
			<a href="http://cashmusic.org/">Home</a> <a href="http://cashmusic.org/download/">Download</a> <a href="http://cashmusic.org/donate/">Donate</a> <a href="http://cashmusic.org/about/">About</a> <a href="http://blog.cashmusic.org/">Blog</a> <a href="http://help.cashmusic.org/">Help</a>
		</div>
	</div>

	<?php include(dirname(__FILE__) . '/../../../../../cashmusic.org/html/assets/includes/sidebar.php'); ?>
	
	<div id="mainspc">
		<?php if (is_home()) { echo '<h1 class="mainpage">Blog</h1>'; } ?>