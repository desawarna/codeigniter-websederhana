<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>templates/css/style.css" type="text/css"/>
</head>
<body>
	<div class="main">
	<div class="header"><br>
		<div id="title"><h3><?php echo $title;?></h3></div>
	<div id="nav">
		<ul>
		<li><?php echo anchor(base_url(),'Beranda');?></li>
		</ul>
	</div>
	</div>
	<div class="content_resize">
	<div class="sidebar">
	<div id="widget">
		<h2>Kategori</h2>
		<?php $kategori=$this->mkategori->getkategori();?>
		<ul>
			<?php foreach($kategori->result() as $kat){?>
			<li><?php echo anchor('home/perkategori/'.$kat->id,$kat->nama_kategori);?></li>
			<?php } ?>
		</ul>
	</div>
	</div>
	<div class="right">
		<?php $this->load->view($content); ?>
	</div>
	</div>
		<div class="footer"><?php echo $footer; ?></div>
	</div>
</body>
</html>