<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Nueva obra</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?= base_url()?>index.php/repertorio/guardar_repertorio/" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                                <div class="form-group">
                                    <label>Nombre de la obra</label>
                                    <input type="text" class="form-control" id="obra" name="obra" placeholder="Obra">
                                </div>
                                <div class="form-group">
                                    <label>Director</label>
                                    <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                                </div>
                                <div class="form-group">
                                    <label>Género</label>
                                    <input type="text" class="form-control" id="genero" name="genero" placeholder="Género">
                                </div>
                                <div class="form-group">
                                    <label>Duración</label>
                                    <input type="text" class="form-control" id="duracion" name="duracion" placeholder="Duracion">
                                </div>
                                <div class="form-group">
                                    <label>Sinopsis</label>
                                    <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Sinopsis">
                                </div>
                                <div class="form-group">
                                    <label>Tiempo de montaje</label>
                                    <input type="text" class="form-control" id="tiempomon" name="tiempomon" placeholder="Tiempo de montae">
                                </div>
                                <div class="form-group">
                                    <label>Tiempo de desmontaje</label>
                                    <input type="text" class="form-control" id="tiempodes" name="tiempodes" placeholder="Tiempo de desmontaje">
                                </div>

                            <div class="form-group">
                                <label>Estado</label>

                                <select class="form-control" id="estado" name="estado" placeholder="Estados">
                                    <option>Seleccione el estado</option>
                                    <option value="0">En repertorio</option>
                                    <option value="1">En programación</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Temporada</label>

                                <select class="form-control" id="temporada" name="temporada" placeholder="Estados">
                                    <option value="Enero">Enero</option>
                                    <option value="Febrero">Febrero</option>
                                    <option value="Marzo">Marzo</option>
                                    <option value="Abril">Abril</option>
                                    <option value="Mayo">Mayo</option>
                                    <option value="Junio">Junio</option>
                                    <option value="Julio">Julio</option>
                                    <option value="Agosto">Agosto</option>
                                    <option value="Septiembre">Septiembre</option>
                                    <option value="Octubre">Octubre</option>
                                    <option value="Noviembre">Noviembre</option>
                                    <option value="Diciembre">Diciembre</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Cantidad de sillas disponibles</label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad de sillas disponibles">
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