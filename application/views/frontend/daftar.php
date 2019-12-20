
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>css/style.css"> 
</head>
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container2">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="<?php echo base_url().'Home/tambah_user';?>" enctype="multipart/form-data">
                        <h2 class="form-title">PENDAFTARAN MEMBER BARU</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama" id="nama" placeholder="Nama Lengkap"/>
                        </div><div class="form-group">
                            <input type="text" class="form-input" name="alamat" id="alamat" placeholder="Alamat Lengkap"/>
                        </div><div class="form-group">
                            <input type="text" class="form-input" name="instansi" id="instansi" placeholder="Instansi"/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="no_hp" id="no_hp" placeholder="Nomor Handphone"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                         <!-- <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Ulangi Password"/>
                        </div>
                        -->
                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Daftar"/>
                        </div>
                    </form>
                    <p class="loginhere">
                       Sudah Punya Akun?<a href="<?= base_url('home/menu_masuk') ?>" class="loginhere-link"> Masuk disini</a>
                    </p>
                </div>
            </div>
    </div>
    <!-- JS -->
    <script src="<?= base_url('assets/regis/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
