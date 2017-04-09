<aside class="right-side">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/teatroempresarial/nuevo_teatroempresarial_foto">
                            <i class="fa fa-edit">Agregar fotografías</i>
                        </a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <table id="repertorio_list" class="table table-striped table-bordered" cellspacing="10"
                                   width="10%">

                                <thead>
                                <tr>
                                    <th>Empresa</th>
                                    <th>Logo</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Empresa</th>
                                    <th>Logo</th>
                                    <th>Opciones</th>

                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($teatroempresarial_foto as $key) { ?>
                                    <tr>
                                        <td><?= $key['fxt_empresa'] ?></td>
                                        <td>
                                            <center><img src="<?php echo base_url() . 'uploads/' . $key['fxt_fotografia'] ?>"
                                                         with=178 height=180></center>
                                        </td>

                                        <td>

                                            <a href="<?php echo base_url() ?>index.php/teatroempresarial/del_foto/<?php echo $key['fxt_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-danger delete"
                                               data-toggle="confirmation" data-placement="left">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </a>
                                        </td>

                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                </div>

            </div>

    </section><!-- /.content  -->
</aside><!-- /.right-side -->