/*** Aquí corren las funciones del script ***/

//Direccion del servidor
const servidor = 'http://localhost/project_vitat_citas/back_citas/index.php/Cita/';

//Elementos del tipo de tramite y select de citas
const direccion = document.getElementById('dirtra_id');
const fecha_solicitada = document.getElementById('fecha');
const formulario = document.getElementById('vitatForm');




/***  Declaración de funciones  ***/

//Evento para obtener las citas dispoibles del tramite
fecha_solicitada.addEventListener('change', e => {


    //Cada vez que cambia de direccion reinicia la fecha
    /*     if (fecha_solicitada.value) {
            fecha_solicitada.value = '';
        } */

    //Se valida que se haya escogido el tipo de tramite
    if (!direccion.value || !direccion.value) {

        Swal.fire({
            title: 'Error!',
            text: 'Debes seleccionar una dirección y un trámite',
            icon: 'error'
        });

    } else {
        get_citas_dia(servidor, e.target.value);
    }
});

direccion.addEventListener('change', e => {

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


/* Evento submit para realizar el registro */
formulario.addEventListener('submit', e => {
    e.preventDefault();
    realizarRegistro();
});


function realizarRegistro() {
    let formElement = formulario;
    let data = new FormData(formElement);
    sendData(data);
}


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

function validar_citas(data) {
    let { estatus, data: horas_disponibles } = data;

    //Si hay citas dispoibles
    if (estatus === '0' || estatus === '2') {

        validar_select_element(horas_disponibles);

        //No hay citas disponibles en el día    
    } else if (estatus === '1') {
        Swal.fire({
            title: 'Error!',
            text: 'No hay citas disponibles para este día, intenta con otro',
            icon: 'error'
        });
    } else {
        console.log('Ninguna opcion');
    }

}

function validar_select_element(citas) {

    let seleciona_hora_element = document.getElementById('horas_disponibles');
    let claves_horas = Object.keys(citas);
    let horas = Object.values(citas);

    if (seleciona_hora_element.length != 0) {
        update_citas(seleciona_hora_element);
        show_citas(seleciona_hora_element, claves_horas, horas);
    } else {
        show_citas(seleciona_hora_element, claves_horas, horas);
    }

    seleciona_hora_element.removeAttribute('disabled');
    console.log(seleciona_hora_element.length);
}

function update_citas(select_element) {
    while (select_element.length != 0) {
        select_element.removeChild(select_element.firstElementChild);
    }
}

function show_citas(seleciona_hora_element, claves_horas, horas) {
    for (let index = 0; index < claves_horas.length; index++) {
        let option = document.createElement('option');
        option.value = horas[index];
        option.innerText = horas[index];

        seleciona_hora_element.append(option);
    }
}


async function get_citas_dia(servidor, fecha_solicitada) {

    try {

        const response = await fetch(`${servidor}get_citas_dia/${fecha_solicitada}`);
        const responseJson = await response.json();
        validar_citas(responseJson);

    } catch (error) {
        Swal.fire({
            title: 'Error!',
            text: 'Ocurrió un error, vuelve a intentarlo',
            icon: 'error'
        });
    }
}

async function sendData(dataForm) {
    try {
        const response = await fetch(`${servidor}realizar_registro/`, {
            method: 'post',
            body: dataForm
        });
        const responseJson = await response.json();
        Swal.fire({
            title: 'Éxito',
            text: 'Se ha creado su cita',
            icon: 'success'
        });
        formulario.reset(); 
    } catch (error) {
        Swal.fire({
            title: 'Error!',
            text: 'Ocurrió un error al realizar el registro',
            icon: 'error'
        });
    }
}

