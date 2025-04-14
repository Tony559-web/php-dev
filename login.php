<?php

    include("conexao.php");

    $email =  $_REQUEST['email'];
    $senha =  $_REQUEST['senha'];

    $sql = "select * from aluno where email = :email and senha = :senha";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        header("Location: listar.php");
    } else {
        header("Location: index.php?mensagem=Usuário ou senha inválidos!");
    }

    ?>