<?php foreach($kategori->result() as $kat){
$judul=$kat->nama_kategori;
$id=$kat->id;
}?>
<?php echo form_open('admin/kategori/edit_submit'); ?>
<table width="200" border="0" cellspacing="2" cellpadding="1">
<tr>
<td><input name="kategori" size="40" type="text" value='<?php echo $judul;?>'/></td>
</tr>
<?php echo form_hidden('id',$id);?>
<tr><td><input type="submit" value="Update"/></td>
</tr>
</table>
<?php echo form_close();?>