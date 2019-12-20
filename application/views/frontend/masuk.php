
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
            <div class="container2">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="<?=base_url('Home/login_user'); ?>">
                        <h2 class="form-title">LOGIN</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="username" placeholder="Username"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Masuk"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Belum Punya Akun? <a href="<?= base_url('home/menu_daftar') ?>" class="loginhere-link">Daftar disini</a>
                    </p>
                </div>
            </div>
      

    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/regis/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
