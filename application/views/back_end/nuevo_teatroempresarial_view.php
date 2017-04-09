<aside class="right-side">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Nueva descripción de teatro empresarial</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?= base_url()?>index.php/teatroempresarial/guardar_teatroempresarial/" method="POST" enctype="multipart/form-data">
                        <div class="box-body">
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descrición">
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