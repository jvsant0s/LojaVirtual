<?php session_start(); ?>
<?php
   if(!isset($_SESSION['clienteidcliente']));  
   if(!isset($_SESSION['clientenome'])); 
   
   if(!isset($_SESSION['clienteendereco']));
   if(!isset($_SESSION['clientenumero']));
  
   if(!isset($_SESSION['clienteemail']));
   if(!isset($_SESSION['clientesenha']));
 
   
?>
<?php require "admin.php"; 
include('conexao.php');?>
<div class="col-md-10">
	<div class="row">
	<div class="col-md-12">
	<div class="content-box-large">
	<div class="panel-heading">
	<div class="panel-title">
	<h1>Dados do Cliente</h1>
		Seu código de Cliente é  <?php echo $_SESSION['clienteidcliente']; ?>
	
	</div>

	<div class="panel-options">
		<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
	</div>
	</div>
	<div class="panel-body">
<div class="table-responsive">
	<table class="table-strip">
		<thead>
			<tr>
			<th width="50">ID CLIENTE</th>
				<th width="50">NOME</th>
			
				<th width="40">ENDEREÇO</th>
				<th width="13">NÚMERO</th>
				
				<th width="80">E-MAIL</th>
				<th width="12">SENHA</th>
			
				
			</tr>
		</thead>
		<tbody>
		<?php echo '<td>';?>  <?php echo $_SESSION['clienteidcliente']; ?>
		<?php echo '</td>';?>
		<?php echo '<td>';?>  <?php echo $_SESSION['clientenome']; ?>
		<?php echo '</td>';?>
	
		<?php echo '</td>';?>

		<?php echo '</td>';?>
	
		<?php echo '</td>';?>
	<?php echo '<td>';?>  <?php echo $_SESSION['clienteendereco']; ?>
		<?php echo '</td>';?>
	<?php echo '<td>';?>  <?php echo $_SESSION['clientenumero']; ?>
		<?php echo '</td>';?>
	
<?php echo '</td>';?>
<?php echo '<td>';?> <?php echo $_SESSION['clienteemail']; ?>
<?php echo '</td>';?>
<?php echo '<td>';?> <?php echo $_SESSION['clientesenha']; ?>
<?php echo '</td>';?>




	</tbody>
<tr>	
		
</tr>
 </table></div> 
 </div>
	</div>
	</div>
  	</div>
  	</div> 
    </div>
	</div>		  		
	</div> 	
	</div>
	</div>
    </div>
	</section>			
 </section>
  <?php require "footer.php" ?> 