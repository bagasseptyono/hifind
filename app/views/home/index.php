<div class=" text-center bg-image vh-100" style="
    background-image: url('img/hifind.jpeg');
    height: 100%;
  ">
    <div class="mask vh-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center ">
            <div class="text-white">
                <div class="jumbotron  mt-5 text-center align-items-center">
                    <h1 class="display-4 text-center "><strong>Hi Find</strong></h1>
                    <p class="lead">Temukan barangmu disini</p>
                    <form action="<?= BASEURL; ?>/barang/cari" method="post">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari Barang" name="keyword" id="keyword">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-light" type="submit" id="tombol-cari">Cari</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <hr class="my-4">
                    <p>Situs Web Penolong untuk kehilangan barang. Temukan barangmu yang hilang. Atau Kembalikan</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="<?= BASEURL ?>/barang" role="button">Posting</a>
                        <a class="btn btn-primary btn-lg" href="<?= BASEURL ?>/barang/hilang" role="button">Cari Barang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>