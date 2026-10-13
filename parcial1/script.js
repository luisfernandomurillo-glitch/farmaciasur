const btnMensaje = document.querySelector("#btn-pedido");
const mensaje = document.querySelector("#mensaje");

function mostrarMensaje() {
  mensaje.textContent = "Pedido confirmado - Te atiende Luis Fernando Murillo Apaza";
  mensaje.classList.remove("oculto");
}

btnMensaje.addEventListener("click", mostrarMensaje);   