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
                    <?php echo form_open_multipart('imagen/do_upload');  ?>
                    <div class="form-group">
                        <label>Nombre de la obra</label><br>
                        <select class="selectpicker" name="obra" id="obra" data-live-search="true">
                            <option>Seleccione Obra</option>
                            <?php foreach($repertorios as $obra){?>
                                <option value="<?= $obra['rep_codigo']?>"><?= $obra['rep_obra']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <p>
                        <?php echo form_label('Archivo 1', 'userfile') ?>
                        <?php echo form_upload('userfile') ?>
                    </p>
                    <p>
                        <?php echo form_label('Archivo 2', 'userfile1') ?>
                        <?php echo form_upload('userfile1') ?>
                    </p>
                    <p>
                        <?php echo form_label('Archivo 3', 'userfile2') ?>
                        <?php echo form_upload('userfile2') ?>
                    </p>
                    <p>
                        <?php echo form_label('Archivo 4', 'userfile3') ?>
                        <?php echo form_upload('userfile3') ?>
                    </p>
                    <p><?php echo form_submit('submit', 'Subir Archivos!') ?></p>
                    <?php form_close() ?>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->