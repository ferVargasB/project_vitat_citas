const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

const dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

const fecha_actual = new Date();

const fecha_element = document.querySelector("h2");
fecha_element.innerText = `${dias[fecha_actual.getDay()]}, ${fecha_actual.getDate()} de ${meses[fecha_actual.getMonth()]} de
${fecha_actual.getFullYear()}`;

const dias_restantes_mes = [];

for (let contador = parseInt(fecha_actual.getDate()); contador <= 31; contador++) {
    dias_restantes_mes.push(contador);
}

const select_day_element = document.getElementById('select-day');
dias_restantes_mes.forEach((dia) => {
    let option_element = document.createElement('option');
    option_element.value = dia;
    option_element.innerText = dia;

    select_day_element.append(option_element);
});

select_day_element.addEventListener('change', (e) => {
    console.log(parseInt(e.target.value));
});

//Se establecen los meses restantes
setMeses(fecha_actual, meses);

function setMeses(fecha_actual, meses) {
    let meses_restantes = [];
    const select_mes_element = document.getElementById('select-mes');

    for (let contador = parseInt(fecha_actual.getMonth()); contador < 12; contador++) {
        meses_restantes.push(contador);
    }

    meses_restantes.forEach( mes => {
        let option_element = document.createElement('option');
        option_element.value = mes;
        option_element.innerText = meses[mes];

        select_mes_element.append(option_element);
    });
}

//Obtiene los espacios libres del mes
function getCitaMes()