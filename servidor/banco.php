<?php 

function conectar() {
    $servername = 'localhost';
    $username = 'root';
    $password = 'admin';
    $dbname = 'webti';

    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
//conectar();

function cadastra_usuario($nome, $email, $login, $senha) {
    $con = connecta_bd();
    $stmt - $cont -> prepare("INSERT INTO webti (nome, email, login, senha) VALUES (:nome, :email, :login, :senha)");
    $stmt -> bindParam(':nome', $nome);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':login', $login);
    $stmt -> bindParam(':senha', $senha);
    return $stmt->execute();
}

cadastra_usuario("Borabill","joao@gmail","borabill","abcdefghij");
?>