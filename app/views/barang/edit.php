<div class="container mt-5">
    <h3 class="text-center mb-4">Barang Temuan</h3>
    <form action="<?=BASEURL;?>/Barang/update" method="post" enctype="multipart/form-data">
    <div class="form-row row">
        <div class="col-6">
            <label for="inputJudul">Judul</label>
            <input type="text" class="form-control" placeholder="Judul" name="judul_barang" value="<?=$data['barang']['judul_barang'];?>">
        </div>
        <div class="col-6">
            <label for="inputNama">Nama Barang</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama_barang"value="<?=$data['barang']['nama_barang'];?>">
        </div>
        <div class="col-4">
            <label for="inputLokasi">Lokasi ditemukan</label>
            <input type="text" class="form-control" placeholder="Lokasi" name="tempat" value="<?=$data['barang']['tempat'];?>">

            <label class="control-label" for="date">Date</label>
            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" value="<?=$data['barang']['date'];?>">

            
        </div>
        <div class="form-group col-8">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="deskripsi" ><?=$data['barang']['deskripsi'];?></textarea>
        </div>
        
        <div class="col-4">
            <label for="inputAddress">Kontak yang dapat dihubungi</label>
            <input type="text" class="form-control" placeholder="kontak" name="kontak"value="<?=$data['barang']['kontak'];?>">
        </div>
        <div class="custom-file col-5 mt-3">
            <img src="<?= BASEURL; ?>/img/<?= $data['barang']['gambar']; ?>" alt="" width="60">
            <label class="custom-file-label" for="customFile">Choose file :</label>    
            <input type="file" class="custom-file-input" id="customFile" name="gambar" >
            <input type="hidden" name="gambarLama" value="<?= $data['barang']['gambar']; ?>">  
            <input type="hidden" name="id_barang" value="<?= $data['barang']['id_barang']; ?>">  
        </div>
        
    </div>
    <button type="submit" class="btn btn-primary mt-2">Input</button>
    </form>
</div>