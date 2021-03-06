<aside class="right-side">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <br>
                        <a class="btn btn-app" href="<?= base_url() ?>index.php/imagen/nuevo_repertorio_foto">
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
                                    <th>Obra</th>
                                    <th>Imagen 1</th>
                                    <th>Imagen 2</th>
                                    <th>Imagen 3</th>
                                    <th>Imagen 4</th>
                                    <th>Opciones</th>

                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Obra</th>
                                    <th>Imagen 1</th>
                                    <th>Imagen 2</th>
                                    <th>Imagen 3</th>
                                    <th>Imagen 4</th>
                                    <th>Opciones</th>

                                </tr>
                                </tfoot>

                                <tbody>
                                <?php foreach ($repertorios_foto as $key) { ?>
                                    <tr>
                                        <td><?= $key['rep_obra'] ?></td>
                                        <td>
                                            <center><img src="<?php echo base_url() . 'uploads/' . $key['fxr_foto'] ?>"
                                                         with=158 height=160></center>
                                        </td>
                                        <td>
                                            <center><img src="<?php echo base_url() . 'uploads/' . $key['fxr_foto2'] ?>"
                                                         with=158 height=160></center>
                                        </td>
                                        <td>
                                            <center><img src="<?php echo base_url() . 'uploads/' . $key['fxr_foto3'] ?>"
                                                         with=158 height=160></center>
                                        </td>
                                        <td>
                                            <center><img src="<?php echo base_url() . 'uploads/' . $key['fxr_foto4'] ?>"
                                                         with=158 height=160></center>
                                        </td>
                                        <td>

                                            <a href="<?php echo base_url() ?>index.php/imagen/del/<?php echo $key['fxr_codigo'] ?>"
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