<?php
	session_start();
	 if(!isset($_SESSION['carrinho'])){ 
        $_SESSION['carrinho'] = array(); 
    } 
	if(isset($_GET['acao'])){ 
        //ADICIONAR CARRINHO 
        if($_GET['acao'] == 'add'){ 
            $codproduto = intval($_GET['codproduto']); 
            if(!isset($_SESSION['carrinho'][$codproduto])){ 
                $_SESSION['carrinho'][$codproduto] = 1; 
            } else { 
                $_SESSION['carrinho'][$codproduto] += 1; 
            } 
		}
		//REMOVER
		 if($_GET['acao'] == 'del'){ 
            $codproduto = intval($_GET['codproduto']); 
            if(isset($_SESSION['carrinho'][$codproduto])){ 
                unset($_SESSION['carrinho'][$codproduto]); 
            } 
		 }
		//ALTERAR QUANTIDADE
		if($_GET['acao'] == 'up'){ 
            if(is_array($_POST['prod'])){ 
                foreach($_POST['prod'] as $codproduto => $qtd){
      $codproduto  = intval($codproduto);
       $qtd = intval($qtd);
       if(!empty($qtd) || $qtd <> 0){
        $_SESSION['carrinho'][$codproduto] = $qtd;
         }else{
        unset($_SESSION['carrinho'][$codproduto]);
		}
		}
       }
}   
      if($_GET['acao'] == 'finalizar'){ 
        $codproduto = intval($_GET['codproduto']); 
        if(!isset($_SESSION['carrinho'][$codproduto])){ 
            $_SESSION['carrinho'][$codproduto] = 1; 
        } else { 
            $_SESSION['carrinho'][$codproduto] += 1; 
        } 
    }
    
      if($_GET['acao'] == 'pedidos'){ 
        $codproduto = intval($_GET['codproduto']); 
        if(!isset($_SESSION['carrinho'][$codproduto])){ 
            $_SESSION['carrinho'][$codproduto] = 1; 
        } else { 
            $_SESSION['carrinho'][$codproduto] += 1; 
        } 
    }
    }
?>
 <?php
        include ('header.php');
        ?>
<br>
<div class="container-fluid">   
<div class="container">
<div class="card mt-5">
<div class="card-body">
<h4 class="card-title">Carrinho</h4>
	<a href="comprar.php">Lista de Produtos</a>
</div>
</div>
<table class="table table-strip">
<thead>
	<tr>
    <th width="244">DESCRIÇÃO</th>
	<th width="244">CATEGORIA</th>
	<th width="244">QUANTIDADE</th>
	<th width="244">PREÇO</th>
	<th width="244">TOTAL</th>
	</tr>
</thead>
<form action="?acao=up" method="post">
<tbody>
	<?php
	if(count($_SESSION['carrinho']) == 0){
	echo('<tr><td colspan="5">Nenhum produto no carrinho</td></tr>');
	}else{
	include('conexao.php');
	$total = 0;
	foreach($_SESSION['carrinho'] as $codproduto => $qtd){
	$sql     = "SELECT * FROM produto WHERE codproduto = '$codproduto'";
	$executa = mysqli_query($con, $sql) or die (mysqli_error());
	$in      = mysqli_fetch_assoc($executa);
	$descricao   = $in ['descricao'];
    $categoria   = $in ['categoria'];
	$preco   = number_format ($in ['preco'], 2,',','.');
	$sub     = number_format ($in ['preco'] * $qtd, 2,',','.');    
	$total   += $in['preco'] * $qtd;
	
	echo '<tr>
	<td>'.$descricao.'</td>
    <td>'.$categoria.'</td>                            
	<td><input type="text" size="3" name="prod['.$codproduto.']" value="'.$qtd.'" ></td>
    <td>R$ '.$preco.'</td>
    <td>R$'.$sub.'</td>
    <td><a href="?acao=del&codproduto='.$codproduto.'" class="btn btn-danger">Remover</td>
    </tr>' ;
	}
	$total = number_format($total, 2, ',', '.');
    echo 	'<tr>                         
    <td colspan="4">Total do pedido</td>
    <td>R$ '.$total.'</td>
    </tr>';
	}
	?>
	<td ><input class="btn btn-primary"  type="submit" value="Atualizar Carrinho"/></td>
    <td ><a class="btn btn-warning" href='produto.php'>Continuar comprando</a></td>
	<td>  
	<a href="login.php" class="btn btn-success"  value="finalizar"/>Finalizar Compra</a></td>
	</tbody>
	</form>
	</table>
</div>
</body>
</html>

