<div class="content">
	<?php foreach($berita->result() as $row):?>
<div id="berita">
<h2><?php echo $row->judul; ?></h2>
<p><?php echo $row->isi; ?></p>
<p><?php echo anchor('home','Kembali');?></p>
<hr>
</div>
	<?php endforeach;?>
<div id="komentar">
<div id="listkomentar">
<ul>
	<?php foreach($komentar->result() as $kmt):?>
<li>
<h4><?php echo $kmt->nama; ?></h4>
<p><?php echo $kmt->isi_komentar; ?></p>
<hr>
</li>
	<?php endforeach;?>
</ul>
</div>
	<?php echo form_open('home/addkoment'); ?>
	<?php echo form_hidden('id',$row->id); ?>
<table width="200" border="0" cellspacing="2" cellpadding="1">
<tr>
<td>Nama</td><td>&nbsp;</td><td><input type="text" name="nama" size="50"/></td>
</tr>
<tr>
<td>Email</td><td>&nbsp;</td><td><input type="text" name="email" size="50"/></td>
</tr>
<tr>
<td>Website</td><td>&nbsp;</td><td><input type="text" name="website" size="50"/></td>
</tr>
<tr>
<td>&nbsp;</td><td>&nbsp;</td><td><textarea name="komentar" cols="40" rows="10"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Submit" /></td>
</tr>
</table>
	<?php echo form_close();?>
</div>
</div>