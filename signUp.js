const eyeOpen = document.getElementById("eyeOpen");
const eyeClose = document.getElementById("eyeClose");
const password = document.getElementById("password");
const file = document.getElementById("file");
const cTc = document.getElementById("cTc");

//ppImgLocalStorage
file.addEventListener("change", ()=>{
    const fr = new FileReader();
    fr.readAsDataURL(file.files[0]);

    fr.addEventListener("load",()=>{
        const url = fr.result;
        localStorage.setItem("Profile_Picture", url);
    });
});

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

let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let email = document.getElementById("email");

cTc.onclick = ((e)=>{
    e.preventDefault();
    let a = fname.value;
    let b = lname.value;
    let c = email.value;
    let d = password.value;
    localStorage.setItem("First_Name",a);
    localStorage.setItem("Last_Name",b);
    localStorage.setItem("Email_Address",c);
    localStorage.setItem("Password",d);
        location = "bokshiverse.html";
});