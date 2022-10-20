<div class="container">
    <div class="card my-5">
    <h5 class="card-header text-center"><?=$data['barang']['judul_barang']; ?></h5>
    <div class="card-body">
        <img class="d-block mx-auto w-50 mb-4" src="<?= BASEURL; ?>/img/<?= $data['barang']['gambar']; ?>"  alt="...">
        <div class="d-flex justify-content-center mx-3">
            <p class="card-text text-center mx-3"><i class="fa-solid fa-location-dot"></i> <?= $data['barang']['tempat']; ?></p>
            <p class="card-text mx-3"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i> <?= $data['barang']['date']; ?></small></p>
        </div>
    
        <h5 class="card-title"><?=$data['barang']['nama_barang']; ?></h5>
        <p class="card-text"><?=$data['barang']['deskripsi']; ?></p>
        <p><?=$data['barang']['kontak']; ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        
    </div>
    </div>
</div>


