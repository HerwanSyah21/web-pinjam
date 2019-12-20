<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Kendaraan
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <a href="<?= base_url('bus/tambah') ?>" class="btn btn-sm btn-default">Tambah</a>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
        </div>
      </div>
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th>Merek</th>
            <th>No_Pol</th>
            <th>Warna</th>
            <th>Kapasitas</th>
            <th>thn_kendaraan</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($kendaraan as $key ) {
              ?>
              <tr>
                <td><?= $key->merek ?></td>
                <td><?= $key->no_pol ?></td>
                <td><?= $key->warna ?></td>
                <td><?= $key->kapasitas ?></td>
                <td><?= $key->thn_kendaraan ?></td>
                <td>
                  <img style="max-height: 50px; height: 50px" src="<?= base_url('gambar/'.$key->foto) ?>">
                </td>
                <td>
                  <a href="<?= base_url('bus/edit/'.$key->id) ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a href="javascript:;" onclick="hapus('<?= base_url("bus/hapus/".$key->id) ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
<script type="text/javascript">
  function hapus(url) {
    if (confirm('Anda yakin ? ')) {
      window.location = url; 
    }
  }
</script>