/**
 * Esta funcion por ahora solo esta diseñada para el login
 */

// A esta funcion le hace falta validar las credenciales de ingreso, solo son cambios superficiales por ahora

const email =  document.getElementById("email");
const password = document.getElementById("password");
const message = document.getElementById("message");

const ingresarBtn = document.getElementById("ingresar").addEventListener("click",()=>{

    if(email.value==="" || password.value===""){
        message.classList.remove("opacity-0", "pointer-events-none");
        message.classList.add("opacity-100");
        return;
    }

    document.getElementById('loader').classList.remove('hidden');
    setTimeout(()=> window.location.href = "home" ,1500);
});