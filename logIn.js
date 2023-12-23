const eyeOpen = document.getElementById("eyeOpen");
const eyeClose = document.getElementById("eyeClose");
const password = document.getElementById("password");
const email = document.getElementById("email");
const cTc = document.getElementById("cTc");
const error = document.getElementById("error");
const box = document.getElementById("box");

eyeOpen.onclick = (() => {
    if (password.type === "password") {
        password.type = "text";
        eyeOpen.style.display = "none";
        eyeClose.style.display = "block";
    }
});

eyeClose.onclick = (() => {
    if (password.type === "text") {
        password.type = "password";
        eyeOpen.style.display = "block";
        eyeClose.style.display = "none";
    }
});

let lSemail = localStorage.getItem("Email_Address");
let lSpassword = localStorage.getItem("Password");
cTc.onclick = ((e) => {
    e.preventDefault();
    if (email.value === lSemail && password.value === lSpassword) {
        location = "bokshiverse.html";
    }
    else {
        /*if(email.value === "" || password.value === ""){
            error.style.display = "block";
            error.textContent = "All Credintial Must Be Filled";
            box.style.height = "385px";
            email.value = "";
            password.value = "";
        }*/
        /*else*/error.style.display = "block";
        box.style.height = "385px";
        email.value = "";
        password.value = "";
    }
}
);

email.addEventListener("focus", () => {
    error.style.display = "none";
    box.style.height = "340px";
});

email.addEventListener("focus", () => {
    error.style.display = "none";
    box.style.height = "340px";
});