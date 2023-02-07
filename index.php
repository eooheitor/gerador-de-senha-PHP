<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senha</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="body">

    <div class="container">
        <div class="title">
            <img src="img/ativo.png" alt="logo" class="logo">
        </div>
        <div class="inputs">
            <label class="form-label">Quantos caracteres você deseja?</label>
            <input type="number" id="length" min="8" max="20" value="8">
            <br>
            <input class="form-check-input" type="checkbox" id="specialChars">
            <label>Incluir caracteres especiais?</label>
            <br>
            <input class="form-check-input" type="checkbox" id="maiusculas">
            <label for=""> Incluir letras maiúsculas?</label>
            <br>
            <input class="form-check-input" type="checkbox" id="numbers">
            <label for=""> Incluir números?</label>
        </div>

        <div class="btn-copiar">
            <p id="senha-gerada">
                <input type="text" class="place" id="password" placeholder="" disabled>
                <button type="submit" id="btn-copiar" class="btn btn-primary" disabled onclick="copyPassword()">Copiar</button>
            </p>
            <button type="button" class="btn btn-primary btn-lg btn-gerar" onclick="generatePassword()">Gerar Senha</button>
        </div>

        <div id="res">
            <p>

            </p>
        </div>
    </div>

    <script>
        function generatePassword() {
            var length = document.getElementById("length").value;
            var specialChars = document.getElementById("specialChars").checked;
            var maiusculas = document.getElementById("maiusculas").checked;
            var numbers = document.getElementById("numbers").checked
            var chars = "abcdefghijklmnopqrstuvwxyz";
            document.getElementById("password").value = password;
            document.getElementById("btn-copiar").disabled = false;

            if (maiusculas) {
                chars += "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            }

            var password = "";

            if (specialChars) {
                chars += "!@#$%^&*()_-+=?";
            }
            var password = "";

            if (numbers) {
                chars += "1234567890";
            }

            var password = "";

            for (var i = 0; i < length; i++) {
                password += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById("password").value = password;
        }

        function copyPassword() {
            var res = document.getElementById('res')
            var password = document.getElementById("password");
            password.select();
            document.execCommand("copy");
            res.innerHTML = `Senha copiada!`
        }
    </script>
</body>

</html>
