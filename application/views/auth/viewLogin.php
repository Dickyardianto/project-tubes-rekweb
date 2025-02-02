<div class="container" style="padding-top: 3%;">

    <!-- Outer Row -->
    <div class="row justify-content-center my-5">

        <div class="col-6">

            <!-- <div class="card bg-dark my-5">
                <div class="card-body p-0"> -->
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg shadow-lg rounded" style="background-color: #fff;">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-dark mb-4">Login</h1>
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <form class="user" method="post" action="<?= base_url() ?>auth">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="email" id="email"
                                    placeholder="Masukkan email anda" autocomplete="off"
                                    value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password"
                                    name="password" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-dark btn-user btn-block">
                                Login
                            </button>
                            <hr>
                        </form>
                        <!-- <div class="text-center">
                            <a class="small" href="forgot-password.html">Lupa password ?</a>
                        </div> -->
                        <div class="text-center">
                            <a class="small text-dark" href="<?= base_url() ?>auth/registrasi">Buat akun!</a>
                        </div>
                        <div class="text-center">
                            <a class="small text-dark" href="<?= base_url() ?>home">Kembali </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div>
            </div> -->

        </div>

    </div>

</div>