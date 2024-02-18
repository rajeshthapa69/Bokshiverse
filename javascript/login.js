const form = document.querySelector(".wrapper form");
const request = document.getElementById("request");
const error = document.getElementById("error");

request.onclick = (e)=>{
    e.preventDefault();

    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/login.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "Success"){
                    location.href = "users.php"
                }
                else{
                    error.textContent = data;
                    error.style.display = "block";
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}