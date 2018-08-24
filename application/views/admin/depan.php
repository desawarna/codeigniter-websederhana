<div class="depan">
<h2>Selamat datang <?php echo $this->session->userdata('nama_lengkap');?></h2>
<ul>
<li><?php echo anchor('administrator','Admin');?></li>
<li><?php echo anchor('admin/berita','Berita');?></li>
<li><?php echo anchor('admin/kategori','Kategori');?></li>
<li><?php echo anchor('administrator/logout','logout');?></li>
</ul>
</div>