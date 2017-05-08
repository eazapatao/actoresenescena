<aside class="right-side">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/repertorio/nuevo_fechaxrepertorio">
                            <i class="fa fa-edit">Agregar fechas de funciones</i>
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
                                    <th>Fecha</th>
                                    <th>Sillas disponibles</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Obra</th>
                                    <th>Fecha</th>
                                    <th>Sillas disponibles</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($repertorios as $key) { ?>
                                    <tr>
                                        <td><?= $key['rep_obra'] ?></td>
                                        <td><?= $key['fxr_fecha'] ?></td>
                                        <td><?= $key['fxr_sillas'] ?></td>

                                        <td>

                                            <a href="<?php echo base_url() ?>index.php/repertorio/editarfechaxrepertorio/<?php echo $key['fxr_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-warning">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url() ?>index.php/repertorio/delfechaxrepertorio/<?php echo $key['fxr_codigo'] ?>"
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