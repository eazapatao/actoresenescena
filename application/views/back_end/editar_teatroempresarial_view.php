<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Nuevo cliente</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php foreach ($teatroempresarial as $key) ?>
                    <form action="<?= base_url() ?>index.php/teatroempresarial/upd_teatroempresarial/" method="POST"
                          enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"
                                       value="<?= $key['tea_descripcion'] ?>">
                            </div>

                        </div><!-- /.box-body -->
                        <input type="hidden" value="<?= $key["tea_codigo"] ?>" name="tea_codigo">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->