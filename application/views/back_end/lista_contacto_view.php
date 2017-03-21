<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">

                <div class="box box-primary">

                    <div class="box-header">
                        <br>

                        <i class="fa fa-edit"></i> Mensajes nuevos
                        </a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <table id="contacto_list" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">

                                <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Asunto</th>
                                    <th>Mensaje</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Asunto</th>
                                    <th>Mensaje</th>
                                    <th>Opciones</th>

                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($contactos as $key) { ?>
                                    <tr>
                                        <td><?= $key['con_fecha'] ?></td>
                                        <td><?= $key['con_nombre'] ?></td>
                                        <td><?= $key['con_email'] ?></td>
                                        <td><?= $key['con_asunto'] ?></td>
                                        <td><?= $key['con_mensaje'] ?></td>
                                        <td>

                                            <a href="<?php echo base_url() ?>index.php/contacto/del/<?php echo $key['con_codigo'] ?>"
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