<?php echo form_open('admin/berita/submit');?>
<table width="200" border="0" cellspacing="2" cellpadding="1" align="center">
<tr>
<td>Judul<br><input name="judul" type="text" size="50"/></td>
</tr>
<tr>
<td>Isi Berita<br><textarea name="isi" cols="50" rows="20"></textarea></td>
</tr>
<tr>
<td><select name="kategori">
<?php
	$kat=$this->mkategori->getkategori();
	foreach($kat->result() as $kategori):?>
	<option value="<?php echo $kategori->id;?>" ><?php echo $kategori->nama_kategori?></option>
<?php endforeach;?>
</select>
</td>
</tr>
<tr>
<td>
	<select name="status">
	<option value="1" selected="selected">Aktif</option>
	<option value="0" >Nonaktif</option>
	</select>
</td>
</tr>
<tr>
<td><input type="submit" value="Post">|<input type="reset" value="Reset"></td>
</tr>
</table>
<?php echo form_close();?>