<?php
// ... código de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Receber os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Inserir os dados no banco de dados
  $sql = "INSERT INTO tabela_usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

  if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
  } else {
    echo "Erro ao cadastrar: " . $conn->error;
  }

  // Fechar a conexão com o banco de dados
  $conn->close();
}
?>

<!-- Seu formulário HTML -->
<form method="post" action="">
  <input type="text" name="nome" placeholder="Nome">
  <input type="email" name="email" placeholder="Email">
  <input type="password" name="senha" placeholder="Senha">
  <button type="submit">Cadastrar</button>
</form>
