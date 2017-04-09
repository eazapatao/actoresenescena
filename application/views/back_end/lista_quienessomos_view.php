<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">

                <div class="box box-primary">

                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/quienessomos/nuevo_quienessomos">
                            <i class="fa fa-edit"></i> Nuevo Artista
                        </a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <table id="repertorio_list" class="table table-striped table-bordered" cellspacing="10"
                                   width="10%">

                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Twitter</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Fotografía</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Twitter</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Fotografía</th>
                                    <th>Opciones</th>

                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($quienessomos as $key) { ?>
                                    <tr>
                                        <td><?= $key['quie_nombre'] ?></td>
                                        <td><?= $key['quie_descripcion'] ?></td>
                                        <td><?= $key['quie_twitter'] ?></td>
                                        <td><?= $key['quie_facebook'] ?></td>
                                        <td><?= $key['quie_instagram'] ?></td>
                                        <td><?= $key['quie_fotografia'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/quienessomos/editar/<?php echo $key['quie_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-warning">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url() ?>index.php/quienessomos/del/<?php echo $key['quie_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-danger delete"
                                               data-toggle="confirmation"
                                               data-placement="left">
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