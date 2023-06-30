
    $(document).ready( function () {
    $('#tabla').DataTable({
    
"language": {
      //"url": src="https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"

    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }

    },



     dom: 'Blfrtip', //sib l se quitar en ver por cantidad de datos
     // "lengthChange": false, //para ocultar cantidad de datos
     "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    


    buttons: [
        'excel', 'pdf'
    ],




   "order": [[ 4, 'des' ]]


    
});


});



