<aside class="right-side">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/formacion/nuevo_formacion">
                            <i class="fa fa-edit">Agregar fotografías de formación</i>
                        </a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <table id="banner_list" class="table table-striped table-bordered" cellspacing="10"
                                   width="10%">

                                <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Fotografía 1</th>
                                    <th>Fotografía 2</th>
                                    <th>Tipo</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Fotografía 1</th>
                                    <th>Fotografía 2</th>
                                    <th>Tipo</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($formacion as $key) { ?>
                                    <tr>
                                        <td><?= $key['for_titulo'] ?></td>
                                        <td><?= $key['for_descripcion'] ?></td>
                                        <td>
                                            <center><img src="<?php echo base_url() . 'uploads/' . $key['for_fotografia'] ?>"
                                                         with=178 height=180></center>
                                        </td>
                                        <td>
                                            <center><img src="<?php echo base_url() . 'uploads/' . $key['for_fotografia1'] ?>"
                                                         with=178 height=180></center>
                                        </td>

                                        <td><?= $key['for_tipo'] ?></td>


                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/formacion/editar/<?php echo $key['for_codigo'] ?>"
                                               type="button" class="btn btn-xs btn-warning">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url() ?>index.php/formacion/del/<?php echo $key['for_codigo'] ?>"
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