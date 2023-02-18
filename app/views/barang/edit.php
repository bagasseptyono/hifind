<div class="container mt-5">
    <h3 class="text-center mb-4">Barang Temuan</h3>
    <form action="<?=BASEURL;?>/Barang/update" method="post" enctype="multipart/form-data">
    <div class="form-row row">
        <div class="col-6">
            <label for="inputJudul">Judul</label>
            <input type="text" class="form-control" placeholder="Judul" name="judul_barang" value="<?=$data['barang']['judul_barang'];?>" required>
        </div>
        <div class="col-6">
            <label for="inputNama">Nama Barang</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama_barang"value="<?=$data['barang']['nama_barang'];?>" required>
        </div>
        <div class="col-4">
            <label for="inputLokasi">Lokasi ditemukan</label>
            <input type="text" class="form-control" placeholder="Lokasi" name="tempat" value="<?=$data['barang']['tempat'];?>" required>

            <label class="control-label" for="date">Date</label>
            <input class="form-control" id="date" name="date" type="date" value="<?=$data['barang']['date'];?>"  />
            

            <label for="inputAddress">Kontak yang dapat dihubungi</label>
            <input type="text" class="form-control" placeholder="6281236661" name="kontak"value="<?=$data['barang']['kontak'];?>" required>
        </div>
        <div class="form-group col-8">
            <label for="inputLokasi">Kategori</label>
            <select class="form-select" aria-label="Default select example" name="kategori" required>
                <option selected>Menemukan</option>
                <option value="1">Kehilangan</option>
            </select>
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="deskripsi" required><?=$data['barang']['deskripsi'];?> </textarea>
        </div> 
        
        
        <div class="custom-file col-5 mt-3">
            <img src="<?= BASEURL; ?>/img/<?= $data['barang']['gambar']; ?>" alt="" width="60">
            <label class="custom-file-label" for="customFile">Choose file :</label>    
            <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*">
            <input type="hidden" name="gambarLama" value="<?= $data['barang']['gambar']; ?>">
            <input type="hidden" name="tanggalLama" value="<?= $data['barang']['date']; ?>">
            <input type="hidden" name="id_barang" value="<?= $data['barang']['id_barang']; ?>">  
        </div>
        
    </div>
    <button type="submit" class="btn btn-primary my-3">Input</button>
    </form>
</div>