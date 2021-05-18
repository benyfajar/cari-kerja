<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view("comp/head"); ?>

    <style>
        #konten {
            min-height: 520px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php $this->load->view("comp/navigasi"); ?>
    <!-- Akhir Navbar -->

    <!-- Grafik -->
    <section>
        <div class="container">
            <div class="row justify-content-center text-center my-3" id="konten">
                <?php $this->load->view($content); ?>
            </div>
        </div>
    </section>
    <!-- Akhir Grafik -->

    <!-- Footer -->
    <footer class=" footer bg-dark text-white mt-2 text-center" id="footer">
        <!-- fixed-bottom  -->
        &copy 2014 cari-kerja.site | All rights reserved | Design by : <a href="#" target="_blank" style="color:#7C7C7C;">Beny Fajar</a>
    </footer>
    <!-- Akhir Footer -->

    <script>
    </script>
</body>


</html>