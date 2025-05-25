
const checkbox = document.getElementById("checkbox");
const inputsPassword = document.getElementsByClassName('password');

const togglePassword = () => {
    Array.from(inputsPassword).forEach(element => {
        element.type = element.type  === 'password'? 'text': 'password';
    });
}

checkbox.addEventListener("click",togglePassword);
