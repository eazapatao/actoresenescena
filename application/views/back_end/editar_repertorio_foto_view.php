<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Editar fotos por repertorio</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php foreach ($repertorios_foto as $key) ?>
                    <form action="<?= base_url() ?>index.php/repertorio/upd_repertorio/" method="POST"
                          enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Obra</label>
                                <input type="text" class="form-control" id="obra" name="obra" placeholder="Obra"
                                       value="<?= $key['rep_obra'] ?>" disabled=”disabled”>
                            </div>

                            <div class="form-group">
                                <label>Foto 1</label>
                                <input type="text" class="form-control" id="foto" name="foto"
                                       placeholder="Foto 1" value="<?= $key['fxr_foto'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Foto 2</label>
                                <input type="text" class="form-control" id="foto2" name="foto2" placeholder="Foto 2"
                                       value="<?= $key['fxr_foto2'] ?>">
                            </div>

                        </div><!-- /.box-body -->
                        <input type="hidden" value="<?= $key["fxr_codigo"] ?>" name="frx_codigo">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->