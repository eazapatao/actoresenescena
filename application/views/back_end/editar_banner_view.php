<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Editar fotografía del banner</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php foreach ($banner as $key) ?>
                    <form action="<?= base_url() ?>index.php/banner/upd_banner/" method="POST"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Estado</label>

                            <select class="form-control" id="activo" name="activo" placeholder="Estado">
                                <option value="<?= $key['ban_activo'] ?>"><?= $key['ban_activo'] ?></option>
                                <option value="0">Oculto</option>
                                <option value="1">En presentación</option>

                            </select>
                        </div>

                        <input type="hidden" value="<?= $key["ban_codigo"] ?>" name="ban_codigo">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->