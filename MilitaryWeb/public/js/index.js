// Navbar
document.addEventListener("scroll", function () {
    var navbar = document.querySelector('.oscuroScroll');
    if (window.scrollY > 0) {
        navbar.classList.add('opaque');
    } else {
        navbar.classList.remove('opaque');
    }
});

// Funciones para cargar las fotos autimaticamente
function previewImage(event, imageId) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function () {
        var dataURL = reader.result;
        var output = document.getElementById(imageId);
        output.src = dataURL;
        output.classList.remove('hidden');
    };
    reader.readAsDataURL(input.files[0]);
}


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
        <td class="border px-4 py-2">${data.user.province}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Imagen</strong></td>
        <td class="border px-4 py-2"><img src="storage/Images/imagesUsers/${data.user.profile_photo_path}" alt="Imagen del usuario" class="w-16 h-16 object-cover"></td>
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

// Modal de detalles de una Mision
async function showMissionsDetails(MissionId) {
    // Hacer una solicitud AJAX para obtener los detalles del usuario
    const response = await fetch(`/getMissionsDetails/${MissionId}`);
    const data = await response.json();

    // Crear el HTML para los detalles del usuario
    const missionDetailsHTML = `
    <table class="table-auto w-full text-left">
    <tr>
        <th class="px-4 py-2 min-w-40">Campo</th>
        <th class="px-4 py-2">Detalle</th>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Título</strong></td>
        <td class="border px-4 py-2">${data.mission.title}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Subtítulo</strong></td>
        <td class="border px-4 py-2">${data.mission.subtitle}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Descripción</strong></td>
        <td class="border px-4 py-2">${data.mission.description}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Fecha</strong></td>
        <td class="border px-4 py-2">${data.mission.date}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Estado</strong></td>
        <td class="border px-4 py-2">${data.mission.status}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Tipo</strong></td>
        <td class="border px-4 py-2">${data.mission.type}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Prioridad</strong></td>
        <td class="border px-4 py-2">${data.mission.priority}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Objetivo</strong></td>
        <td class="border px-4 py-2">${data.mission.objective}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Acción</strong></td>
        <td class="border px-4 py-2">${data.mission.action}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Resultado</strong></td>
        <td class="border px-4 py-2">${data.mission.result}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Foto</strong></td>
        <td class="border px-4 py-2"><img src="storage/Images/images-Missions/missions/${data.mission.photo}" alt="Imagen de la misión" class="w-20 h-16 object-cover"></td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Ejército</strong></td>
        <td class="border px-4 py-2">${data.armyName}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Destino</strong></td>
        <td class="border px-4 py-2">${data.destinationName}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Persona a cargo</strong></td>
        <td class="border px-4 py-2">${data.userName}</td>
    </tr>
</table>
    `;

    // Mostrar el modal con SweetAlert2
    Swal.fire({
        title: "Detalle de Mision",
        html: missionDetailsHTML,
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


// Modal de detalles de una Destinos
async function showDestinationsDetails(DestinationId) {
    // Hacer una solicitud AJAX para obtener los detalles del usuario
    const response = await fetch(`/getDestinationsDetails/${DestinationId}`);
    const data = await response.json();

    // Crear el HTML para los detalles del usuario
    const destinationDetailsHTML = `
    <table class="table-auto w-full text-left">
    <tr>
        <th class="px-4 py-2 min-w-40">Campo</th>
        <th class="px-4 py-2">Detalle</th>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Nombre</strong></td>
        <td class="border px-4 py-2">${data.destination.name}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Descripción</strong></td>
        <td class="border px-4 py-2">${data.destination.description}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Nombre Pais</strong></td>
        <td class="border px-4 py-2">${data.countryName}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Descripción Pais</strong></td>
        <td class="border px-4 py-2">${data.countryDescription}</td>
    </tr>
</table>
    `;

    // Mostrar el modal con SweetAlert2
    Swal.fire({
        title: "Detalle de Destino",
        html: destinationDetailsHTML,
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


// Modal de detalles de una Destinos
async function showCountryDetails(CountryId) {
    // Hacer una solicitud AJAX para obtener los detalles del usuario
    const response = await fetch(`/getCountryDetails/${CountryId}`);
    const data = await response.json();

    // Crear el HTML para los detalles del usuario
    const countryDetailsHTML = `
    <table class="table-auto w-full text-left">
    <tr>
        <th class="px-4 py-2 min-w-40">Campo</th>
        <th class="px-4 py-2">Detalle</th>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Nombre</strong></td>
        <td class="border px-4 py-2">${data.country.name}</td>
    </tr>
    <tr>
        <td class="border px-4 py-2"><strong>Descripción</strong></td>
        <td class="border px-4 py-2">${data.country.description}</td>
    </tr>
</table>
    `;

    // Mostrar el modal con SweetAlert2
    Swal.fire({
        title: "Detalle del Pais",
        html: countryDetailsHTML,
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


// Boton de seguir
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.follow-btn').forEach(button => {
        button.addEventListener('click', () => {
            const missionId = button.dataset.id;
            const followed = button.dataset.followed === 'true';

            fetch(`/missions/${missionId}/${followed ? 'unfollow' : 'follow'}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    button.dataset.followed = !followed;
                    button.textContent = !followed ? 'Dejar de Seguir' : 'Seguir';
                    // button.classList.toggle('bg-blue-500', !followed);
                    // button.classList.toggle('bg-red-500', followed);
                })
                .catch(error => console.error('Error:', error));
        });
    });

    document.querySelectorAll('.unfollow-btn').forEach(button => {
        button.addEventListener('click', () => {
            const missionId = button.dataset.id;

            fetch(`/missions/${missionId}/unfollow`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    button.closest('div').remove();
                })
                .catch(error => console.error('Error:', error));
        });
    });
});




// Modal para mostrar a los seguidores de una Mision
async function showFollowers(missionId) {
    try {
        // Hacer una solicitud AJAX para obtener los seguidores de la misión
        const response = await fetch(`/missions/${missionId}/followers`);
        const followers = await response.json();

        // Crear el HTML para la lista de seguidores
        let followersHTML = `
        <table class="table-auto w-full text-left">
            <tr>
                <th class="px-4 py-2">Nombre Completo</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Rango</th>
            </tr>
        `;

        followers.forEach(follower => {
            followersHTML += `
            <tr>
                <td class="border px-4 py-2">${follower.name} ${follower.surname}</td>
                <td class="border px-4 py-2">${follower.email}</td>
                <td class="border px-4 py-2">${follower.range.name}</td>
            </tr>
            `;
        });

        followersHTML += `</table>`;

        // Mostrar el modal con SweetAlert2
        Swal.fire({
            title: "Seguidores de la Misión",
            html: followersHTML,
            showCancelButton: false,
            showConfirmButton: false,
            showCloseButton: true,
            confirmButtonText: "Cerrar",
            width: "800px",
            padding: "30px",
            customClass: {
                container: 'hidden-scroll-bar'
            },
        });
    } catch (error) {
        console.error("Error fetching followers:", error);
        Swal.fire({
            title: "Error",
            text: "No se pudieron cargar los seguidores.",
            icon: "error",
            confirmButtonText: "Cerrar",
        });
    }
}
