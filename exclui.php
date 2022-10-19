<?php
    include_once 'conexao.php';
    $idcliente = $_POST["idcliente"];
    if($idcliente != "") {
        $sql = "SELECT * FROM cliente WHERE idcliente = $idcliente";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
         ?>
         <table class="table">
             <tr>
                 <th>Nome</th>
                 <th>Endereço</th>
                 <th>Número</th>
                 <th>E-mail</th>
                 <th>Senha</th>
             </tr>
         <?php
         while($row = mysqli_fetch_array($result)){
             ?>
             <tr>
                 <td><?php echo $row["nome"];?></td>
                 <td><?php echo $row["endereco"];?></td>
                 <td><?php echo $row["numero"];?></td>
                 <td><?php echo $row["email"];?></td>
                 <td><?php echo $row["senha"];?></td>
             </tr>
             <?php
         } echo "</table>";
    $sql2 = "delete from cliente where idcliente=$idcliente";
    mysqli_query($con, $sql2);
    echo "Cliente Deletado";
     }}else{
         echo "Nenhum Cliente encontrado!";
         mysqli_close($con); 
        header("Location: http://localhost/php/menuexcluir.php");
     }    
     ?>