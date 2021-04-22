<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>asasmmkmkmkmkm</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="http://localhost/cakman/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/cakman/assets/css/font-awesome.min.css">
    <?php //$this->load->view("comp/load_head"); 
    ?>
    <style>
        body {
            background: url("../assets/img/background.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }

        .alert {
            padding: 7px;
        }

        .wrapper {
            margin-top: 80px;
            margin-bottom: 20px;
        }

        .form-signin {
            max-width: 420px;
            padding: 10px 20px 10px 20px;
            margin: 0 auto;
            background-color: #EEE;
            border: 5px dotted rgba(0, 0, 0, 0.1);
        }

        .form-signin-heading {
            text-align: center;
            margin-bottom: 10px;
        }

        .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
        }

        input[type="text"] {
            margin-bottom: 10px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 20px;
        }

        input[type="password"] {
            margin-bottom: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .colorgraph {
            height: 7px;
            border-top: 0;
            background: #c4e17f;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }
    </style>
</head>

<div class="container">
    <div class="wrapper">
        <form class="form-signin" method="post" action="<?= base_url() ?>main/doLogin">
            <center>
                <a style="font-size:36px;color:#666"><i class="fa fa-rocket fa-lg"></i><b> Max Lab</b></a>
            </center>

            <hr class="colorgraph"><br>

            <div class="list-group input-group has-feedback">
                <span class="input-group-addon bg-blue"><i class="fa fa-user fa-lg"></i></span>
                <input type="text" class="form-control" name="l_user" placeholder="Username" autofocus required="required">
            </div>
            <div class="list-group input-group has-feedback">
                <span class="input-group-addon bg-blue"><i class="fa fa-lock fa-lg"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="l_pass" required="required">
            </div>

            <div class="list-group">
                <div class="input-group" style="width:100%">
                    <button type="submit" class="form-control btn btn-success" id="btn-simpan">
                        <span class=""><i class="fa fa-sign-in fa-lg"></i></span>&nbsp; L O G I N
                    </button>
                </div>
            </div>

            <?php if (isset($_GET['failed'])) { ?>
                <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Username atau Password salah!</strong>
                </div>
            <?php } ?>

            <h6>Copyright <i class="fa fa-copyright"></i> 2018 AkuntansiAPP</h6>

        </form>
    </div>
</div>













<!-- <body class="hold-transition skin-red"> -->
<!-- <div class="navbar navbar-static-top">
        <div class="row" id="top-bar">
            <div class="col-md-8">
                <font class="brand">AkuntansiApp</font>
            </div>
            <div class="col-md-4" align="right">
            </div>
        </div>
    </div>

    <div class="login-box">
        <div class="login-box-body">
            <p class="login-box-msg">Silahkan Login</p>

            <form method="post" action="<?= base_url() ?>main/doLogin">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="l_user" placeholder="Username" autofocus required="required">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="l_pass" placeholder="Password" required="required">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>



                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-danger btn-block">LogIn</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="footer navbar-fixed-bottom">
        <div class="container">
            <b class="copyright">© Fahmi & co.</b>
        </div>
    </div> -->

<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script>
    localStorage.clear();
</script>

</body>

</html>