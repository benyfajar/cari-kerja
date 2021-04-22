<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cari-kerja.site | Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">


    <style>
        body {
            background-image: url("<?= base_url() ?>/assets/img/star-sky.jpg");
            /* background-image: url("<?= base_url() ?>/assets/img/background.jpg"); */
            background-size: cover;
            position: relative;
            font-family: sans-serif;
        }

        #box-login {
            margin-top: 80px;
            margin-bottom: 20px;
        }

        .form-signin {
            max-width: 420px;
            padding: 10px 20px 10px 20px;
            margin: 0 auto;
            background-color: #191919;
            border: 5px dotted rgb(255, 255, 255);
            text-align: center;
            /* padding: 40px; */
        }

        .form-signin h1,
        h6,
        hr {
            margin-top: 30px;
            margin-bottom: 2px;
            color: #fff;
        }

        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: none;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px 10px;
            /* width: 250px; */
            outline: none;
            color: white;
            margin: 20px auto;
            border-radius: 24px;
            transition: 0.25s;
        }


        @media (max-width:320px) {
            /* smartphones, iPhone, portrait 480x320 phones */
        }

        @media (max-width:481px) {
            /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */
        }

        @media (min-width:641px) {
            /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
        }

        @media (min-width:961px) {
            /* tablet, landscape iPad, lo-res laptops ands desktops */
        }

        @media (min-width:1025px) {
            /* big landscape tablets, laptops, and desktops */
        }

        @media (min-width:1281px) {
            /* hi-res laptops and desktops */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" id="box-login">
            <div class="col-md-5 my-3 box">
                <?php
                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                        echo "<div class='alert alert-danger font-weight-bold text-center'>Maaf! Username & Password Salah.</div>";
                    } else if ($_GET['alert'] == "belum_login") {
                        echo "<div class='alert alert-danger font-weight-bold text-center'>Anda Harus Login Terlebih Dulu!</div>";
                    } else if ($_GET['alert'] == "logout") {
                        echo "<div class='alert alert-success font-weight-bold text-center'>Anda Berhasil Logout !</div>";
                    }
                }
                ?>

                <form name="formLogin" class="form-signin" action="<?= base_url() ?>login/doLogin" method="post">
                    <!-- onsubmit="return validateForm()" -->
                    <h1>Cari-Kerja.site</h1>
                    <hr>
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <!-- required="" oninvalid="this.setCustomValidity('Username Harus diisi !!!')" -->
                    </div>
                    <?php echo form_error('username'); ?>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <?php echo form_error('password'); ?>
                    <div class="mb-3 form-check">
                        <a class="forgot text-muted" href="#">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn btn-primary" id="login"><span class=""><i class="fa fa-sign-in fa-lg"></i></span>&nbsp; Login </button>
                    <h6>Copyright <i class="fa fa-copyright"></i> 2021 Cari-Kerja.site</h6>
                </form>
            </div>
        </div>
    </div>
</body>

</html>