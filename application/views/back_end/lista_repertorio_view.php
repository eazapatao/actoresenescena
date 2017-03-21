<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">

                <div class="box box-primary">

                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/repertorio/nuevo_repertorio">
                            <i class="fa fa-edit"></i> Nuevo repertorio
                        </a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <table id="repertorio_list" class="table table-striped table-bordered" cellspacing="10"
                                   width="10%">

                                <thead>
                                <tr>
                                    <th>Obra</th>
                                    <th>Director</th>
                                    <th>Género</th>
                                    <th>Duración</th>
                                    <th>Estado</th>
                                    <th>Temporada</th>
                                    <th>Cantidad</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Obra</th>
                                    <th>Director</th>
                                    <th>Género</th>
                                    <th>Duración</th>
                                    <th>Estado</th>
                                    <th>Temporada</th>
                                    <th>Cantidad</th>
                                    <th>Opciones</th>

                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($repertorios as $key) { ?>
                                    <tr>
                                        <td><?= $key['rep_obra'] ?></td>
                                        <td><?= $key['rep_director'] ?></td>
                                        <td><?= $key['rep_genero'] ?></td>
                                        <td><?= $key['rep_duracion'] ?></td>
                                        <td><?= $key['rep_estado'] ?></td>
                                        <td><?= $key['rep_temporada'] ?></td>
                                        <td><?= $key['rep_cantidad'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/repertorio/editar/<?php echo $key['rep_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-warning">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url() ?>index.php/repertorio/del/<?php echo $key['rep_codigo'] ?>"
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