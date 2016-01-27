<?php session_start(); ?>
</center>
<!DOCTYPE html> 
<html>
<head>
<title>SMTP Mail Server</title>
<style>
body{margin-top:-2px}
table{margin:auto;}

a{border-radius:10px;
text-decoration:none;
margin-left:6%;
font-size:25px;
font-style:italic}
a:hover{color:#FFFF00;background:#000000}
</style>
</head>
<body>
<table width="100%" height="100%" border="0">
  <tr>
    <td height="165" colspan="2" bgcolor="#663399<h1 align="center"><font color="#FFFF00" face="cursive"><h1>LaraMail integrates with SMTP protocol and provides secure authentication over SSL and TLS</h1></td>
  </tr>
  <tr>
    <td height="42" colspan="2" bgcolor="##000000">
    <a href="index.php?option=registration">REGISTRATION</a>
	<a href="index.php?option=login">LOGIN</a>
	<a href="index.php?option=contact">CONTACT</a>

	</td>
  </tr>
  <tr>
    <td width="801" height="450" valign="top" bgcolor="#0198E1">
	<?php
	@$opt=$_GET['option'];
	//echo $opt;
	if($opt=="")
	{
	?>
	<h2> LaraMail is a full fledged mail service that implements a filesystem in a web application to authorise the email client with an account in order to perform all mail operations such as:<h2>
<ul style="list-style-type:circle">
  <li>Compose an email</li>
  <li>Send an email</li>
  <li>Receive an email</li>
  <li>Saving an email in the form of draft</li>
  <li>Showing the detail of the received mail</li>
  <li>Saving the email ids in contact list</li>
  <li>Recovery by password </li>
  <li>Can send alternative plaintext version of email for non-HTML email client
</ul>

	<?php
	}
	else
	{
	switch($opt)
	{
	case 'login';
	include('login.php');
	break;
	case 'registration';
	include('regis.php');
	break;
	case 'contact';
	include('contact.php');
	break;
	case 'fpass';
	include('forgotpass.php');
	break;
	}
	}
	?>
	</td>
    <td width="275" bgcolor="#999999" valign="top"><h2></h2></td>
     </tr>
  <tr>
    <td colspan="3" align="center">Developed by Nehul Yadav</td>
  </tr>
</table>
</body>
</html>
