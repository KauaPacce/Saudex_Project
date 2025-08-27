<?php
include 'clssaudex.php';
$usuarios = new clssaudex();

if (isset($_POST['Email']) && isset($_POST['Senha'])) {
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];

    $resultado = json_decode($usuarios->Login($Email, $Senha), true);

    if ($resultado['status'] === 'sucesso') {
        header("Location:Menu.php");
        exit;
    } else {
        echo $resultado['msg']; // Corrigido para mostrar a mensagem correta
    }
} else {
    echo "Preencha o e-mail e a senha.";
}
