<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Nueva reserva</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?= base_url() ?>index.php/reserva/guardar_reserva/" method="POST"
                          enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="form-group">
                                <label>Nombre de la obra</label><br>
                                <select class="selectpicker" name="obra" id="obra" data-live-search="true">
                                    <option>Seleccione Obra</option>
                                    <?php foreach ($obras as $obra) { ?>
                                        <option value="<?= $obra['rep_codigo'] ?>"><?= $obra['rep_obra'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nombre completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                       placeholder="Nombre completo">
                            </div>

                            <div class="form-group">
                                <label>Fecha</label><br>
                                <input type="text" placeholder="Seleccione fecha" id="fecha" name="fecha">
                            </div>


                            <div class="form-group">
                                <label>Número de sillas</label>

                                <select class="form-control" id="sillas" name="sillas" placeholder="Sillas">
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

                            <div class="form-group">
                                <label>Tipo de boleta</label>

                                <select class="form-control" id="sillas" name="sillas" placeholder="Sillas">
                                    <option value="15000">Particular $15.000</option>
                                    <option value="12000">Suscriptor de la patria $12.000</option>
                                    <option value="10000">Estudiante con carnet $10.000</option>
                                </select>
                            </div>


                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->