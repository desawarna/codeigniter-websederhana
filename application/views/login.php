<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Administrator</title>

<style type="text/css">
	body{
	background:#FFFFFF;
	}

	.box{
	background:#F0FEFF;
	width:300px;
	height:170px;
	padding:10px;
	margin:auto;
	margin-top:100px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	-moz-box-shadow:0 0 10px #333;
	-webkit-box-shadow:0 0 10px #333;
	-box-shadow:0 0 10px #333;
	}

	input[type=submit]{
	background:#0099FF;
	color:#FFFFFF;
	width:100px;
	height:40px;
	border:none;
	margin-top:10px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	-moz-box-shadow:0 0 2px #333;
	-webkit-box-shadow:0 0 2px #333;
	-box-shadow:0 0 2px #333;
	}

	input[type=submit]:hover{
	background:#0000FF;
	}
	</style>

</head>
<body>

<div class="box">
<h2>Login Administrator</h2>
<?php echo form_open('administrator/login');?>
<table width="200" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>Username</td><td>&nbsp;</td> <td><input name="username" type="text" size="30"></td>
</tr>
<tr>
<td>Password</td><td>&nbsp;</td><td><input name="password" type="password" size="30"></td>
</tr>
<tr>
<th></th>
<th>&nbsp;</th>
<th><input type="submit" value="Login"></th>
</tr>
</table>
<?php echo form_close();?>
</div>

</body>
</html>