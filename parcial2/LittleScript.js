const formularioTurno = document.querySelector("#form-turno");
const avisoTurno = document.querySelector("#aviso-turno");

function revisarPedido(event){

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if(nombre === "" && correo === ""){
        event.preventDefault();
        avisoTurno.textContent = "Nos falta tu nombre y tu correo para darte el turno";
        avisoTurno.classList.add("error");
        avisoTurno.classList.remove("exito");
 
    } else if (nombre === "") {
        event.preventDefault();
        avisoTurno.textContent = "Falta tu nombre";
        avisoTurno.classList.add("error");
        avisoTurno.classList.remove("exito");
    } else if (correo.includes("@") === false){
        event.preventDefault();
        avisoTurno.textContent = "Ese correo no parece correo: le falta el @";
        avisoTurno.classList.add("error");
        avisoTurno.classList.remove("exito");
    } else{
        avisoTurno.textContent = "Turno reservado - te atiende Murillo Apaza Luis Fernando";
        avisoTurno.classList.add("exito");
        avisoTurno.classList.remove("error");
    }
}

formularioTurno.addEventListener("submit", revisarPedido);