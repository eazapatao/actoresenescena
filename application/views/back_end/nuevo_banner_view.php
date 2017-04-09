<aside class="right-side">
    <!-- Content Header (Page header) -->
   <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Agregar banner</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open_multipart('banner/do_upload');  ?>
                    <div class="form-group">
                        <label>En presentación</label>

                        <select class="form-control" id="activo" name="activo" placeholder="Seleccione un estado">
                            <option>Seleccione una opción</option>
                            <option value="0">Oculto</option>
                            <option value="1">En presentación</option>
                        </select>
                    </div>
                    <p>
                        <?php echo form_label('Archivo', 'userfile') ?>
                        <?php echo form_upload('userfile') ?>
                    </p>
                    <p><?php echo form_submit('submit', 'Subir Archivos!') ?></p>
                    <?php form_close() ?>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->