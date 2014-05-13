<!DOCTYPE html>
<html lang='en'>
<head>
<meta content="authenticity_token" name="csrf-param"/>
<meta content="WLQPBt5DSA/ue38ImeVyfQKRDLTg+oEP2wtwWORATLw=" name="csrf-token"/>
<meta charset='utf-8'>
<title>
TheAppleTreeMC - Minecraft
</title>
<script type="text/javascript">
//<![CDATA[
window.__CF=window.__CF||{};window.__CF.AJS={"ga_key":{"ua":"UA-30515952-1","ga_bs":"2"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) { var CloudFlare=[{verbose:0,p:1375383901,byc:0,owlid:"cf",mirage:{responsive:0,lazy:0},mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/abv=2551830536/"},atok:"c227b5a4bad12fc223195e0fab744820",zone:"oc.tc",rocket:"0",apps:{"ga_key":{"ua":"UA-30515952-1","ga_bs":"2"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/abv=340409193/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link href="favicon-v=2.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
<link href="assets/application-e1ca5c9c52cc8780732651d076cabdc2.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lato:700,400,300" media="screen" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.2/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="assets/application-f45ad83d136dfbc80fc56441f3f929ce.js" type="text/javascript"></script>
<script src="assets/forem/admin/members-eb76b74015975d0e3c64dbe3d44b2c3a.js" type="text/javascript"></script>
<script>/* CloudFlare analytics upgrade */
</script>
<script>
  //<![CDATA[
    var _gauges = _gauges || [];
    (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '517989a6613f5d3334000042');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
    })();
  //]]>
</script>
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-30515952-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
</head>
<body>
<nav class='navbar navbar-static-top'>
<div class='navbar-inner'>
<div class='container'>
<a class='brand' href='index.php' style='width: 190px;'>

TheAppleTreeMC
</a>
<div class='nav-collapse'>
<ul class='nav'>
<li>
<a href='forums'>
<i class='icon-pencil'></i>
Forums
</a>
</li>
<li>
<a href='bans'>
<i class='icon-user'></i>
Bans
</a>
</li>
<li>
<a href='statistics'>
<i class='icon-star'></i>
Statistics
</a>
</li>
<li>
</li>
<li>
<a href='http://theappletreemc.buycraft.net'>
<i class='icon-shopping-cart'></i>
Shop
</a>
</li>
</ul>
<ul class='nav pull-right'>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='index.html#'>
<i class='icon-locks'></i>
<b class=''></b>
</a>
<ul class='dropdown-menu'>
<li>
</i><a href='admin/'>Admin Area</a>

</li>
<li>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</nav>
<div class='carousel slide' id='hero' style='position: absolute;'>
<div class='carousel-inner' style='z-index: -1'>
<div class='active item'>
<img src='assets/index/mark.jpg'>
</div>

</div>
</div>
<div class='jumbotron masthead'>
<div class='container'>
<h1>TheAppleTreeMC</h1>
<p>The awesome server that lets you play<br>minecraft anywhere, anytime.</p>
<a class='btn btn-primary btn-large' href='#'>Play Now &raquo;</a>
</div>
</div>
<div class='bs-docs-social'>
<div class='container'>
<ul class='bs-docs-social-buttons'>
<li>Latest Announcements:</li>
<li>
<?php
$con=mysqli_connect("96.47.236.69","root","jamiedukerocks8123","resources");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM site");

while($row = mysqli_fetch_array($result))
  {
  echo $row['news'] . "       " . $row[''];
  echo "<br>";
  }
mysqli_close($con);

?> 

</li>
</ul>
</div>
</div>
<div class='container'>
<div class='flash' style='margin-top: 20px;'>
</div>
<style>body{padding-bottom:40px;}</style>
<script>$(function(){$('#hero').carousel('cycle')});</script>
<div class='row marketing'>
<div class='span4'>
<img src='assets/index/variety-7e444ff3bc0e16c694f45f5c55be6c43.png'>
<h2>Variety</h2>
<p>TheAppleTreeMC provides many styles to a wide variety of players. Unlike other servers, we specialize in offering a unique and exclusive experience to everyone.</p>
<p>

</p>
</div>
<div class='span4'>
<img src='assets/index/competition-88f601a137daa360a7a3de63b5bb12cd.png'>
<h2>Competition</h2>
<p>Our servers appeal to a wide range of audiences with varying skills and play styles. With such a large and diverse player base, you'll never be bored fighting the same people over and over again!</p>
<p>

</p>
</div>
<div class='span4'>
<img src='assets/index/real.png'>
<h2>Reliability</h2>
<p>TheAppleTreeMC was designed with scalability and uptime in mind. Development continues at a rapid pace, providing you and your friends with the best gameplay possible.</p>
<p>

</p>
</div>
</div>
<hr>
<div class='modal hide fade' id='contact'>
<div class='modal-header'>
<button class='close' data-dismiss='modal'></button>
<h3>

</h3>
</div>

</div>
<footer>

    <center>
<h3>Information</h3>
<table class='table table-striped'>
<tbody>
<tr>
<td>
<b>Connect To:</b>
</td>
<td>
<ul class='unstyled'>
<li class='lead'>TheAppleTreeMC.com</li>

</ul>
</td>
</tr>
<tr>
<td>
<b>Versions</b>
</td>
<td>
<ul></ul>
<li>1.7.4</li>
<li>1.7.2</li>
</td>
</tr>
<tr>
<td>
<b>Status</b>
</td>
<td>
<i class='icon-minus-sign'></i>
1 server offline
</td>
</tr>
<tr>
<td>
<b>Last Updated</b>
</td>
<td>
less than a minute
ago
</td>
</tr>
</tbody>
</table>
</a>
</li>
</ul>
    <hr>
    <center>
    <ul class='nav nav-pills'>
<li class='pull-left'>
<a>&copy; 2013 TheAppleTreeMC</a>
    
  
</li>
</footer>
</div>
</body>

</html>
