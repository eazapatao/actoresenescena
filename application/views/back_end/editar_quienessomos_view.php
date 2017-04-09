<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Editar Artista</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php foreach ($quienessomos as $key) ?>
                    <form action="<?= base_url() ?>index.php/quienessomos/upd_quienessomos/" method="POST"
                          enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                       value="<?= $key['quie_nombre'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion"
                                       placeholder="Descripcion" value="<?= $key['quie_descripcion'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                       placeholder="Twitter" value="<?= $key['quie_twitter'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook"
                                       value="<?= $key['quie_facebook'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Instragram</label>
                                <input type="text" class="form-control" id="instragram" name="instagram"
                                       placeholder="Instagram" value="<?= $key['quie_instagram'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Fotografía</label>
                                <input type="text" class="form-control" id="fotografia" name="fotografia"
                                       placeholder="Fotografia" value="<?= $key['quie_fotografia'] ?>">
                            </div>


                        </div><!-- /.box-body -->
                        <input type="hidden" value="<?= $key["quie_codigo"] ?>" name="quie_codigo">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->