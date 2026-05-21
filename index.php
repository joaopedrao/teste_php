<?php
    $nome = "Visitante";
    $data = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site PHP</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            background: white;
            width: 90%;
            max-width: 600px;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0px 10px 30px rgba(0,0,0,0.2);
        }

        h1{
            color: #333;
            margin-bottom: 20px;
            font-size: 35px;
        }

        p{
            font-size: 20px;
            margin-bottom: 15px;
            color: #555;
        }

        .destaque{
            color: #007bff;
            font-weight: bold;
        }

        button{
            background: #007bff;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover{
            background: #0056b3;
            transform: scale(1.05);
        }

        .card{
            margin-top: 30px;
            background: #f4f4f4;
            padding: 20px;
            border-radius: 15px;
        }

    </style>

</head>
<body>

    <div class="container">

        <h1>Meu Primeiro Site em PHP</h1>

        <p>
            Olá,
            <span class="destaque">
                <?php echo $nome; ?>
            </span>
        </p>

        <p>
            Hoje é:
            <span class="destaque">
                <?php echo $data; ?>
            </span>
        </p>

        <button onclick="mostrarMensagem()">
            Clique Aqui
        </button>

        <div class="card">
            <p>Este site foi criado usando:</p>

            <p>✔ PHP</p>
            <p>✔ HTML</p>
            <p>✔ CSS</p>
            <p>✔ JavaScript</p>
        </div>

    </div>

    <script>

        function mostrarMensagem(){
            alert("Bem-vindo ao seu site em PHP!");
        }

    </script>

</body>
</html>