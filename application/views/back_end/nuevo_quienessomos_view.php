<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Nuevo Artista</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open_multipart('quienessomos/do_upload');  ?>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                            >
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion"
                                   placeholder="Descripcion" >
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter"
                                   placeholder="Twitter" >
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook"
                            >
                        </div>
                        <div class="form-group">
                            <label>Instragram</label>
                            <input type="text" class="form-control" id="instragram" name="instagram"
                                   placeholder="Instagram">
                        </div>

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