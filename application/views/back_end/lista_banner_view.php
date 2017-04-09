<aside class="right-side">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/banner/nuevo_banner">
                            <i class="fa fa-edit">Agregar banner</i>
                        </a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <table id="banner_list" class="table table-striped table-bordered" cellspacing="10"
                                   width="10%">

                                <thead>
                                <tr>
                                    <th>Fofografía</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Fofografía</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($banner as $key) { ?>
                                    <tr>

                                        <td>
                                            <center><img src="<?php echo base_url() . 'uploads/' . $key['ban_fotografia'] ?>"
                                                         with=178 height=180></center>
                                        </td>
                                        <td><?= $key['ban_activo'] ?></td>

                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/banner/editar/<?php echo $key['ban_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-warning">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url() ?>index.php/banner/del/<?php echo $key['ban_codigo'] ?>"
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