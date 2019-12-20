<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Daftar Admin
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <a href="<?= base_url('admin/tambah') ?>" class="btn btn-sm btn-default">Tambah</a>   
      </div>
      <div class="col-sm-4">
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($kendaraan as $key) {
              ?>
              <tr>
                <td><?= $key->nama ?></td>
                <td><?= $key->alamat ?></td>
                <td><?= $key->username ?></td>
                <td>
                  <a href="<?= base_url('admin/edit/'.$key->id) ?>">Edit</a>
                  <a href="javascript:;" onclick="hapus('<?= base_url("admin/hapus/".$key->id) ?>')">Delete</a>
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