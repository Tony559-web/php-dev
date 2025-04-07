<?php

    include_once("conexao.php");

    $id =isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
    $nome= $_REQUEST['Nome'];
    $ra = $_REQUEST['ra'];
    $email = $_REQUEST['email'];
    
    if($id) {

    } else {
        //realiza a inserção de um novo registro
        $sql ="INSERT INTO  aluno (nome, ra, email)
            VALUES (:nome, :ra, :email)";
     $stmt = $conexao->prepare($sql);
     $stmt->bindParam(':nome', $nome);
     $stmt->bindParam(':ra',$ra);
     $stmt->bindParam(':email', $email);

    }

    
     $stmt->execute();

     header("Location: index.php");
?>