const cuerpo = document.querySelector("body");
const btnModo = document.querySelector("#btn-tema");

let esDeDia = false;

function cambiarModo() {
    cuerpo.classList.toggle("claro");
    esDeDia = !esDeDia;

    if (esDeDia) {
        btnModo.textContent = "Modo noche";
    } else {
        btnModo.textContent = "Modo dia";
    }
}

btnModo.addEventListener("click", cambiarModo);

const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu() {
    menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu);


const formularioConsultas = document.querySelector("#formulario-consultas");
const avisoPedido = document.querySelector("#error-pedido");

function revisarPedido(event){
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#email").value;

    if(nombre === ""){
        avisoPedido.textContent = "Falta tu nombre, caserito";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else if (correo.includes("@") === false){
        avisoPedido.textContent = "Ese correo no parece correo: le falta el @";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else{
        avisoPedido.textContent = "Formulario enviado, caserito. Te contactamos hoy";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}

formularioConsultas.addEventListener("submit", revisarPedido);