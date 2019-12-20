<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Daftar User 
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Email</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Instansi</th>
            <th>No.Hp</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($kendaraan as $key) {
              ?>
              <tr>
                <td><?= $key->email ?></td>
                <td><?= $key->nama ?></td>
                <td><?= $key->alamat ?></td>
                <td><?= $key->instansi ?></td>
                <td><?= $key->no_hp ?></td>
                <td><?= $key->username ?></td>
                <td><?= $key->password ?></td>
                <td>
                  <?php if ($key->status=='1') { ?>
                     <form action="<?php echo base_url('User/status');?>" method="post">
                     <input type="Hidden" value="<?php echo $key->id ?>" name="id">
                     <button style="border-radius: 6px;margin-bottom: 10px" href="" type="submit" class="btn btn-danger ">Validasi</button>
                     </form>
                     <?php } else { ?>
                      <form action="<?php echo base_url('User/status2')?>" method="post">
                     <input type="Hidden" value="<?php echo $key->id ?>" name="id">
                     <button style="border-radius: 6px;margin-bottom: 10px" href="" type="submit" class="btn btn-info ">Belum Tervalidasi</button>
                     </form>
                     <?php } ?>
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