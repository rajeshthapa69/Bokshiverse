const form = document.getElementById("form");
const input = document.getElementById("input")
const send = document.getElementById("send");
const chatarea = document.getElementById("chatarea");

form.onsubmit = (e)=>{
  e.preventDefault();
}

send.onclick = ()=>{
    let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/insert_chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        input.value = "";
      }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/get_chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatarea.innerHTML = data;
      }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}, 500);