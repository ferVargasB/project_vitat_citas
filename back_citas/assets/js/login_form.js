const login_form = document.getElementById('login_form');

function show_response(response){

    if ( response.status === 'error'){
        alert(mensaje);
    } else {
        console.log(response.mensaje);
    }
}

async function login(){
    let URL = 'http://localhost/project_vitat_citas/back_citas/index.php/Login/submit/';
    let dataForm = new FormData(login_form);

    try {
        const response = await fetch(URL, {
            method: 'POST',
            body: dataForm
        });

        json_response = await response.json();
        show_response(json_response);
    } catch (error) {
        alert('Ocurrió un error, verifica tu correo y/o password');
    }
}


login_form.addEventListener('submit', e => {
    e.preventDefault();
    console.log("Se ha presionado submit");

    login();
});