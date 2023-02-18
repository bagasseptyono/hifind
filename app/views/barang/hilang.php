<div class="container" style="min-height: 100vh;">
    <h4 class="text-center my-2">BARANG HILANG</h4>
    <form action="<?= BASEURL; ?>/barang/cari" method="post">
            <div class="row mb-3 justify-content-end">
                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Barang" name="keyword" id="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="tombol-cari">Cari</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    <?php foreach (array_reverse($data['barang']) as $barang) : ?>
        <div class="card mb-3 mt-4" >
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="<?= BASEURL; ?>/img/<?= $barang['gambar']; ?>" class="img-thumbnail " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a class="text-dark h4 " href="<?= BASEURL;?>/barang/detail/<?= $barang['id_barang']?>" style="text-decoration: none;"><?= $barang['judul_barang']; ?> </a>
                        <p class="card-text"><?= $barang['deskripsi']; ?></p>
                        <p class="card-text"><i class="fa-solid fa-location-dot"></i> <?= $barang['tempat']; ?></p>
                        <p class="card-text"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i> <?= $barang['date']; ?></small></p>
                        <?=Functions::kategori($barang['kategori'])?>
                    </div>
                </div>
                <div class="col-md-2 mx-auto d-flex align-items-center justify-content-center">
                    <a class="badge bg-primary w-100 py-2"  href="<?= BASEURL;?>/barang/detail/<?= $barang['id_barang']?>" >View</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>