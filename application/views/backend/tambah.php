<section id="main-content">
	<section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Admin
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="<?=base_url('admin/simpan')?>" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="nama" class="control-label col-lg-3">Nama</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nama" name="nama" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="alamat" class="control-label col-lg-3">Alamat</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="alamat" name="alamat" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">Username</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="username" name="username" type="text">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group ">
                                        <label for="password" class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="password" name="password" type="text">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                             <a href="<?php echo base_url('admin/daftar')?>"class="btn btn-default">Cancel</a>
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