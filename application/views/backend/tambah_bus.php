<section id="main-content">
	<section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Bus
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " enctype="multipart/form-data" id="signupForm" method="post" action="<?=base_url('bus/simpan')?>" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="nama" class="control-label col-lg-3">Merek</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nama" name="merek" type="text">
                                        </div>
                                    </div><div class="form-group ">
                                        <label for="nama" class="control-label col-lg-3">No_Pol</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nama" name="no_pol" type="text">
                                        </div>
                                    </div><div class="form-group ">
                                        <label for="nama" class="control-label col-lg-3">Warna</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nama" name="warna" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="alamat" class="control-label col-lg-3">Kapasitas</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="alamat" name="kapasitas" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">Thn_kendaraan</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="username" name="thn_kendaraan" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">Foto Kendaraan</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="file" name="foto_kendaraan" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                             <a href="<?php echo base_url('bus/index')?>"class="btn btn-default">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
</section>