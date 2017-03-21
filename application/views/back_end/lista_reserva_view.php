<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">

                <div class="box box-primary">

                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/reserva/nuevo_reserva">
                            <i class="fa fa-edit"></i> Nueva reserva
                        </a>
                        <br>

                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <table id="reserva_list" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">

                                <thead>
                                <tr>
                                    <th>Obra</th>
                                    <th>Nombre completo</th>
                                    <th>Fecha</th>
                                    <th>Sillas</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Obra</th>
                                    <th>Nombre completo</th>
                                    <th>Fecha</th>
                                    <th>Sillas</th>
                                    <th>Opciones</th>

                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($reservas as $reserva) { ?>
                                    <tr>
                                        <td><?= $reserva['rep_obra'] ?></td>
                                        <td><?= $reserva['res_nombre'] ?></td>
                                        <td><?= $reserva['res_fecha'] ?></td>
                                        <td><?= $reserva['res_sillas'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/reserva/editar/<?php echo $reserva['res_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-warning">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url() ?>index.php/reserva/del/<?php echo $reserva['res_codigo'] ?>"
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