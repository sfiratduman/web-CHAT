<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basit PHP Chat</title>
    <style>
        #chat-box {
            height: 300px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
<div id="chat-box"></div>
<input type="text" id="message" placeholder="Mesajınızı yazın">
<button onclick="sendMessage()">Gönder</button>
<script>
function updateChat() {
    var chatBox = document.getElementById("chat-box");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            chatBox.innerHTML = this.responseText;
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    };
    xhttp.open("GET", "chat.php", true);
    xhttp.send();
}
function sendMessage() {
    var messageInput = document.getElementById("message");
    var message = messageInput.value;

    if (message.trim() !== "") {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                updateChat();
            }
        };
        xhttp.open("GET", "send.php?message=" + encodeURIComponent(message), true);
        xhttp.send();
        messageInput.value = "";
    }
}
setInterval(updateChat, 2000);
window.onload = function() {
    updateChat();
};
</script>

</body>
</html>