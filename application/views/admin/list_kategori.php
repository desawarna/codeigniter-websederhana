<?php echo anchor('admin/kategori/tambah','tambah kategori');?><br>
<?php $i=1; ?>
<table width="200" border="0" cellspacing="2" cellpadding="1" align="center">
<tr>
<td>No</td>
<td>Kategori</td>
<td>Aksi</td>
</tr>
<?php foreach($kategori->result() as $kat):?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $kat->nama_kategori;?></td>
<td><?php echo anchor('admin/kategori/edit/'.$kat->id,'edit')."|".anchor('admin/kategori/delete/'.$kat->id,'delete',array
('onClick' => "return confirm('apakah anda yakin ')"));?></td>
</tr>
<?php $i++; endforeach;?>
</table>