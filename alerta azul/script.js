
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("boton-emergencia").addEventListener("click", function() {
        document.getElementById("formulario-emergencia").style.display = "block";
        document.getElementById("formulario-normal").style.display = "none";
    });

    document.getElementById("boton-normal").addEventListener("click", function() {
        document.getElementById("formulario-emergencia").style.display = "none";
        document.getElementById("formulario-normal").style.display = "block";
    });

    document.getElementById("submit-emergencia").addEventListener("click", function(event) {
        mostrarMensaje(event, true);
    });

    document.getElementById("submit-normal").addEventListener("click", function(event) {
        mostrarMensaje(event, false);
    });

    function mostrarMensaje(event, esEmergencia) {
        event.preventDefault(); // Evitar el envío del formulario

        var mensajeDiv = document.getElementById("mensaje");
        var tiempoEsperaTexto = document.getElementById("tiempo-espera-texto");

        if (esEmergencia) {
            tiempoEsperaTexto.textContent = "TIEMPO DE ESPERA: Lo antes posible";
        } else {
            tiempoEsperaTexto.textContent = "TIEMPO DE ESPERA: Espere su llamado";
        }

        mensajeDiv.style.display = "block";

        // Ocultar el mensaje después de 3 segundos (3000 milisegundos)
        setTimeout(function() {
            mensajeDiv.style.display = "none";
        }, 3000);
    }
})
;