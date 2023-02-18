<div class="container temuanku">
<h4 class="text-center my-2">BARANG TEMUAN SAYA</h4>
    <?php
        Flasher::Message();
    ?>
    <?php foreach (array_reverse($data['barang'])  as $barang) : ?>
        <div class="card mb-3 mt-4" >
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="<?= BASEURL; ?>/img/<?= $barang['gambar']; ?>" class="img-thumbnail " alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <a class="text-dark h4 " href="<?= BASEURL;?>/barang/detail/<?= $barang['id_barang']?>" style="text-decoration: none;"><?= $barang['judul_barang']; ?></a>
                        <p class="card-text"><?= $barang['deskripsi']; ?></p>
                        <p class="card-text"><i class="fa-solid fa-location-dot"></i> <?= $barang['tempat']; ?></p>
                        <p class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i> <?= $barang['date']; ?></small></p>
                        <?=Functions::kategori($barang['kategori'])?>
                    </div>
                </div>
                <div class="col-md-2 mx-auto d-flex flex-column align-items-center justify-content-around card-body">
                    <a class="badge bg-primary w-100 py-2"  href="<?= BASEURL;?>/barang/detail/<?= $barang['id_barang']?>" >View</a>
                    <a class="badge bg-warning w-100 py-2" href="<?= BASEURL;?>/barang/edit/<?= $barang['id_barang']?>" >Edit</a>
                    <a class="badge bg-danger w-100 py-2" href="<?= BASEURL;?>/barang/hapus/<?= $barang['id_barang']?>"  onclick="return confirm('Hapus data?');">Hapus</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>




</div>

