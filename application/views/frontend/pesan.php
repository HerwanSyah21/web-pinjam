
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
                    <form method="POST" id="signup-form" class="signup-form" action="<?php echo base_url('Transaksi');?>" enctype="multipart/form-data">
                        <h2 class="form-title">FORM PEMESANAN</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama" id="nama" placeholder="Nama Lengkap"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="instansi" id="instansi" placeholder="Instansi"/>
                        </div><div class="form-group">
                            <input type="text" class="form-input" name="id_kendaraan" id="id_kendaraan" placeholder="Plat Nomor"/>
                        </div><div class="form-group">
                            <input type="text" class="form-input" name="keperluan" id="keperluan" placeholder="keperluan"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="tujuan" id="tujuan" placeholder="Tujuan"/>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-input" name="tgl_mulai" id="tgl_mulai" placeholder="tgl mulai"/>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-input" name="tgl_selesai" id="tgl_selesai" placeholder="tgl selesai"/>
                        </div>

                         <!-- <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Ulangi Password"/>
                        </div>
                        -->
                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->

                        <div class="row text-center">
                            <div class="col-sm-6">
                               <div class="form-group">
                                    <div class="">
                                        <button type="submit" name="submit" id="submit" class="form-submit" value="Pesan">Pesan</button>
                                    </div>
                                </div>      
                            </div> 
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="">  
                                        <button type="submit" name="batal" id="submit" class="form-submit" value="Pesan">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- JS -->
    <script src="<?= base_url('assets/regis/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
