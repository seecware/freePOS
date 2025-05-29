const form = document.getElementById("registration_form");

const registerData = () => {
    const name = document.getElementById("user_name");
    const email = document.getElementById("email");
    const birthdate = document.getElementById("birthdate");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirm_password");
    const errorMessage = document.getElementById("error_message");//cuando las contraseñas no son las mismas
    const messageEmptyFiles = document.getElementById("message_succes");
    const registrateSecction = document.getElementById("registrate_secction");
    const succesRegistrate = document.getElementById("animation_succes");

    if(name.value==="" || email.value==="" || birthdate.value==="" || password.value===""){
        messageEmptyFiles.style.display = "flex";
        return;
    }

    messageEmptyFiles.style.display = "none";
    if(confirmPassword.value === password.value){
        registrateSecction.classList.add("hidden");
        succesRegistrate.classList.remove("hidden");
        //aqui va el codigo para enviar data a db para crear cuenta

    }else{
        errorMessage.style.display = "flex";
        password.style.borderColor = "red";
        confirmPassword.style.borderColor = "red";
        password.style.backgroundColor = "#ffebeb";
        confirmPassword.style.backgroundColor = "#ffebeb";
    }
}


form.addEventListener("submit",(e)=>{
    e.preventDefault();
    registerData();
});
