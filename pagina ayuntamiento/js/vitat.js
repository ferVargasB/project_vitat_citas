console.log('ready!');
const servidor = 'http://localhost/project_vitat_citas/back_citas/index.php/Cita/'

const direccion = document.getElementById('dirtra_id');
const fecha_solicitada = document.getElementById('fecha');

fecha_solicitada.addEventListener('change', e => {
    console.log(e.target.value);
    get_citas_dia(servidor, e.target.value);
    console.log('esperando al servidor...');
});

direccion.addEventListener('change', e => {
    console.log(e.target.value);

    let tramites_imagen = document.getElementById('tramites_imagen_urbana');
    let tramites_admin = document.getElementById('tramites_admin_urbana');
    tramites_admin.setAttribute('disabled', '');
    tramites_imagen.setAttribute('disabled', '');

    if (parseInt(e.target.value) === 1) {
        //Es imagen urbana
        showTramitesImagenUrbana(tramites_imagen, tramites_admin);

    } else if (parseInt(e.target.value) === 2) {
        showTramitesAdminUrbana(tramites_admin, tramites_imagen);

    } else {
        console.log('Debes seleccionar una opcion');
    }
});


function showTramitesImagenUrbana(tramites_imagen, tramites_admin) {
    tramites_imagen.removeAttribute('disabled');

    if (!tramites_admin.getAttribute('disabled')) {
        tramites_admin.setAttribute('disabled', '');
    }
}

function showTramitesAdminUrbana(tramites_admin, tramites_imagen) {
    tramites_admin.removeAttribute('disabled');

    if (!tramites_imagen.getAttribute('disabled')) {
        tramites_imagen.setAttribute('disabled', '');
    }
}

function show_citas(data){
    let seleciona_hora_element = document.getElementById('horas_disponibles');

    const {data:horas_disponibles} = data;

    Object.values(horas_disponibles).forEach(element => {
        let option = document.createElement('option');
        option.value = element;
        option.innerText = element;

        seleciona_hora_element.append(option);
    });

    seleciona_hora_element.removeAttribute('disabled');
}

async function get_citas_dia(servidor, fecha_solicitada) {
    const response = await fetch(`${servidor}get_citas_dia/${fecha_solicitada}`,);
    const responseJson = await response.json();
    console.log(responseJson);
    show_citas(responseJson);
}

