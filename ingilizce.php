<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basit PHP Chat</title>
    <link rel="stylesheet" href="chat.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./index.js"></script>
</head>

<body>
    <div id="chat-box">
        <div id="messages"></div>
    </div>
    <textarea id="mesaj" cols="30" rows="10" placeholder="Send Message"></textarea>
    <button onclick="postMesaj()">Send</button>
</body>

</html>