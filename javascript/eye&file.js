var eye = document.getElementById("eye");
var password = document.getElementById("password");
var file = document.getElementById("file");

function fileOpen(){
    file.click();
}

eye.addEventListener("click",()=>{
    if(password.type === "password"){
        password.setAttribute("type","text");
        eye.classList.remove("fa-eye");
        eye.classList.add("fa-eye-slash");
    }
    else{
        password.setAttribute("type","password");
        eye.classList.remove("fa-eye-slash");
        eye.classList.add("fa-eye");
    }
});

