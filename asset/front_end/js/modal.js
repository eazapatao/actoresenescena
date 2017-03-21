//con esta funcion pasamos los paremtros a los text del modal.
selPersona = function(idPersona, nombre, app, apm, email){
    $('#mhdnIdPersona').val(idPersona);
    $('#mtxtNombre').val(nombre);
    $('#mtxtApPaterno').val(app);
    $('#mtxtApMaterno').val(apm);
    $('#mtxtEmail').val(email);
    // $('#mcboOtro value(3)').prop('selected', true);
    $('[name=mcboOtro]').val(7);

};

//metodo update del modal
$('#mbtnUpdPerona').click(function(){
    var idP = $('#mhdnIdPersona').val();
    var nom = $('#mtxtNombre').val();
    var app = $('#mtxtApPaterno').val();
    var apm = $('#mtxtApMaterno').val();
    var mail = $('#mtxtEmail').val();
    $.post(baseurl+"cpersona/updPersona",
        {
            mhdnIdPersona:idP,
            mtxtNombre:nom,
            mtxtApPaterno:app,
            mtxtApMaterno:apm,
            mtxtEmail:mail
        },
        function(data){
            if (data == 1) {
                alert('Se grabo');
                $('#mbtnCerrarModal').click();

                location.reload();
            }
        });
});

//metodo de fecha
$(function () {
    var bindDatePicker = function() {
        $(".date").datetimepicker({
            format:'YYYY-MM-DD',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        }).find('input:first').on("blur",function () {
            // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
            // update the format if it's yyyy-mm-dd
            var date = parseDate($(this).val());

            if (! isValidDate(date)) {
                //create date based on momentjs (we have that)
                date = moment().format('YYYY-MM-DD');
            }

            $(this).val(date);
        });
    }

    var isValidDate = function(value, format) {
        format = format || false;
        // lets parse the date to the best of our knowledge
        if (format) {
            value = parseDate(value);
        }

        var timestamp = Date.parse(value);

        return isNaN(timestamp) == false;
    }

    var parseDate = function(value) {
        var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
        if (m)
            value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

        return value;
    }

    bindDatePicker();
});