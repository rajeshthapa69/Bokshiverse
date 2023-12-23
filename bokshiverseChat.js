//videoCall
function videoCall(){
    navigator.vibrate(500000);
    setTimeout(function(){
        location.href = "videoCall.html";
    },2000);
};

//Message
let outGoingMessage = document.getElementById("outGoingMessage");
let message = document.getElementById("message");
let send = document.getElementById("send");

//fromButton
send.onclick = ((e) => {
    e.preventDefault();

    if (message.value !== ""){
        let newLi = document.createElement("li");
        let text = document.createTextNode(`${message.value}`);

        newLi.appendChild(text);
        outGoingMessage.appendChild(newLi);

        message.value = "";
    }
});

//fromEnterKey
message.addEventListener("keypress", function (event) {
    if(message.value !== ""){
        // If the user presses the "Enter" key on the keyboard
    if (event.key === "Enter") {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        send.click();
        message.value = "";
    }
    }
});



