
<!-- jQuery 2.2.3 -->

<!-- <script src="<?php echo base_url()?>asset/back_end/plugins/jQuery/jquery-2.2.3.min.js"></script>-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
<script src="<?php echo base_url() ?>asset/front_end/js/jquery-1.11.1.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>asset/back_end/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()?>asset/back_end/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>asset/back_end/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>asset/back_end/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>asset/back_end/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>asset/back_end/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()?>asset/back_end/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Datatable -->
<script src="<?php echo base_url()?>asset/back_end/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>asset/back_end/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>asset/back_end/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>asset/back_end/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>asset/back_end/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>asset/back_end/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>asset/back_end/dist/js/demo.js"></script>

<!-- Selectpicker-->
<script src="<?php echo base_url()?>asset/back_end/bootstrap/js/bootstrap-select.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>asset/back_end/bootstrap/js/bootstrap-tooltip.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>asset/back_end/bootstrap/js/bootstrap-confirmation.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>asset/back_end/bootstrap/js/script.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
<script type="text/javascript" src="<?php echo base_url()?>asset/back_end/plugins/datatables/dataTables.min.js"></script>
<!--Selectpicker-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#fecha').datepicker({
            format: "yyyy/mm/dd"
        });

    });
</script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#repertorio_list').DataTable();
    } );
</script>

<script type="text/javascript">
    // For demo to fit into DataTables site builder...
    $('#repertorio_list')
        .removeClass( 'display' )
        .addClass('table table-striped table-bordered');
</script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#contacto_list').DataTable();
    } );
</script>

<script type="text/javascript">
    // For demo to fit into DataTables site builder...
    $('#contacto_list')
        .removeClass( 'display' )
        .addClass('table table-striped table-bordered');
</script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#reserva_list').DataTable();
    } );
</script>

<script type="text/javascript">
    // For demo to fit into DataTables site builder...
    $('#reserva_list')
        .removeClass( 'display' )
        .addClass('table table-striped table-bordered');
</script>

<script type="text/javascript">
    var base_url = $("#base_url").val();
    $('[data-toggle=confirmation]').confirmation({
        title: '¿Esta seguro de eliminar este registro?',
        btnOkLabel: 'Si',
        btnCancelLabel: 'No',
        href: function(){
            var ref = $(this).attr('data-ref');
            return ref;
        },
        onCancel: function(){
            $('[data-toggle=confirmation]').confirmation('hide')
        }
    });
</script>





</body>
</html>
