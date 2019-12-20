
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>css/style.css"> 
</head>


    

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container3">
                   <h2 class="form-title"><br>Transaksi Kendaraan</h2>
                 <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>No_Transaksi</th>
            <th>Nama</th>
            <th>Instansi</th>
            <th>Plat Nomor</th>
            <th>Tujuan</th>
            <th>Tgl_Mulai</th>
            <th>Tgl_Selesai</th>
            <th>Status</th>
           
          </tr>
        </thead>
        <tbody>
         <?php
            foreach ($transaksi as $key) {
              ?>
              <tr>
                <td><?= $key->no_transaksi ?></td>
                <td><?= $key->nama ?></td>
                <td><?= $key->instansi ?></td>
                <td><?= $key->id_kendaraan ?></td>
                <td><?= $key->tujuan ?></td>
                <td><?= $key->tgl_mulai ?></td>
                <td><?= $key->tgl_selesai ?></td>
                <td><?= $key->status ?></td>
            
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
            </div>
      

    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/regis/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
