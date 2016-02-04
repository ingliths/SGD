<?php
$base_dados = 'sgd2';
$usuario_bd = 'root'; 
$senha_bd   = 'root';
$host_db    = 'localhost';
$detalhes_pdo = 'mysql:host=' . $host_db . ';dbname='. $base_dados;
$conexao_pdo = null;
$cpf 	= $_POST["cpf"];
$nome	= $_POST["name"];
$senha	= $_POST["password"];
 
try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
    // A classe PDO prepara o comando a ser executado
    $prepara = $conexao_pdo->prepare(
	"INSERT INTO `usuario` ( `cpf`, `nome`, `senha` ) VALUES ( ?, ?, ? )");
    // Parâmetros do comando SQL
	$parametros = array( $cpf,  $nome, $senha);
	// Executa o comando
	$verifica = $prepara->execute( $parametros );
	// Verifica se o comando foi executado
	if ( $verifica ) {
		echo 'Dados enviados &agrave; base de dados com sucesso';
	} else {
		$erro = $prepara->errorInfo();
		echo 'Ocorreu um erro na sua consulta. <br>';
		echo 'Erro: ' . $erro[2];
	}
} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
    die();
}
?>