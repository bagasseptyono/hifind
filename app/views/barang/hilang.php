<div class="container-fluid">
    <?php foreach($data['barang'] as $barang) : ?>
        <ul>
            <li><h4><?=$barang['judul_barang']; ?></h4></li>
            <li><p><?=$barang['nama_barang']; ?></p></li>
            <li><p><?=$barang['tempat']; ?></p></li>
            <li><p><?=$barang['date']; ?></p></li>
            <li><p><?=$barang['deskripsi']; ?></p></li>
            <li><p><?=$barang['kontak']; ?></p></li>
            <li><img src="<?//= BASEURL;?>/img/icon.png" alt=""></li>
            
        </ul>
    <?php endforeach; ?>
    <hr>


</div>