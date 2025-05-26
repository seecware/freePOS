const submitForm = document.getElementById("submitForm");

const registerData = () => {
    const name = document.getElementById("user_name");
    const email = document.getElementById("email");
    const birthdate = document.getElementById("birthdate");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirm_password");
    const errorMessage = document.getElementById("error_message");
    const messageSucces = document.getElementById("message_succes");

    if(name.value==="" || email.value==="" || birthdate.value==="" || password.value===""){
        messageSucces.style.display = "flex";
        messageSucces.style.backgroundColor = "rgb(247 187 187)";
        messageSucces.style.color = "rgb(83 20 20)";
        messageSucces.textContent = "Hay campos incompletos";

        return;
    }
    messageSucces.style.display = "none";
    if(confirmPassword.value === password.value){
        //aqui va el codigo para enviar data a db para crear cuenta
        messageSucces.style.display = "flex"; 
        messageSucces.style.backgroundColor = "rgb(187 247 208)";//verde claro
        messageSucces.style.color = "rgb(20 83 45)";//verde fuerte
        messageSucces.textContent = "¡Cuenta creada exitosamente!";
        password.style.backgroundColor = "white";
        confirmPassword.style.backgroundColor = "white";
        password.style.borderColor = "#d1d5db";
        confirmPassword.style.borderColor = "#d1d5db";
        errorMessage.style.display = "none"
    }else{
        errorMessage.style.display = "flex";
        password.style.borderColor = "red";
        confirmPassword.style.borderColor = "red";
        password.style.backgroundColor = "#ffebeb";
        confirmPassword.style.backgroundColor = "#ffebeb";
    }
}


submitForm.addEventListener("click",registerData);
