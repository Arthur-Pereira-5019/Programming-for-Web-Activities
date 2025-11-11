<?php if(isset($_GET['nome'])) {?>
<p>IMC:<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    echo $peso/($altura*$altura);
    ?><p><?php } ?>