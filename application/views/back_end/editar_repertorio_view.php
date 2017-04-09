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
                    <?php foreach ($repertorios as $key) ?>
                    <form action="<?= base_url() ?>index.php/repertorio/upd_repertorio/" method="POST"
                          enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Obra</label>
                                <input type="text" class="form-control" id="obra" name="obra" placeholder="Obra"
                                       value="<?= $key['rep_obra'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <input type="text" class="form-control" id="autor" name="autor"
                                       placeholder="Autor" value="<?= $key['rep_autor'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Director</label>
                                <input type="text" class="form-control" id="director" name="director"
                                       placeholder="Director" value="<?= $key['rep_director'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Género</label>
                                <input type="text" class="form-control" id="genero" name="genero" placeholder="Género"
                                       value="<?= $key['rep_genero'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Duración</label>
                                <input type="text" class="form-control" id="duracion" name="duracion"
                                       placeholder="Duración" value="<?= $key['rep_duracion'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Sinopsis</label>
                                <input type="text" class="form-control" id="sinopsis" name="sinopsis"
                                       placeholder="Sinopsis" value="<?= $key['rep_sinopsis'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Tiempo de montaje</label>
                                <input type="text" class="form-control" id="tiempomon" name="tiempomon"
                                       placeholder="Tiempo de montaje" value="<?= $key['rep_tiempomon'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Tiempo de desmontaje</label>
                                <input type="text" class="form-control" id="tiempodes" name="tiempodes"
                                       placeholder="Tiempo de desmontaje" value="<?= $key['rep_tiempodes'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="form-control" id="estado" name="estado" placeholder="Estado">
                                    <option value="<?= $key['rep_estado'] ?>"><?= $key['rep_estado'] ?></option>
                                    <option>Seleccione el estado</option>
                                    <option value="0">En repertorio</option>
                                    <option value="1">En programación</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Temporada</label>
                                <input type="text" class="form-control" id="temporada" name="temporada"
                                       placeholder="Temporada" value="<?= $key['rep_temporada'] ?>">
                            </div>


                            <div class="form-group">
                                <label>Cantidad de sillas disponibles</label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad"
                                       placeholder="Cantidad de sillas disponibles" value="<?= $key['rep_cantidad'] ?>">
                            </div>




                        </div><!-- /.box-body -->
                        <input type="hidden" value="<?= $key["rep_codigo"] ?>" name="rep_codigo">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->