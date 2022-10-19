<?php
include ('header.php');
include ('conexao.php');
$codproduto = $_REQUEST['codproduto'];
$sql = "select * from produto where codproduto=$codproduto";
$resultado = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($resultado);
 ?>
<hr>
<section class="container">
  <br> <br> 
   <div class="row">
    <div class="col-sm-8">
    <img src="fotos/<?=$dados['imagem']; ?>" alt="imagem" style ="width:50%;"class="img-responsive">
    </div>
    <div class="col-sm-4">
  
        <h3><?= $dados['descricao']; ?></h3><br><br>
        <b>Categoria:</b> <?=$dados['categoria'];?><br><br>
        <b>Preço: </b> R$  <?=$dados['preco']; ?> <br><br><br>
        <a class="btn btn-primary" href="carrinho.php?acao=add&codproduto=<?php echo $dados['codproduto']?>" >Comprar</a>
  </div>
</div>
</div>
</section>
<hr>
<?php include "footer.php";?>
