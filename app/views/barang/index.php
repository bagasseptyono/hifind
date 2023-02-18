    <div class="container my-5">
        <h3 class="text-center mb-4">Barang Temuan</h3>
        <?php
        Flasher::Message();
        ?>
        


        <form action="<?= BASEURL; ?>/Barang/tambah" method="post" enctype="multipart/form-data">
            <div class="form-row row">
                <div class="col-6">
                    <label for="inputJudul">Judul</label>
                    <input type="text" class="form-control" placeholder="Judul" name="judul_barang" required>
                </div>
                <div class="col-6">
                    <label for="inputNama">Nama Barang</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama_barang" required>
                </div>
                <div class="col-4">
                    <label for="inputLokasi">Lokasi ditemukan</label>
                    <input type="text" class="form-control" placeholder="Lokasi" name="tempat" required>

                    <label class="control-label" for="date">Date</label>
                    <input class="form-control" id="date" name="date" type="date" required />

                    <label for="inputAddress">Kontak yang dapat dihubungi</label>
                    <input type="text" class="form-control" placeholder="628123666175" name="kontak" required>

                </div>
                <div class="form-group col-8">
                    <label for="inputLokasi">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori" required>
                        <option selected>Menemukan</option>
                        <option value="Kehilangan">Kehilangan</option>
                    </select>
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="deskripsi" required></textarea>
                </div>
                <div class="custom-file col-5 my-3">
                    <label class="custom-file-label" for="customFile">Choose file :</label>
                    <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*">
                </div>

            </div>
            <button type="submit" class="btn btn-primary mt-2">Input</button>
        </form>
    </div>