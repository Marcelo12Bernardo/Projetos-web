<!--Marcelo Bernardo Prudencio-->
<!--Apagar-->
<html>
<header>
        <meta charset="UTF-8">
        <title>Cadastro de Cursos</title> 
        <h1>Cadastro de Cursos</h1>
    </header>
    <body >
    <form action="aula5_apaga.php" method="POST">
    <label for="">Código:</label><br>
    <input type=text name=codigo placeholder="Digite o código do curso"><br>
    <br><button  name=enviar value=1 type=submit>Apagar</button>
    
    </form>
    </body>
</html>

<?php

    if(isset($_POST["codigo"]))
    {
        
        $codigo=$_POST['codigo'];
      
        $conexao=mysqli_connect("200.143.198.37", "aluno35", "y8bivqewv6p");
        mysqli_select_db($conexao,"banco35");
        mysqli_query($conexao,"delete from cursos where cursos.idcursos = '$codigo'");
        $teste = mysqli_query($conexao,"select * from cursos");
        
        while($exibir = mysqli_fetch_array($teste))
        {
            echo "<br>Código:".$exibir['idcursos'];
            echo "<br>Nome:".$exibir['nome'];
            echo "<br>Turno:".$exibir['turno'];
            echo "<br>Preço:".$exibir['preco'];
            if($preco >= 1000){echo "<br>Curso pode ser parcelado";} 
            echo "<hr>";
        }
        
    mysqli_close($conexao);
    }
?>
