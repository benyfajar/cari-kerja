<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/timepicker/jquery.ui.timepicker.css">
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/timepicker/jquery.ui.timepicker.js"></script>
<div class="col-sm-12 col-md-12">
    <div class="row my-3">
        <div class="col-xs-12">
            <h3 class="pull-left"><?= $header; ?></h3>
        </div>
        <div class="col-xs-12 p-4" style="background-color: #4da6ff; border-radius: 30px;">
            <h3>Masukan Jadwal Scraping</h3>
            <div class="row g-3 mt-3">
                <!-- action="<?= base_url() ?>scraping/simpanJadwal" method="post" -->

                <div class="col-md-6">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" height="100px">Web Sumber</span>
                        <select id="webSumber" class="form-select" name="webLoker" disabled>
                            <option value=""> --Pilih-- </option>
                            <?php
                            foreach ($webLoker as $row => $v) :
                                echo "<option value='$v->kd_loker'>$v->nama_loker</option>";
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" height="100px">Tanggal Jalan</span>
                        <input type="text" class="form-control" id="tanggal" name="tanggal" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" height="100px">Waktu Jalan</span>
                        <input type="text" class="form-control" id="jam" name="waktu" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text" height="100px">Tambah Berkala</span>
                        <input type="number" class="form-control" id="kontrol" name="jumlah" placeholder="3">
                    </div>
                </div>

                <div class="col-12">
                    <input type="text" id="idJadwal" hidden>
                    <button type="button" class="btn btn-primary" id="btnSimpan">Simpan</button>
                    <!-- <input type="submit" value="Simpan" hidden> -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 py-5" style="overflow: auto;">
            <table class="table  table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <td>No</td>
                        <td>Web Sumber</td>
                        <td>Tanggal Jalan</td>
                        <td>Waktu Jalan</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($listData) > 0) :
                        $no = $this->uri->segment('3') + 1;
                        foreach ($listData as $row => $v) {
                            echo "
                        <tr>
                            <td>" . $no++ . "</td>
                            <td>" . $v->nama_loker . "</td>
                            <td>" . $v->tgl_jalan . "</td>
                            <td>" . $v->jam_jalan . "</td>
                            <td>
                                <button class='btn btn-info btn-sm btnEdit btn-aksi' title='Edit' aktid='$v->kd_jadwal'><i class='fa fa-fw fa-pencil'></i></button>
                            </td>
                        </tr>
                    ";
                        }
                    else :
                        echo '<td colspan="5">Data Tidak Tersedia</td>';
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $('#btnSimpan').hide();
    $(function() {

        var date = new Date();
        var currentMonth = date.getMonth();
        var currentDate = date.getDate();
        var currentYear = date.getFullYear();

        if ($("#tanggal").length > 0) {
            $("#tanggal").datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: new Date(currentYear, currentMonth, currentDate)
            });
        }
    })

    // var date = $('#tanggal').datepicker({
    //     dateFormat: 'dd-mm-yy'
    // }).val();

    $('#jam').timepicker({
        showPeriodLabels: false
    });

    $('#btnSimpan').click(function() {
        // Swal.fire('halooo')
        var web = $('#webSumber').val();
        var tgl = $("#tanggal").val();
        var jam = $("#jam").val();
        var kontrol = $("#kontrol").val();
        var id_jadwal = $("#idJadwal").val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('scraping/simpanJadwal') ?>",
            data: {
                id_jadwal: id_jadwal,
                web_loker: web,
                jam_jln: jam,
                tgl_jalan: tgl,
                kontrol: kontrol
            },
            success: function(data) {
                if (data > 0) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Jadwal Scraping Berhasil diubah',
                        showConfirmButton: true,
                        timer: 1500
                    }).then(function() {
                        location.reload();
                    })
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Jadwal Scraping Gagal diubah',
                        showConfirmButton: true,
                        timer: 1500
                    }).then(function() {
                        // location.reload();
                    })
                }
            }
        })
    })

    $('.btnEdit').click(function() {
        var id = $(this).attr('aktid');

        Swal.fire({
            title: 'Ingin Mengubah Data ?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya ',
            cancelButtonText: 'Tidak '
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('scraping/ambiljadwal') ?>",
                    dataType: "JSON",
                    data: {
                        id_jadwal: id
                    },
                    success: function(data) {
                        $('#btnSimpan').show();
                        $('#webSumber').val(data[0].kd_loker);
                        $("#tanggal").val(data[0].tgl_jalan);
                        $("#jam").val(data[0].jam_jalan);
                        $("#kontrol").val(data[0].jumlah);
                        $("#idJadwal").val(data[0].kd_jadwal);
                    }
                })
            }
        })
    })
</script>