<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Agregar fechas</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?= base_url()?>index.php/repertorio/guardar_fechaxrepertorio/" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nombre de la obra</label><br>
                                <select class="selectpicker" name="obra" id="obra" data-live-search="true">
                                    <option>Seleccione Obra</option>
                                    <?php foreach($repertorioslista as $obra){?>
                                        <option value="<?= $obra['rep_codigo']?>"><?= $obra['rep_obra']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
                            </div>
                                <div class="form-group">
                                    <label>Sillas disponibles</label>
                                    <input type="text" class="form-control" id="sillas" name="sillas" placeholder="Sillas disponibles">
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