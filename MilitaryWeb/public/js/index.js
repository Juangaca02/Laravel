// Navbar
document.addEventListener("scroll", function () {
    var navbar = document.querySelector('.oscuroScroll');
    if (window.scrollY > 0) {
        navbar.classList.add('opaque');
    } else {
        navbar.classList.remove('opaque');
    }
});


// Modal de detalles de usuarios
async function showUserDetails(userId) {
    // Hacer una solicitud AJAX para obtener los detalles del usuario
    const response = await fetch(`/getUserDetails/${userId}`);
    const data = await response.json();

    // Crear el HTML para los detalles del usuario
    const userDetailsHTML = `
    <table class="table-auto w-full text-left">
    <tr>
        <th class="px-4 py-2">Campo</th>
        <th class="px-4 py-2">Detalle</th>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Nombre</strong></td>
        <td class="border px-4 py-2">${data.user.name}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Apellidos</strong></td>
        <td class="border px-4 py-2">${data.user.surname}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>DNI</strong></td>
        <td class="border px-4 py-2">${data.user.DNI}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Fecha de alistamiento</strong></td>
        <td class="border px-4 py-2">${data.user.entry_army_date}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Verificado</strong></td>
        <td class="border px-4 py-2">${data.user.verified ? 'Sí' : 'No'}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Rango</strong></td>
        <td class="border px-4 py-2">${data.rangeName}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Army</strong></td>
        <td class="border px-4 py-2">${data.armyName}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Teléfono</strong></td>
        <td class="border px-4 py-2">${data.user.phone}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Cumpleaños</strong></td>
        <td class="border px-4 py-2">${data.user.birthdate}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Sexo</strong></td>
        <td class="border px-4 py-2">${data.user.sex}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Email</strong></td>
        <td class="border px-4 py-2">${data.user.email}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Provincia</strong></td>
        <td class="border px-4 py-2">${data.user.town}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Ciudad</strong></td>
        <td class="border px-4 py-2">${data.user.municipality}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Imagen</strong></td>
        <td class="border px-4 py-2"><img src="${data.user.image}" alt="Imagen del usuario" class="w-16 h-16 object-cover"></td>
    </tr>
</table>
    `;

    // Mostrar el modal con SweetAlert2
    Swal.fire({
        title: "Detalles del Usuario",
        html: userDetailsHTML,
        showCancelButton: false,
        showConfirmButton: false,
        showCloseButton: true,
        confirmButtonText: "Cerrar",
        width: "600px",
        padding: "30px",
        customClass: {
            container: 'hidden-scroll-bar'
        },
    });
}
