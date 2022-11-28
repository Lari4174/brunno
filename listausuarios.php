<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Informações</h2>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
          ?>
		  
		  <article>	  
		  <table border="1" style = "float:left; margin: 20px 5%; text-align: center;">
				<thead>
						<tr>
							<td colspan="5">foram emprestadas</td>
						</tr>
					</thead>
					<tr>
						<td>Dono</td>
						<td>Nome item</td>
						<td>Localizado</td>
						<td>Categoria</td>
						<td>Devolver</td>
					</tr>
                    <?php
						include "includes/conecta.php";
						$id = $_SESSION['id'];
						$sql = "SELECT * FROM objetos WHERE id_emprestador = $id";
						$query = mysqli_query($conn, $sql);
						while($i = mysqli_fetch_assoc($query))
						{echo"
						<tr>
							<td>".$i['nome_cadastrador']."</td>
							<td>".$i['nome']."</td>
							<td>".$i['localiza']."</td>
							<td>".$i['categoria']."</td>
							<td><a href='devolver.php?id=1'>Clique para devolver</a></td>
						</tr>";
						}
                    ?>
				</table>
		  </article>
		  <article>	  
				<table border="1" style="text-align: center;">
				<thead>
						<tr>
							<td colspan="4">foram emprestadas</td>
						</tr>
					</thead>
					<tr>
						<td>Dono</td>
						<td>Nome item</td>
						<td>Localizado</td>
						<td>Categoria</td>
					</tr>
                    <?php
						include "includes/conecta.php";
						$id = $_SESSION['id'];
						$sql = "SELECT * FROM objetos WHERE id_cadastrador = $id";
						$query = mysqli_query($conn, $sql);
						while($i = mysqli_fetch_assoc($query))
						{echo"
						<tr>
							<td>".$i['emprestador']."</td>
							<td>".$i['nome']."</td>
							<td>".$i['localiza']."</td>
							<td>".$i['categoria']."</td>
						</tr>";
						}
                    ?>
				</table>
		  </article>
		</section>
<?php

	include "includes/rodape.php";
	
?>
		