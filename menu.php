
<?php include_once 'header.php'?>
    <div class="container">
    <?php
    include_once "conexao.php";
    $title = "Listagem de Clientes"; 
    echo $title;
    ?>
   
    <form method="post" action="consulta.php">
    <div class="row">
    <div class="col-sm-3">
    
            <label for="idcliente">Id Cliente:</label>
            <input type="idcliente" id="idcliente" placeholder="Id cliente" name="idcliente">
        </div>
    <div class="col-sm-1">
    
   <button class="btn btn-warning"> Altera</button>
    </div>   
     <div class="col-sm-1">  
 
       <button class="btn btn-success"> Consulta</button>
</div>
<div class="col-sm-1">

<button type="button"  class="btn btn-danger">   Exclui</button>
</div>
</div>
</div>

<?php include_once 'footer.php'?>