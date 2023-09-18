<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .terminal {
            font-family: monospace;
            font-size: 24px;
            background-color: black;
            color: lime;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .command {
            position: relative;
            overflow: hidden;
            margin-bottom: 20px; /* Espace entre le texte et le lien */
        }

        .command::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: lime;
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .command:hover::after {
            transform: scaleX(1);
        }

        /* Style du lien-bouton */
        .button-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .button-link:hover {
            background-color: #1e87d7;
        }
    </style>
    <title>Chat</title>
</head>
<body>
<div class="terminal">
    <div class="command">C-H-A-T-L-I-V-E</div>
    <a href="{{ route('chat.index') }}" class="button-link">Testez le chat</a>
</div>
</body>
</html>

