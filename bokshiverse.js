let ppname = document.getElementById("ppname");
let img = document.getElementById("img");
function redirect(){
    location.href = "bokshiverseChat.html";
}

//LocalStorageGetData
let fname = localStorage.getItem("First_Name");
let lname = localStorage.getItem("Last_Name");
let Full_Name = `${fname} ${lname}`;
ppname.textContent= Full_Name;

//localStoragePPFeatch
const url = localStorage.getItem("Profile_Picture");
img.src = url;