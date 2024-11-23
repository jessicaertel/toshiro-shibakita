<html>
<head>
    <title>Questões de Concursos</title>
</head>
<body>
    <?php
    ini_set("display_errors", 1);
    header('Content-Type: text/html; charset=iso-8859-1');
    echo 'Versão Atual do PHP: ' . phpversion() . '<br>';

    $servername = "54.234.153.24";
    $username = "root";
    $password = "Senha123";
    $database = "meubanco";

    // Criar conexão
    $link = new mysqli($servername, $username, $password, $database);

    // Verificar conexão
    if (mysqli_connect_errno()) {
        printf("Conexão falhou: %s\n", mysqli_connect_error());
        exit();
    }

    // Exemplo de questões
    $questoes = [
        ["id" => 1, "pergunta" => "Qual é a capital do Brasil?", "resposta" => "Brasília"],
        ["id" => 2, "pergunta" => "Quem descobriu o Brasil?", "resposta" => "Pedro Álvares Cabral"],
        ["id" => 3, "pergunta" => "Qual é a fórmula da água?", "resposta" => "H2O"]
    ];

    foreach ($questoes as $questao) {
        echo "<p><strong>Questão {$questao['id']}:</strong> {$questao['pergunta']}<br>";
        echo "<em>Resposta:</em> {$questao['resposta']}</p>";
    }
    ?>
</body>
</html>
