<aside class="right-side">
    <!-- Content Header (Page header) -->
   <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Agregar Fotografías de formación</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open_multipart('formacion/do_upload');  ?>

                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                    </div>
                    <p>
                        <?php echo form_label('Archivo 1', 'userfile') ?>
                        <?php echo form_upload('userfile') ?>
                    </p>
                    <p>
                        <?php echo form_label('Archivo 2', 'userfile1') ?>
                        <?php echo form_upload('userfile1') ?>
                    </p>
                    <div class="form-group">
                        <label>Tipo</label>

                        <select class="form-control" id="tipo" name="tipo" placeholder="Tipo">
                            <option>Seleccione el tipo</option>
                            <option value="Grande">Grande</option>
                            <option value="Pequeña">Pequeña</option>
                        </select>
                    </div>

                    <p><?php echo form_submit('submit', 'Subir Archivos!') ?></p>
                    <?php form_close() ?>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->