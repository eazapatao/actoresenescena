<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">

                <div class="box box-primary">

                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/teatroempresarial/nuevo_teatroempresarial">
                            <i class="fa fa-edit"></i> Agregar descripción de teatro empresarial
                        </a>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/teatroempresarial/index_fotos">
                            <i class="fa fa-edit"></i> Agregar fotografías de empresas
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
                                    <th>Descripción</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Descripción</th>
                                    <th>Opciones</th>

                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($teatroempresarial as $key) { ?>
                                    <tr>
                                        <td><?= $key['tea_descripcion'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/teatroempresarial/editar/<?php echo $key['tea_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-warning">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url() ?>index.php/teatroempresarial/del/<?php echo $key['tea_codigo'] ?>"
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