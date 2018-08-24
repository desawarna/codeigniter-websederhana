<br>
<table width="700" border="0" align="center">
<tr>
<td>No</td>
<td>Berita</td>
<td>Aksi </td>
<td>Status</td>
</tr>
<?php $i=1;?>
<?php foreach($berita->result() as $row):?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo "<b>$row->judul</b><br/><p>".word_limiter($row->isi,10)."</p>"; ?></td>
<td><?php echo anchor('admin/berita/edit/'.$row->id,'edit')."|".anchor('admin/berita/delete/'.$row->id,'delete',array ('onClick'
=> "return confirm('apakah anda yakin ')")); ?></td>
<td><?php if($row->status==1){echo "Aktif";}else{echo "Nonaktif";}?></td>
</tr>
<?php $i++;?>
<?php endforeach;?>
</table>
<?php echo anchor('admin/berita/tambah','tambah berita');?>