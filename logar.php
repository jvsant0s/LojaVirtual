<?php
// usar sessão - protege o usuario//
session_start();
include('conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "select * from cliente where email='$email' 
and senha='$senha'";
$resultado = mysqli_query($con, $sql);
$total     = mysqli_num_rows($resultado);
if ( $total>0 ) {
	$dados = mysqli_fetch_array($resultado);
	$_SESSION['cliente']       = $dados['idcliente'];
	$_SESSION['cliente_nome']  = $dados['nome'];
	$_SESSION['cliente_email'] = $dados['email'];
	echo "logado com sucesso";
} else {
	echo "<script>	alert('Cliente não encontrado');
	        location.href='login.php';	  </script>";
}
mysqli_close($con);
?>
