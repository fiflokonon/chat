<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Live</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .chat-container {
            max-width: 400px;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px auto 0;
        }
        .message {
            background-color: blue;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            color: white;
        }
        .user-message {
            background-color: #3498db;
            color: white;
        }
        .message input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
        }
        .message button {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="chat-container">
    <div id="message">
    </div>
    <input id="msg" type="text" placeholder="Tapez votre msg">
    <button id="submitButton">Envoyer</button>
</div>
</body>
</html>
