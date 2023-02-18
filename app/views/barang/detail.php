<div class="container " style="min-height: 100vh;">
    <div class="card my-5">
    <h5 class="card-header text-center"><?=$data['barang']['judul_barang']; ?></h5>
    <div class="card-body">
        <img class="d-block mx-auto w-50 mb-4" src="<?= BASEURL; ?>/img/<?= $data['barang']['gambar']; ?>"  alt="...">
        <div class="d-flex justify-content-center mx-3 pb-0">
            <p class="card-text text-center mx-3 mb-0"><i class="fa-solid fa-location-dot"></i> <?= $data['barang']['tempat']; ?></p>
            <p class="card-text mx-3 mb-0"><small class="text-muted"> <i class="fa-solid fa-calendar-days"></i> <?= $data['barang']['date']; ?></small></p> 
            
           
        </div>
        <div class="row">
        <div class="col-1"></div>
        <div class="col-10 ">
            <h5 class="card-title"><?=$data['barang']['nama_barang']; ?> <?=Functions::kategori($data['barang']['kategori'])?></h5> 
            <p class="card-text"><?=$data['barang']['deskripsi']; ?></p>
            <p><?=$data['barang']['kontak']; ?></p>
            <a href="https://wa.me/<?=$data['barang']['kontak']; ?>"target="_blank" class="btn btn-success">Hubungi WhatsApp</a>
        </div>
        </div>
    </div>
    </div>
</div>


