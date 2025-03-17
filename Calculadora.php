<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Erro: Divisão por zero!";
                }
                break;
            default:
                $result = "Operação inválida";
        }
    } else {
        $result = "Por favor, insira números válidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora Simples</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Digite o primeiro número" required>
        <input type="text" name="num2" placeholder="Digite o segundo número" required>
        <select name="operation">
            <option value="add">Somar</option>
            <option value="subtract">Subtrair</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
    
    <?php if (isset($result)) { ?>
        <h3>Resultado: <?php echo $result; ?></h3>
    <?php } ?>
</body>
</html>
