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
                                <form class="cmxform form-horizontal " enctype="multipart/form-data" id="signupForm" method="post" action="<?=base_url('syarat/simpan')?>" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="nama" class="control-label col-lg-3">Id</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="id" name="id" type="text">
                                        </div>
                                    </div><div class="form-group ">
                                        <label for="nama" class="control-label col-lg-3">Jenis</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="jenis" name="jenis" type="text">
                                        </div>
                                    </div><div class="form-group ">
                                        <label for="nama" class="control-label col-lg-3">Syarat</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="syarat" name="syarat" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                             <a href="<?php echo base_url('syarat/index')?>"class="btn btn-default">Cancel</a>
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