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