$(document).ready(function () {
    $('.verificar').change(function () {
        var id = $(this).data('id');
        var verificar = $(this).prop('checked') ? 1 : 0;

        var mensaje = $(this).prop('checked') ? 'verificar' : 'desverificar';

        // Mostrar SweetAlert para confirmar la acción
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¿Estás seguro de " + mensaje + " este usuario?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, estoy seguro'
        }).then((result) => {
            if (result.isConfirmed) {
                // Enviar la solicitud AJAX si el usuario confirma
                $.ajax({
                    url: '/verificarUser/' + id,
                    type: 'POST',
                    data: {
                        _token: $('input[name="_token"]').val(),
                        verificar: verificar
                    },
                    dataType: 'json',
                    success: function (response) {
                        // Manejar la respuesta si es necesario
                        Swal.fire(
                            '¡Hecho!',
                            'Usuario actualizado correctamente.',
                            'success'
                        );
                    },
                    error: function (xhr, status, error) {
                        // Mostrar SweetAlert con mensaje de error si hay un error
                        Swal.fire(
                            'Error',
                            'Hubo un error al actualizar el usuario.',
                            'error'
                        );
                    }
                });
            } else {
                // Desmarcar el checkbox si el usuario cancela
                $(this).prop('checked', !verificar);
            }
        });
    });
});

function confirmDelete(Id, name, type) {
    // Dependiendo de que lista provenga el usuario, redireccionar a la ruta correspondiente
    let urlType;
    if (type === 'user') {
        urlType = '/deleteUser/' + Id;
    } else if (type === 'mission') {
        urlType = '/deleteMission/' + Id;
    } else if (type === 'destination') {
        urlType = '/deleteDestination/' + Id;
    }

    Swal.fire({
        title: '¿Estás seguro?',
        text: '¿Estás seguro de eliminar ' + name + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: urlType,
                type: 'DELETE',
                data: {
                    _token: $('input[name="_token"]').val(),
                },
                dataType: 'json',
                success: function (response) {
                    // Si la eliminación fue exitosa, mostrar un SweetAlert de éxito
                    if (response.success) {
                        Swal.fire(
                            '¡Hecho!',
                            response.success,
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    }
                },
                error: function (xhr, status, error) {
                    // Manejar errores si es necesario
                    Swal.fire(
                        'Error',
                        'Se produjo un error al eliminar el usuario.',
                        'error'
                    );
                }
            });
        }
    });
}
