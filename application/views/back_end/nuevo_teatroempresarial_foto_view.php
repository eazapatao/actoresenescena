<aside class="right-side">
    <!-- Content Header (Page header) -->
   <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Agregar fotografías</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open_multipart('teatroempresarial/do_upload');  ?>
                    <div class="form-group">
                        <label>Nombre de la empresa</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la empresa">
                    </div>
                    <p>
                        <?php echo form_label('Archivo 1', 'userfile') ?>
                        <?php echo form_upload('userfile') ?>
                    </p>

                    <p><?php echo form_submit('submit', 'Subir Archivos!') ?></p>
                    <?php form_close() ?>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->