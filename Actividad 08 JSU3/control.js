// Una función llamada validarUsuario, recibo como parámetro el formulario
function validarUsuario(form) {
    let input = document.getElementById('usuario');
    if (input.value.length <= 0) {
        alert("El usuario no debe estar vacio");
        input.focus();
        return (false);
    } else {
        
        if (input.value == "" || input.value.indexOf('@', 0) == -1) {
            alert("Ingrese su usuario, el formato correcto es usu@rio");
            input.focus();
            return (false);
        } else {
            return (true);
        }
        
        return (true);
    }

}

//Validar password no vacio
function validarPassword(form) {
    let input = document.getElementById('clave');
    if (input.value.length <= 0) {
        alert("La clave no debe estar vacia");
        input.focus();
        return (false);
    } else {
        
        return (true);
    }
}
//Validar el boton de enviar
function validarEnviar(form) {

    if (!validarUsuario(form)) {
        return false;
    }

    if (!validarPassword(form)) return false;

    

    alert("Confirme el envío del formulario")
    document.test.submit();

}