<?php include_once 'header.php'?>
    <div class="container">
    <?php
    include_once "conexao.php";
    $title = "Alteração de Clientes"; 
    echo $title;
    ?>
    <form method="post" action="altera.php">
    <div class="row">
    <div class="col-sm-3">
        <label for="idcliente">Id Cliente:</label>
        <input type="idcliente" id="idcliente" placeholder="Id cliente" name="idcliente">
        </div>
    <div class="col-sm-1">
        <button class="btn btn-warning"> Altera</button>
    </div>   
</div>
</div>
<?php include_once 'footer.php'?>