<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Projeto Coisas Emprestadas</title>
        

</head>
<body>
    <header>
        <h1>Projeto Coisas Emprestadas</h1>
        <?php 
                if (isset($_GET['cadastro'])){echo "<h5 style='color: green'>Cadastro feito com sucesso!</h5>";}
                if(isset($_GET['erro'])){echo "<h5 style='color:red'>Usuário e/ou senha incorreto(s).</h5>";}
                if(isset($_GET['autentica'])){echo "<h5 style='color:red'>Você não tem permissão</h5>";}
        ?>
    </header>
    <ul>
        <li><a class="active" href="index.php">Página Inicial</a></li>
        <li style="float:right"><a href="PaginaCadastro.php">Cadastre-se</a></li>
        <li style="float:right"><a href="PaginaLogin.php">Login</a></li>
    </ul>

    <section>

        <article>
            <h1>
            A inciativa Coisas Emprestadas foi pensada na necessidade do dia-a-dia.
            </h1>
        <br />
            <h1>
            Sabe aqueles dias em que surge uma necessidade fora do comum? Aqueles dias que você se pega pensando: "Ah, como eu precisava de um alicate para cortar arame agora!"? <br />
            Esse site foi pensado especialmente por decorrência dessas ocasiões.
            </h1>
        <br />
            <h1>
            Afinal, porque comprar algo que você pode pegar emprestado? <br />
            </h1>
        </article>
    </section>

</body>
</html>

<?php

include "includes/rodape.php"

?>