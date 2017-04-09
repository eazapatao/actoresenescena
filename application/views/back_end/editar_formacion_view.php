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
                    <?php foreach ($formacion as $key) ?>
                    <form action="<?= base_url() ?>index.php/formacion/upd_formacion/" method="POST"
                          enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo"
                                   placeholder="Título" value="<?= $key['for_titulo'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"
                                   value="<?= $key['for_descripcion'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Tipo</label>
                            <select class="form-control" id="tipo" name="tipo" placeholder="Tipo">
                                <option value="<?= $key['for_tipo'] ?>"><?= $key['for_tipo'] ?></option>
                                <option>Seleccione el tipo</option>
                                <option value="Grande">Grande</option>
                                <option value="Pequeña">Pequeña</option>
                            </select>
                        </div>
                        <input type="hidden" value="<?= $key["for_codigo"] ?>" name="for_codigo">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->