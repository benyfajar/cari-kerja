<div class="col-md-12">
    <div class="header  my-3">
        <button id="btnTambah" class="btn btn-primary pull-right mb-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah</button>
        <button id="btnEdit" class="btn btn-primary pull-right mb-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>

        <h3 class="pull-left"><?= $header; ?></h3>
    </div>
    <table class="table  table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <td>No</td>
                <td>Kategori</td>
                <td></td>
            </tr>
        </thead>
        <tbody class="">
            <?php
            if ($active === 'home') :
                $no = $this->uri->segment('3') + 1;
                foreach ($listData as $row => $v) {
                    echo "
                        <tr>
                            <td>" . $no++ . "</td>
                            <td>" . $v->kategori . "</td>
                            <td>
                                <button class='btn btn-info btn-sm btn-edit btn-aksi' title='Edit'><i class='fa fa-fw fa-pencil'></i></button>
                                <button class='btn btn-danger btn-sm btn-edit btn-aksi' title='Edit'><i class='fa fa-fw fa-trash'></i></button>
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
    <?php echo $pagination; ?>
</div>


<!-- Awal Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 ms-auto">
                            <div class="input-group input-group-sm mb-3">
                                <input type="hidden" id="jnsModal">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Kategori</span>
                                <input type="text" id="name-kategori" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="btnProses">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal -->

<script>
    $('#staticBackdrop').on('shown.bs.modal', function(e) {
        const buttonId = e.relatedTarget.id;
        // $(this).find('.modal-body').text(`Button id = ${buttonId}`);
        //$(this).find('#jnsModal').val(`${buttonId}`);
        $("#jnsModal").val(buttonId);
        $("#name-kategori").val("");
    });


    $("#btnProses").click(function() {
        jns = $("#jnsModal").val();
        if (jns === "btnTambah") {
            var kat = $("#name-kategori").val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('kategori/simpan_kategori') ?>",
                dataType: "JSON",
                data: {
                    kategori: kat
                },
                success: function(data) {
                    $('#name-kategori').val("");
                    $('#ModalaAdd').modal('hide');
                }
            });
            // return false;
        }
    });
</script>