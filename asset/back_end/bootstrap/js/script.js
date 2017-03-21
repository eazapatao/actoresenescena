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
});;
