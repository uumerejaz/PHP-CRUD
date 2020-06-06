<?php

session_start();

//Here add users that can login as admin
$admins =[
 ['user'=>'Admin', 'pass'=>'password', 'rank'=>9],
 ['user'=>'admin2', 'pass'=>'pass', 'rank'=>7],
 ['user'=>'admin-3', 'pass'=>'passx', 'rank'=>4],
 ['user'=>'umar', 'pass'=>'1122', 'rank'=>6]
];

//form to log-in
$re_cnt ='<form action="'. basename($_SERVER['PHP_SELF']) .'" method="post" id="login">
 <label>Name: <input type="text" name="user" id="user" /></label>
 <label>Password: <input type="password" name="pass" id="pass" /></label>
 <input type="submit" value="Log In" id="submit" />
</form>';

//to logout
if(isset($_GET['lgo']) && $_GET['lgo']=='logout'){
  if(isset($_SESSION['adminlog'])) unset($_SESSION['adminlog']);
  if(isset($_SESSION['adminrank'])) unset($_SESSION['adminrank']);
  if(isset($_SESSION['adminix'])) unset($_SESSION['adminix']);
  $re_cnt ='<h4>Logged out</h4>' .$re_cnt;
}
else if(isset($_POST['user']) && isset($_POST['pass'])){ //form data sent to log-in
  //check if correct login data
  $err ='<h4>Incorrect User name or Password</h4>';
  $nradm = count($admins);
  for($i=0; $i<$nradm; $i++){
    if($_POST['user']==$admins[$i]['user'] && $_POST['pass']==$admins[$i]['pass']){
      //set session with admin
      $_SESSION['adminlog'] = $admins[$i]['user'];
      $_SESSION['adminrank'] = $admins[$i]['rank'];
      $_SESSION['adminix'] = $i;
      $err ='';
	  
      break;
    }
  }

  //if error, add it to output
  if($err!='') $re_cnt = $err .$re_cnt;
}

//admin loged
if(isset($_SESSION['adminlog']) && isset($_SESSION['adminrank'])){
  //Here you can set /include additional content for logged admin

  $re_cnt ='<h4>Logged</h4>User: '. $_SESSION['adminlog'] .'<br>Rank: '. $_SESSION['adminrank'] .'<br><br><a href="'. basename($_SERVER['PHP_SELF']) .'?lgo=logout" title="Log-Out" id="logout">Log-Out</a>';
}
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Admin Login</title>
<meta name="description" content="Simple Admin Login System with php, without database. From: https://coursesweb.net/" />
<meta name="author" content="MarPlo" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
body {text-align:center;margin:0 1%; padding:0;}
h1 {
font-size:22px;
margin:10px auto 18px auto;
text-decoration:underline;
}
#content {
margin:0 auto 18px auto;
}
#logout {
display:block;
font-style:oblique;
font-size:17px;
font-weight:700;
margin:0;
}

#login {
position:relative;
width:13em;
margin:10% auto 2em auto;
background:#fefefe;
padding:1em;
border:2px solid #bbb;
font-size:1.2em;
font-weight:700;
}
#login label {
display:block;
margin:.2em 1px;
text-align:left;
}
#login #user, #login #pass {
width:10.7em;
background:#ff1;
padding:.1em;
font-style:oblique;
}
#login #user:focus, #login #pass:focus {
background:#d1e0fb;
}
#login #user {
margin-left:2.2em;
}
#login #submit {
display:block;
margin:1em auto .5em auto;
}
#footer {
margin:0 auto;
}
#cwb {
display:block;
font-style:oblique;
margin:11% auto 15px auto;
}
</style>


<body style="background-color:#DEB887" >
	<div style="background-color: #1C2833; float:middle ; margin:10px 10px 10px 10px" >
		<img src="logo.png" height=150 width=250 >
		<a href="https://www.facebook.com/" target=blank><img src="fb.png" height=50 width=50 style="float:right; margin-top:100px" ><a>
		<a href="https://www.twitter.com/" target=blank><img src="twit.png" height=50 width=50 style="float:right; margin-top:100px" ><a>
		<a href="https://www.instagram.com/" target=blank><img src="insta.png" height=35 width=35 style="float:right; margin-top:105px" ><a>
	</div>
	<nav style="margin:10px 10px 10px 10px" class="navbar-dark bg-dark navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		  <a class="nav-item nav-link active" href="pro.html" >Home </a>
		  <a class="nav-item nav-link" href="about.html" >About Us</a>
		  <a class="nav-item nav-link" href="product.html">Products</a>
		  <a class="nav-item nav-link" href="detail.html">Product Details</a>
		  <a class="nav-item nav-link" href="contact.html">Contact Us</a>
		  <a class="nav-item nav-link active" href="login.php">Admin<span class="sr-only"></span></a>
		</div>
		</div>
	</nav>
<h1>Admin Login</h1>
<div id="content">
<?php echo $re_cnt; ?>
</div>
<a style="margin:200px 10px 10px 10px" href="index.php" >Go to Admin page</a>
<div style="background-color:#1C2833; float:middle;height:150 ; margin:200px 10px 10px 10px" >
	<footer align=center >
		<p style="color:#FF0000">Posted by: Umar Ejaz</p>
		<p style="color:#FF0000">Contact information: <a href="https://www.gmail.com/" target=blank>
		uumerejaz@gmail.com</a></p>
		<p style="color:#FF0000" style="margin-top:100px" >All Rights Reserved</p>
	</footer>
</body>
</html>