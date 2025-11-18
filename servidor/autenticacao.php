<?php session_start();

if(!(isset($_POST['username']) && isset($_POST['password']))) {
    header("Location: login.php?error=faltando_dados");
    exit();
}
$username = $_POST['username'];
$password = $_POST['password'];
if($username === "admin" && $username === "senha123") {
        echo "<h1>Login bem-sucedido!</h1>";
        echo "<h1>Bem-vindo  $username!</h1>";
} else {
    header("Location: login.php?error=credenciais_invalidos")
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form>
        
    
</body>
</html>