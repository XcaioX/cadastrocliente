<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];
    $termos = ($_POST['termos']) ? "Aceito" : "Não aceito";

    if ($senha !== $confirma_senha) {
        echo "<h1>Erro: As senhas não coincidem.</h1>";
    } else {
        echo "<h1>Cadastro Recebido!</h1>";
        echo "<p>Nome: " ($nome) . "</p>";
        echo "<p>E-mail: " ($email) . "</p>";
        echo "<p>Data de Nascimento: " ($data_nascimento) . "</p>";
        echo "<p>CPF: " ($cpf) . "</p>";
        echo "<p>Endereço: " ($endereco) . "</p>";
        echo "<p>Estado: " ($estado) . "</p>";
        echo "<p>Termos e Condições: "  ($termos) . "</p>";
    }
} else {
    echo "<h1>Erro: Dados não enviados.</h1>";
}
?>
