<?php
    include"includes/topo.php";
?>
<body>
<header>
	<h2>Gerenciar objetos cadastrados</h2>
</header>	
<?php 
    include "includes/menu.php"; 
?>
<table border=1 style="float: left; margin:40px 20%;">
    <tr >
        <td colspan="5" style="text-align:center;">Listagem</td>
    </tr>
    <tr>
        <td>nome</td>
        <td>quem emprestou</td>
        <td>localização</td>
        <td>categoria</td>
        <td>excluir</td>
    </tr>
    <?php

        $id = $_SESSION['id'];
        include"includes/conecta.php";
        $sql = "SELECT * FROM objetos WHERE id_cadastrador=$id";
        $row = mysqli_query($conn, $sql);
        while($i = mysqli_fetch_assoc($row)){
            echo"
            <tr>
                <td>".$i['nome']."</td>
                <td>".$i['emprestador']."</td>
                <td>".$i['localiza']."</td>
                <td>".$i['categoria']."</td>

            ";
            if(empty($i['emprestador'])){
                echo"
                    <td><a href='excluiobjetos.php'>excluir</a></td>
                ";
            }else{echo"<td>está sendo emprestado</td>";}
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>