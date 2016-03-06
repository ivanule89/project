<?php
get_header();
?>
<!-- <div class="alert alert-success"> 
  <h3>Selamat Datang, Silahkan tambah data user <a href="<?=base_url('admin/adduser');?>" class="alert-link"> Di sini </a></h3>
</div>
-->
<div class="row-fluid">
<ul class="thumbnails">


<li class="span4">
<div class="thumbnail">                 
  <div class="caption">
    <h3>Manajemen Pengguna</h3>
    <p>Halaman untuk memanipulasi data user</p>
    <p><a href="<?=base_url('admin/userview');?>" class="btn btn-info">Masuk</a> </p>
  </div>
</div>
</li>
<li class="span4">
<div class="thumbnail">                 
  <div class="caption">
    <h3>Konfigurasi</h3>
    <p>Halaman untuk melakukan beberapa perubahan data</p>
    <p><a href="<?=base_url('admin/config');?>" class="btn btn-info">Masuk</a> </p>
  </div>
</div>
</li>
<!-- <li class="span4"> 
<div class="thumbnail">                 
  <div class="caption">
    <h3>Database Tools</h3>
    <p>Alat untuk optimasi database</p>
    <p><a href="<?=base_url('admin/dbtool');?>" class="btn btn-info">Masuk</a> </p>
  </div>
</div>
</li>
-->

</ul>
</div>
<?php
get_footer();
?>