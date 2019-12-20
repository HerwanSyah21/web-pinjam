<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Transaksi Kendaraan
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>No_Transaksi</th>
            <th>Nama</th>
            <th>Instansi</th>
            <th>Plat Nomor</th>
            <th>Keperluan</th>
            <th>Tujuan</th>
            <th>Tgl_Mulai</th>
            <th>Tgl_Selesai</th>
            <th>Status</th>
            <th>Action</th>
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
                <td><?= $key->keperluan ?></td>
                <td><?= $key->tujuan ?></td>
                <td><?= $key->tgl_mulai ?></td>
                <td><?= $key->tgl_selesai ?></td>
                <td><?= $key->status ?></td>
                <td>
                  <a href="<?= base_url() ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a href="javascript:;" onclick="hapus('<?= base_url() ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
