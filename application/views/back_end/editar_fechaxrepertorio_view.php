<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Editar Fechas de funciones</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php foreach ($repertorios as $key) ?>
                    <form action="<?= base_url() ?>index.php/repertorio/upd_fechaxrepertorio/" method="POST"
                          enctype="multipart/form-data">
                        <div class="box-body">


                            <label>Obra</label><br>
                            <select class="selectpicker" name="obra" id="obra" data-live-search="true">
                                <option
                                    value="<?= $key['rep_codigo'] ?>"><?= $key['rep_obra'] ?></option>
                                <?php foreach ($listarepertorios as $repertorio) { ?>
                                    <option
                                        value="<?= $repertorio['rep_codigo'] ?>"><?= $repertorio['rep_obra'] ?></option>

                                <?php } ?>
                            </select>

                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="text" class="form-control" id="fecha" name="fecha"
                                       placeholder="Fecha" value="<?= $key['fxr_fecha'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Sillas disponibles</label>
                                <input type="text" class="form-control" id="sillas" name="sillas"
                                       placeholder="Sillas disponibles" value="<?= $key['fxr_sillas'] ?>">
                            </div>

                        </div><!-- /.box-body -->
                        <input type="hidden" value="<?= $key["fxr_codigo"] ?>" name="fxr_codigo">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->