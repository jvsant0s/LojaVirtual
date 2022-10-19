<?php
	$idcliente = $_POST["idcliente"];
	$nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
	$email = $_POST["email"];
    $senha = $_POST["senha"];
?>
	<h1>O seguinte cadastro foi alterado com sucesso:</h1>
	Idcliente: <?php echo $idcliente; ?><br />
	Nome: <?php echo $nome; ?><br/>
    Endereço: <?php echo $endereco; ?><br/>
    Número: <?php echo $numero; ?><br/>
	Email: <?php echo $email; ?><br/>
	Senha: <?php echo $senha; ?><br/>
	<?php
	include_once 'conexao.php';
    
	$sql = "UPDATE cliente set nome = '$nome', endereco = '$endereco',
    numero = '$numero', email = '$email', senha = '$senha'
    WHERE idcliente = '$idcliente'";
	   
       $consulta = mysqli_query($con, $sql);
	?>
	<hr size="1" color="#CCCCCC" />
	<a href="menualtera.php">Voltar e alterar outro cadastro</a>
	
