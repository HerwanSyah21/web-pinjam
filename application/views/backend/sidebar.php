<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="<?php echo base_url('backoffice')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cog"></i>
                        <span>Setting</span>
                    </a>
                    <ul class="sub">
						<li><a href="<?php echo base_url('user/daftar') ?>">Daftar User</a></li>
                        <li><a href="<?php echo base_url('admin/daftar')?>">Daftar Admin</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-wrench"></i>
                        <span>Master </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="<?php echo base_url('bus')?>">
                            <i class="fa fa-bus"></i>
                            <span>Bus</span></a> 
                        </li>
                        <li><a href="<?php echo base_url('syarat')?>">
                            <i class="fa fa-question"></i>
                            <span>Syarat & Ketentuan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('transaksi')?>">
                        <i class="fa fa-dollar"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <!-- <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Pengembalian</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Form Elements</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
						<li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li> -->
                <li class="sub-menu">
                    <a href="<?php echo base_url('home')?>">
                        <i class=" fa fa-eye"></i>
                        <span>Lihat Website</span>
                    </a>
                </li>
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>