<div class="content">
<?php foreach($berita->result() as $row):?>
<div id="berita">
<h2><?php echo $row->judul; ?></h2>
<p><?php echo word_limiter($row->isi,20);?></p> <!--membatasi 20 kata -->
<p><?php echo anchor('home/selengkapnya/'.$row->id, 'selengkapnya'); ?></p>
<hr>
</div>
<?php endforeach; ?>
</div>
