<?php

	include "includes/topo.php";

?>
	<head>
		<header>
		  <h2>Painel inicial</h2>
		</header>
	</head>
	<body>
		<section>
		  	<?php 
		  		include "includes/menu.php";
			?>
		  	<article>
			Bem-vindo usuário <?php echo $_SESSION['nome']; ?>
			<a href="logout.php" class="saida">Sair</a>
		  </article>
		</section>
		<?php
			include "includes/rodape.php";
		?>
	</body>
</html>