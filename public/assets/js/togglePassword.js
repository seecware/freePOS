/*
 * Cualsea la pagina en la que quiera ser utilizada esta funcion
 * debe cumplir las siguientes especificaciones: 
 *  + Ser aplicada en una etiqueta html <input>
 *  + Esta etiqueda debe contener la clase "password" 
 */

const checkbox = document.getElementById("checkbox"); 
const inputsPassword = document.getElementsByClassName('password');

const togglePassword = () => {
    Array.from(inputsPassword).forEach(element => {
        element.type = element.type  === 'password'? 'text': 'password';
    });
}

checkbox.addEventListener("click",togglePassword);
