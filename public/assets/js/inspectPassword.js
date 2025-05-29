//Esta funcion valida la seguridad de la contraseña del usuario

const password = document.getElementById("password");
const message = document.getElementById("valid_password");
const numberRegex = /[0-9]/;
const specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

const modifyPassword = (color, mssg) =>{
    message.style.backgroundColor = color;
    message.textContent = mssg;
}

password.addEventListener("keyup",()=>{
    message.classList.remove("hidden");
    let flags = 0;
    if(password.value.length >= 6 )flags++;
    if(numberRegex.test(password.value))flags++;
    if(specialCharRegex.test(password.value))flags++;

    if(flags >= 1 && password.value.length >= 6 ){
        modifyPassword("#f9a90654", "Contraseña poco segura");//amarilla
        if(flags >=2){
            modifyPassword("#27d5274f", "Contraseña segura");//verde
            if(flags === 3){
                modifyPassword("#00800057", "Contraseña muy segura");//verde fuerte
            }else;
        }else;
    }else{
        modifyPassword("#ff00004d", "Contraseña nada segura");//rojo
    }

    if(password.value.length <1)message.classList.add("hidden");
})
