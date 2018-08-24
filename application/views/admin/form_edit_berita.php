<?php foreach($berita->result() as $brt){
$judul=$brt->judul;
$isi=$brt->isi;
$kategori_id=$brt->id_kategori;
$status=$brt->status;
$id=$brt->id;
}?>
<?php echo form_open('admin/berita/edit_submit');?>
<table width="200" border="0" cellspacing="2" cellpadding="1" align="center">
<tr>
<td>Judul<br><input name="judul" type="text" size="50" value='<?php echo $judul;?>' /></td>
</tr>
<tr>
<td>Isi Berita<br><textarea name="isi" cols="50" rows="20"><?php echo $isi;?></textarea></td>
</tr>
<tr>
<td><select name="kategori">
<?php
$kat=$this->mkategori->getkategori();
foreach($kat->result() as $kategori):
if($kategori_id==$kategori->id){
$select="selected='elected'";
}
else {
$select="";
}
?>
<option value="<?php echo $kategori->id;?>" <?php echo $select;?>><?php echo $kategori->nama_kategori?></option>
<?php endforeach;?>
</select>
</td>
</tr>
<tr>
<td><select name="status">
<?php if ($status==1){?>
<option value="1" selected="selected">Aktif</option>
<option value="0" >Nonaktif</option>
<?php }else{?>
<option value="1" >Aktif</option>
<option value="0" selected="selected">Nonaktif</option>
<?php }?>
</select>
</td>
</tr>
<?php echo form_hidden('id',$id);?>
<tr>
<td><input type="submit" value="Update"></td>
</tr>
</table>
<?php echo form_close();?>