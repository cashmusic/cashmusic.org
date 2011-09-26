<?php
	include('../../seed/0.2/logic/prep.php');
	include('../../seed/0.2/logic/paypal.php');
	include('../../seed/0.2/logic/emaillist.php');
?>
<!DOCTYPE html> 
<html> 
<head> 
<title>Donate / CASH Music</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="alternate" type="application/rss+xml" title="CASH Music blog RSS Feed" href="http://feeds.feedburner.com/cashmusic" /> 
<meta name="description" content="CASH Music is a nonprofit organization that builds open source digital tools for musicians and labels. Our mission is to help educate and empower artists and their fans to foster a more viable and sustainable future for music." />
<meta name="keywords" content="artists art copyleft open community free open web music musicians code download alternative" />
<link rel="image_src" href="http://cashmusic.org/assets/images/cashmusic_fb.jpg" />

<link href="../assets/css/cashmusic.css" rel="stylesheet" type="text/css" /> 
<style type="text/css">
	#donationlinks {text-align:center;font-size:54px;line-height:1em;font-family:OstrichSansRoundedMedium,"helvetica neue",helvetica,arial,sans-serif;font-weight:normal;}
	#donationlinks a {font-weight:normal;}
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

	<?php include('../assets/includes/sidebar.php'); ?>
	
	<div id="mainspc">
		<h1 class="mainpage">Donate</h1>
		
		<?php
		session_start();
		switch ($_SESSION['seed_state_payment']) {
			case 'completed':
				?>
				
				<p class="callout"><br />
					Thank you! You can print this page as a receipt of your donation if you'd like. Payment details are included below.
				</p>
				
				<p>
					<b>Payment Details:</b><br />
					Donation from: <?php echo urldecode($_SESSION['seed_details']['EMAIL']); ?><br />
					Timestamp: <?php echo urldecode($_SESSION['seed_details']['TIMESTAMP']); ?><br />
					Amount: <?php echo urldecode($_SESSION['seed_details']['PAYMENTREQUEST_0_AMT']); ?>
				</p>
				<p class="fineprint"> 
					CASH Music, Incorporated is a registered non-profit in Rhode Island, and has pending 501(c)3 tax-exempt status.
					Our EIN is 26-3804037.
				</p>
				<?php
				// once we're done flush session data
				$_SESSION = array();
				session_destroy();
				session_write_close();
		        break;
		    case 'failed':
				echo '<p><br /><br />Sorry, the payment failed. Please check your login and payment source and <a href="./?seed_payment=go">try again</a>.</p>';
				// once we're done flush session data
				$_SESSION = array();
				session_destroy();
				session_write_close();
		        break;
		    case 'uncompleted':
				echo '<p><br /><br />Sorry, your transaction could not be completed. Please <a href="./?seed_payment=go">try again</a>.</p>';
				// once we're done flush session data
				$_SESSION = array();
				session_destroy();
				session_write_close();
				break;
			default:
				?>

		<p class="callout"><br />
			CASH Music is a nonprofit organization. We exist to serve our mission of sustainability for artists and music.
		</p>

		<p>
			We believe that establishing a neutral organization focused on providing music technology for the open web is vital to the long-term health of the new music industry. To do that we need your help.
		</p><p>
			Please consider making a donation via Paypal. (You do <b>not</b> need a Paypal account. One-time credit card transactions are also accepted in the Paypal checkout process.)
		</p>

		<div id="donationlinks">
			<div class="oneoffour firstcol">
			<a href="./?seed_payment=go&amp;seed_sku=donation&amp;seed_addtoamt=25">$25</a>
			</div>
			<div class="oneoffour">
			<a href="./?seed_payment=go&amp;seed_sku=donation&amp;seed_addtoamt=50">$50</a>
			</div>
			<div class="oneoffour">
			<a href="./?seed_payment=go&amp;seed_sku=donation&amp;seed_addtoamt=100">$100</a>
			</div>
			<div class="oneoffour lastcol">
			<a href="./?seed_payment=go&amp;seed_sku=donation&amp;seed_addtoamt=500">$500</a>
			</div>
			<div class="clearfix">.</div>
		</div>

		<div id="supportformspc">
			<br />
			Or any amount that you'd like:<br />
			<form method="post" action="#"> 
			<input type="text" name="seed_addtoamt" value="5.00" style="width:5em;" />
			<input type="hidden" name="seed_payment" value="go" /> 
			<input type="hidden" name="seed_sku" value="donation" /> 
			<input type="submit" value="contribute" class="button"" /><br /> 
			<img src="/assets/images/paypal_logo_b.png" width="38" height="12" alt="paypal" /> 
			</form> 
			<span class="fineprint"> 
			CASH Music is a registered non-profit in Rhode Island, and has pending 501(c)3 tax-exempt status.
			</span>
		</div>
		
		<?php
		}
		?>
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