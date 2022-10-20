<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="wrap">
                    <div class="img" style="background-image: url(<?= BASEURL ?>/img/bg-1.jpg);"></div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <center>
                                    <h3 class="mb-4">Masuk HiFind</h3>
                                </center>

                            </div>

                        </div>
                        <?php
                        Flasher::Message();
                        ?>
                        <form action="<?= BASEURL; ?>/Login/log" method="POST" class="signin-form">
                            <div class="form-group mt-3">
                                <label class="form-control-placeholder" for="username">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-placeholder" for="password">Password</label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <input id="password-field" type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3 mt-2">Masuk</button>
                            </div>
                            <!-- <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Ingat saya
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Lupa Password?</a>
                                </div>
                            </div> -->
                        </form>
                        <p class="text-center">Belum memiliki akun? <a data-toggle="tab" href="<?= BASEURL;?>/user/registrasi" >Klik disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>