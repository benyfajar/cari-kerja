<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cari-kerja.site | Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <style>
        body {
            /* background-image: url("<?= base_url() ?>/assets/img/star-sky.jpg"); */
            background-image: url("<?= base_url() ?>/assets/img/background.jpg");
            background-size: cover;
            position: relative;
            font-family: sans-serif;
        }

        #box-login {
            /* background: red; */
            /* min-height: 640px; */
            margin-top: 15%;
        }

        .box {
            background-color: #191919;
            text-align: center;
            padding: 40px;
        }

        .box h1 {
            color: #ffff;
            text-transform: uppercase;
            font-weight: 500;
        }

        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: none;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px 10px;
            width: 250px;
            outline: none;
            color: white;
            margin: 20px auto;
            border-radius: 24px;
            transition: 0.25s;
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            width: 350px;
            border-color: #2ecc71;
        }

        @media (max-width:320px) {

            /* smartphones, iPhone, portrait 480x320 phones */
            #box-login {
                min-height: none;
                padding: 10px;
            }

            .box {
                padding: 25px 15px 25px;
            }

            .box input[type="text"],
            .box input[type="password"] {
                width: 200px;
            }

            .box input[type="text"]:focus,
            .box input[type="password"]:focus {
                width: 200px;
            }
        }

        @media (max-width:481px) {

            /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */
            #box-login {
                /* min-height: 100px; */
                padding: 10px;
            }

            .box {
                padding: 25px 15px 25px;
            }

            .box input[type="text"],
            .box input[type="password"] {
                width: 200px;
            }

            .box input[type="text"]:focus,
            .box input[type="password"]:focus {
                width: 200px;
            }
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
                <form>
                    <h1>Login</h1>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3 form-check">
                        <a class="forgot text-muted" href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>