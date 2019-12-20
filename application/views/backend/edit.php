<section id="main-content">
	<section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Advanced Form validations
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="<?=base_url('admin/update')?>" novalidate="novalidate">
                                    <input type="hidden" name="kode" value="<?= $data->id ?>">
                                    <div class="form-group ">
                                        <label for="nama" class="control-label col-lg-3">Nama</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nama" name="nama" type="text" value="<?= $data->nama ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="alamat" class="control-label col-lg-3">Alamat</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="alamat" name="alamat" type="text"value="<?= $data->alamat ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">Username</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="username" name="username" type="text"value="<?= $data->username ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
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