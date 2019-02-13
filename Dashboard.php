<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: /index.php');
    exit;
}
include 'db.php';

$as = $_SESSION['user'];

$sql = "SELECT * from users where username='$as'";

$ass = mysqli_query($db,$sql);

while($row = mysqli_fetch_array($ass)){

?>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><meta http-equiv="X-Frame-Options" content="deny">
    
</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="shortcut icon" href="/logo.png" type="image/x-icon">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/styled.css">
<title>Dashboard - MaX Checkers</title>
<link rel="shortcut icon" href="/logo.png" type="image/x-icon">

</head>
<body><div id="wrapper">
<header>
<style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.zopim { display: none !important }</style>
<nav class="navbar navbar-default navbar-static-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/Dashboard.php"><i class="fa fa-fw fa-cubes"></i> Home</a>

</div>

<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Valid Checker <span class="caret"></span> </a>
<ul class="dropdown-menu" role="menu">
<li><a href="/Checkers/PayPal_Valid">[💀] PayPal Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/PayPalB_Valid">[💀] PayPal Business Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/Apple_Valid">[💀] Apple Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/Amazon_Valid">[💀] Amazon Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/eBay_Valid">[💀] eBay Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/z8Games_Valid">[💀] Z8Games Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/Spotify_Valid">[💀] Spotify Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/Neteller_Valid">[💀] Neteller Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/MailGun_Valid">[💀] MailGun Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/ShutterStock_Valid">[💀] ShutterStock Valid Email Checker [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/xVideos_Valid">[💀] xVideos Valid Email Checker [💀]</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Online Banking <span class="caret"></span> </a>
<ul class="dropdown-menu" role="menu">
<li><a href="/Checkers/USp_Valid">[💀] US Bank Valid Email Checker - Presonl [💀]</a></li>
<li class="divider"></li>
<li><a href="/Checkers/USb_business">[💀] US Bank Valid Email Checker - Business [💀]</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Card Checker <span class="caret"></span> </a>
<ul class="dropdown-menu" role="menu">
<li><a href="/Card/WorldPay_Data_Valid/">[💀] WorldPay | Data [💀]</a></li>
</ul></ul>
<ul class="nav navbar-nav navbar-right">
    <li><a href="logout.php">Logout</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
    
    <li><a>Username : <?php echo $row['username']; ?></a></li>
    <li><a>Credit : <?php echo $row['credit']; ?></a></li>
    </ul>
    </ul>
</div>
</div>
</nav>
<script language="javascript" type="text/javascript">
if (window!= top) top.location.href = location.href;
</script>
</header>
<br>
<font size="12" color="lime">&nbsp&nbsp&nbspMaX <font size="12" color="white" style="text-shadow: red 0 0 15px;">Checkers</font></font><br>
<font size="5" color="lime">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBest <font size="5" color="red">Checkers</font> In The World <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size="5" color="yellow">Buy Credit</font> : info<font size="5" color="red">@</font>maxcheckers.com</a><br>&nbsp&nbsp&nbsp&nbsp&nbsp Or <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsphttps://www.fb.com/<font size="5" color="red">MR.MAX.Gov</font>
<br><br>
<font color="lime" size="5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUsername : <font size="5" color="red">[</font> <?php echo $row['username']; ?> <font size="5" color="red">]</font></font><br>
<font color="lime" size="5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCredit : <font size="5" color="red">[</font> <?php echo $row['credit']; ?> <font size="5" color="red">]</font></font>

<?php

$db = mysql_connect('localhost','belldiqi_mcusers','F*w9f$ZjuG$_','belldiqi_mcusers');
mysql_select_db("belldiqi_mcusers", $db);

$result = mysql_query("SELECT * FROM users", $db);
$num_rows = mysql_num_rows($result);

?>
<br>
<font size="5" color="lime">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTotal Users</font> : <font size="5" color="red">[</font> <?php echo "$num_rows"; ?><font size="5" color="red"> ]</font></font>
<br><br>
<font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">Apple <font color="lime" size="3">=> Added !</font></font></font><br>
<font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">Amazon <font color="lime" size="3">=> Added !</font></font></font><br>
<font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">eBay <font color="lime" size="3">=> In Update !</font></font></font><br>
<font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">z8Games <font color="lime" size="3">=> Added !</font></font></font><br>
<font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">PayPal <font color="lime" size="3">=> Added !</font></font></font><br>
<font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">PayPal [ Business ] <font color="lime" size="3">=> Added !</font></font></font><br>
<font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">PayPal [ Detect Country ] <font color="lime" size="3">=> Soon..</font></font></font><br><font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">MailGun <font color="lime" size="3">=> Added !</font></font></font><br><font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">ShutterStock <font color="lime" size="3">=> Added !</font></font></font><br><font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">UsBank <font color="lime" size="3">=> Added !</font></font></font><br><font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">Spotify <font color="lime" size="3">=> Added !</font></font></font><br><font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">Neteller <font color="lime" size="3">=> Added !</font></font></font><br><font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Email ] <font color="red" size="3">xVideos <font color="lime" size="3">=> Added !</font></font></font><br>
<font color="yellow" size="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[ Card ] <font color="red" size="3">WorldPay | Data <font color="lime" size="3">=> Added !</font></font></font>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c52b493ab5284048d0fb3b1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</body></html>
<?php
}
?>