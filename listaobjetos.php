<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Cadastro de objetos</h2>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
          ?>
		  
		  <article>
		  
          <div>
              <button>
                  <a href="cadastrarobjetos.php">Cadastrar novo objeto</a>
              </button>
          </div>
		  
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Dono</td>
						<td>Nome</td>
						<td>Localização</td>
                        <td>Categoria</td>
						<td> - </td>
						<td> - </td>
						<td> - </td>
					</tr>
                    <?php

						include "includes/conecta.php";
						$sql = "SELECT * FROM objetos";

						$res = mysqli_query($conn, $sql);

						if($res){
							while($row = mysqli_fetch_assoc($res)){
								if($row['identificador'] == 0){
								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['nome_cadastrador'] ."</td>
										<td>". $row['nome'] ."</td>
										<td>". $row['localiza'] ."</td>
										<td>". $row['categoria'] ."</td>";
										if($_SESSION['id'] == $row['id_cadastrador']){
										echo "<td><a href='cadastrarobjetos.php?id=". $row['id'] ."'>Editar</a></td>
										<td><a href='excluiobjetos.php?id=". $row['id'] ."'>Excluir</a></td>
									</tr>";
								}else{
									echo "<td></td><td></td>";
								}
								if($row['id_cadastrador'] != $_SESSION['id']){
									echo "<td><a href='recebe_emprestimo.php?id=".$row['id']."'>emprestar</a></td>";
								}
							}
						}
					}
                    ?>
				</table>
		  </article>
		</section>
<?php

	include "includes/rodape.php";
	
?>
		