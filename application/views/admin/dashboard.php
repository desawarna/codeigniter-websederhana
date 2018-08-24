<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator</title>

<style type="text/css">
body{
background:#FFFFFF;
}
a{
padding:2px;
background:#FF99FF;
text-decoration:none;
}
a:hover{
background:#999933;
}
.main{
width:960px;
margin:auto;
}
.header{
width:100%;
height:70px;
background:#00CCFF;
}
.header ul{
list-style:none;
}
.header ul li {
float:left;
margin-left:4px;
}
.header ul li a {
color:#FFFFFF;
padding:10px;
background:#000000;
text-decoration:none;
}
.header ul li a:hover{
background:#0000FF;
}
.content{
width:100%;
background:#FFFFFF;
border:1px solid #000000;
}
.footer{
background:#000000;
color:#66FF00;
width:100%;
height:45px;
}
.depan{
width:400px;
margin-left:100px;
height:400px;
}
.depan ul{
list-style:none;
}
.depan ul li{
float:left;
margin-left:10px;
margin:10px;
margin-top:30px;
margin-bottom:30px;
}
.depan ul li a{
padding:20px;
border:1px solid #666666;
text-decoration:none;
color:#000000;
}
.depan ul li a:hover{
background:#CCCCCC;
}
td{
border:1px solid #000000;
}
</style>

</head>
<body>
<div class="main">
<div class="header">
<ul>
<li><?php echo anchor('administrator','Admin');?></li>
<li><?php echo anchor('admin/berita','Berita');?></li>
<li><?php echo anchor('admin/kategori','Kategori');?></li>
<li><?php echo anchor('administrator/logout','logout');?></li>
</ul>
</div>
<div class="content">
<?php $this->load->view($content);?>
</div>
<div class="footer">
&copy; eko
</div>
</div>
</body>
</html>