<?php

    include("conexao.php");

    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if($id) {
        $sql = "select * from aluno where id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $resultItem = $stmt->fetch(PDO::FETCH_OBJ);
    }

    $sql = "select * from aluno";
    $result = $conexao->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="inserir.php" method="POST">
         Nome: <input type="text" name="Nome">
         RA: <input type="number" name="ra">
         <br><br>
         Email: <input type="text" name="email">
         <br><br>
         <input type="submit" value="Salvar">
         <input type="reset" value="Limpar">
         <br><br>
    </form>

        <table border="1" width="100%">
        <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>RA</th>
                <th>EMAIL</th>
                <th>AÇÕES</th>
        </tr>
        <?php while ($row = $result->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->NOME ?></td>
                <td><?php echo $row->ra ?></td>
                <td><?php echo $row->email?></td>
                <td>
                    <a href="index.php?id=<?php echo $row->id ?>">Editar</a>
                    <a href="excluir.php?id=<?php echo $row->id ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
        </table>
</body>
</html>