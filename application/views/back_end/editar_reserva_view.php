<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">

                    <!-- form start -->
                    <?php foreach ($repertoriosedicion as $key) ?>
                    <form action="<?= base_url() ?>index.php/reserva/upd_reserva/" method="POST"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Obra</label><br>
                            <select class="selectpicker" name="obra" id="obra" data-live-search="true">
                                <option
                                    value="<?= $key['rep_codigo'] ?>"><?= $key['rep_obra'] ?></option>
                                <?php foreach ($obras as $repertorio) { ?>
                                    <option
                                        value="<?= $repertorio['rep_codigo'] ?>"><?= $repertorio['rep_obra'] ?></option>

                                <?php } ?>
                            </select>
                            <div class="form-group">
                                <label>Nombre completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                       placeholder="Nombre completo" value="<?= $key['res_nombre'] ?>">
                            </div>


                            <div class="form-group">
                                <label>Fecha</label><br>
                                <input type="text" placeholder="Seleccione fecha" id="fecha" name="fecha"
                                       value="<?= $key['res_fecha'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Número de sillas</label>
                                <select class="form-control" id="sillas" name="sillas" placeholder="Número de sillas">
                                    <option value="<?= $key['res_sillas'] ?>"><?= $key['res_sillas'] ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Check In</label>

                            <select class="form-control" id="sillas" name="checkin" placeholder="checkin">
                                <option value="<?= $key['res_activo'] ?>"><?= $key['res_activo'] ?></option>
                                <option value="0">Ingreso al teatro</option>
                                <option value="1">Reservada</option>

                            </select>
                        </div>


                        <!-- /.box-body -->
                        <input type="hidden" value="<?= $key["res_codigo"] ?>" name="res_codigo">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->