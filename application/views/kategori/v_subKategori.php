<style>
    .select2-container {
        z-index: 100000;
    }
</style>
<div class="col-sm-12 col-md-12 ">
    <div class="row my-3">
        <div class="col-xs-12">
            <h3 class="pull-left"><?= $header; ?></h3>
            <button id="btnTambah" class="btn btn-primary pull-right mb-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah</button>
        </div>

        <div class="col-xs-12 py-5" style="overflow: auto;">
            <table class="table  table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <td>No</td>
                        <td>Kategori</td>
                        <td>Sub Kategori</td>
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
                            <td>" . $v->kategori . "</td>
                            <td>" . $v->nama . "</td>
                            <td>
                                <button class='btn btn-info btn-sm btnEdit btn-aksi' title='Edit' data-bs-toggle='modal' data-bs-target='#staticBackdrop' aktid='$v->kd_sub'><i class='fa fa-fw fa-pencil'></i></button>
                                <button class='btn btn-danger btn-sm btnHapus btn-aksi' title='Hapus' del-id='$v->kd_sub' ><i class='fa fa-fw fa-trash'></i></button>
                            </td>
                        </tr>
                    ";
                        }
                    else :
                        echo '<td colspan="3">Data Tidak Tersedia</td>';
                    endif;
                    ?>
                </tbody>
            </table>
        </div>


        <?php echo $pagination; ?>
    </div>
</div>


<!-- Awal Modal -->
<div class="modal" tabindex="-1" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ms-auto">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" height="100px">Kategori</span>
                            <select class="form-select select2" name="kategori" id="kategori">
                                <option value=""> --Pilih-- </option>
                                <?php
                                foreach ($listKategori as $row => $v) :
                                    echo "<option value='$v->kd_kat'>$v->kategori</option>";
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <input type="hidden" id="jnsModal">
                            <input type="hidden" id="id-sub">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Sub Kategori</span>
                            <input type="text" id="name-subkategori" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnBatal">Batal</button>
                <button type="button" class="btn btn-primary" id="btnProses">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal -->

<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        // $('.select2').select2({
        //     // width: '80%'
        //     width: '60%',
        //     theme: "classic"
        // });
    });


    $('#staticBackdrop').on('shown.bs.modal', function(e) {
        const buttonId = e.relatedTarget.id;
        $("#jnsModal").val(buttonId);
    });

    $("#btnBatal").click(function() {
        $("#name-kategori").val("");
    })


    $("#btnProses").click(function() {
        jns = $("#jnsModal").val();
        if (jns === "btnTambah") {
            var kat = $("#kategori").val();
            var subKat = $("#name-subkategori").val();
            // Swal.fire(kat);

            if (kat === "" || subKat === "") {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Lengkapi Data !!!',
                    showConfirmButton: true,
                    timer: 1500
                })
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('kategori/simpan_subKategori') ?>",
                    dataType: "JSON",
                    data: {
                        kd_kat: kat,
                        subKategori: subKat
                    },
                    success: function(data) {
                        if (data === "berhasil") {
                            $('#name-subkategori').val("");
                            $('#staticBackdrop').modal('hide');

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Kategori Telah disimpan',
                                showConfirmButton: true,
                                timer: 1500
                            }).then(function() {
                                // Redirect the user
                                location.reload();
                            })


                        } else {
                            // alert("data gagal di simpan");
                        }

                    }
                });
            }


        } else {
            var kat = $("#kategori").val();
            var idSub = $("#id-sub").val();
            var name = $("#name-subkategori").val();

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('kategori/edit_subKategori') ?>",
                dataType: "JSON",
                data: {
                    kd_kat: kat,
                    kd_sub: idSub,
                    nama: name
                },
                success: function(data) {
                    if (data === "berhasil") {
                        $('#name-subkategori').val("");
                        $("#kategori").val("");
                        $("#id-sub").val("");
                        $('#staticBackdrop').modal('hide');

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Sub Kategori Berhasil diubah',
                            showConfirmButton: true,
                            timer: 1500
                        }).then(function() {
                            location.reload();
                        })


                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Sub Kategori Gagal diubah',
                            showConfirmButton: true,
                            timer: 1500
                        }).then(function() {
                            location.reload();
                        })
                    }
                }
            })


        }
    });

    $(".btnEdit").click(function() {
        var id = $(this).attr('aktid');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('kategori/ambilSubKategori') ?>",
            dataType: "JSON",
            data: {
                id_sub: id
            },
            success: function(data) {
                var i;
                for (i = 0; i < data.length; i++) {
                    $("#id-sub").val(data[i].kd_sub);
                    $("#kategori").val(data[i].kd_kat);
                    // var newOption = new Option('', data[i].kd_kat, false, false);
                    // $('#kategori').append(newOption).trigger('change');
                    $("#name-subkategori").val(data[i].nama);
                }

            }
        })
    })

    $("#btnBatal").click(function() {
        $("#kategori").val("");
        $("#name-subkategori").val("");
    })


    $(".btnHapus").click(function() {
        var id = $(this).attr("del-id");

        Swal.fire({
            title: 'Hapus Data ini ?',
            text: "Data tidak dapat di kembalikan lagi!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('kategori/delSubKat') ?>",
                    dataType: "JSON",
                    data: {
                        id_sub: id
                    },
                    success: function(data) {
                        if (data === "berhasil") {
                            $('#name-subkategori').val("");
                            $('#kategori').val("");
                            $('#id-sub').val("");
                            $('#staticBackdrop').modal('hide');

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Sub Kategori Telah dihapus !!',
                                showConfirmButton: true,
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            })
                        }
                    }
                })
            }
        })
    })
</script>