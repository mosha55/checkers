<?php

include 'db.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      
      
      $sql = "SELECT * FROM users WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $username = $row['username'];
      
      $count = mysqli_num_rows($result);
      

		
      if($count == 1) {
         $_SESSION['user'] = $myusername;
         
         header("location: Dashboard.php");
      }else {
         $error = "<script>alert('Invalid Username ! - fb.com/MR.MAX.Gov');</script>";
         
         echo $error;
      }
   }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <title>MaX Checkers - Login</title>
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="/style.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <style>
     
     
     body {
    background-image: url("back.jpg");
    background-repeat: no-repeat;
  
}

 </style>
  <style>
    .tall-row {
        margin-top: 40px;
    }
    .modal {
        position: relative;
        top: auto;
        right: auto;
        left: auto;
        bottom: auto;
        z-index: 1;
        display: block;
    }
	body{
}

div.well{
  height: 250px;
} 

.Absolute-Center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}

.Absolute-Center.is-Responsive {
  width: 50%; 
  height: 50%;
  min-width: 200px;
  max-width: 600px;
  padding: 40px;
}
	textarea{
		padding-top:20px !important;
		padding-bottom:20px !important;
		resize:none;
		background:#222 !important;
		border:1px solid #586e75 !important;
		
	}
	*{
		border-radius:0px !important;
	}
	.label-status{
		position:absolute;
		left:15px;
		
	}
	.label-hitung{
		background:white;
		color:#080808;
		position:absolute;
		right:15px;
	}
    </style>
  </head>
  <body>
      
      <br>
      <marquee><font color="lime">News</font> : <font color="lime">PayPal Valid <font color="yellow">Email</font> Checker => Added ! <font color="red">&</font> PayPal Business Valid <font color="yellow">Email</font> Checker => Added ! <font color="red">&</font> MailGun Valid <font color="yellow">Email</font> Checker => Added ! </font><font color="red">&</font></font> ShutterStock  Valid <font color="yellow">Email</font> Checker => Added !</font></marquee>
      
      <div class="container">
  <div class="row">
    <div class="Absolute-Center is-Responsive">
      <center><h1 style="color:green"><i class="fa fa-bug"></i> <b>MaX Checkers</b></h1></center>
        <form action="" method="post" id="loginForm">
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
            <input class="form-control" type="text" name='username' placeholder="Username"/> 	<br>
             <!--<input class="form-control" type="text" name='password' placeholder="Password"/>-->
          </div>
          <div class="form-group" >
            <button type="submit" class="btn btn-success btn-block">Login</button>
            <form>
            <br><br><br>
<!--<input type="button" class="btn btn-success btn-block" onclick="location.href='reg.php';" value="Register" />-->
<input type="button" name="reg" id="reg" class="btn btn-success btn-block" onclick="location.href='/Register';" value="Register !" />
</form>
    </div>    
  </div>
</div>
<!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->
   </body>
   </html>