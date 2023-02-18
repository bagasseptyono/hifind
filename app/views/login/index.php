<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5 text-center">Sign in</h3>
                        <?php
                        Flasher::Message();
                        ?>
                        <form action="<?= BASEURL; ?>/Login/log" method="POST" class="signin-form">
                            <div class="form-outline mb-4">
                                <label class="form-control-placeholder" for="username">Username</label>
                                <input type="text" class="form-control form-control-lg" name="username" required />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-control-placeholder" for="password">Password</label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <input id="password-field" type="password" class="form-control form-control-lg" name="password" required />
                            </div>

                            <button type="submit" class="form-control btn btn-primary rounded submit px-3 mt-2">Masuk</button>
                        </form>
                        <p class="text-center">Belum memiliki akun? <a data-toggle="tab" href="<?= BASEURL; ?>/user/registrasi">Klik disini</a></p>

                        <hr class="mt-4">


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
