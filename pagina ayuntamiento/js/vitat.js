console.log('ready!');

const direccion = document.getElementById('dirtra_id');

direccion.addEventListener('change', e => {
    console.log(e.target.value);

    let tramites_imagen = document.getElementById('tramites_imagen_urbana');
    let tramites_admin = document.getElementById('tramites_admin_urbana');
    tramites_admin.setAttribute('disabled','');
    tramites_imagen.setAttribute('disabled','');

    if ( parseInt(e.target.value) === 1 ){
        //Es imagen urbana
        showTramitesImagenUrbana(tramites_imagen, tramites_admin);

    } else if ( parseInt(e.target.value) === 2 ){
        showTramitesAdminUrbana(tramites_admin, tramites_imagen);

    } else {
        console.log('Debes seleccionar una opcion');
    }
});


function showTramitesImagenUrbana(tramites_imagen, tramites_admin){
    tramites_imagen.removeAttribute('disabled');

    if ( !tramites_admin.getAttribute('disabled') ){
        tramites_admin.setAttribute('disabled','');
    }
}

function showTramitesAdminUrbana(tramites_admin, tramites_imagen){
    tramites_admin.removeAttribute('disabled');
    
    if ( !tramites_imagen.getAttribute('disabled') ){
        tramites_imagen.setAttribute('disabled','');
    }
}