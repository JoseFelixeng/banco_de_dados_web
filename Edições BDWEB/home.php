<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css"  href="css/estilo.css">
</head>

<body>
    <div id="menu-title">
        <h1 id="menu-logo">Dev<span class="branco">Felix</span></h1>
    </div>
    <div id="menu-menu">
        <a href="index.php"> Menu </a>
        <a href="cadastro.php">Cadastro</a>
        <a href=" projetos.html ">Projetos</a>
        <a href="linux.html">Sobre Linux</a>
        <a href="sobre.html ">Conheça-me</a>
    </div>

    <h1 align="center">Home</h1>
        <div id="menu-lateral">
        <h2 id="mduvidas">Duvidas Frequentes</h2>
        <ul id="menu-duvida"> 
            <li>Quais Horarios eu posso utilizar?</li> 
                <a class="menu-duvida" href="#mresponsavel">Leia Sobre</a>
            <li>Quem são os responsáveis?</li> 
                <a class="menu-duvida"  href="#majudado">Leia Sobre</a>
            <li>Em que posso ter ajuda?</li> 
                <a class="menu-duvida"  href="#majuda">Leia Sobre</a>
            <li>Quem pode pedir ajuda?</li>
                <a class="menu-duvida"  href="#tabela-time">Leia Sobre</a> 
        </ul>
      
    </div>
    <?php
        //iniciar o session
        session_start();
    ?>
 
     <span>
        <?php
            if($_GET['msg']){
                echo $_GET['msg'].'</br>';
            }
        ?>
    </span>
    <?php
        if($_SESSION["Logado"]==true){
            echo "<h2>Seja Bem vindo ".$_SESSION["email"]."</h2>";

            $servername = "sql104.epizy.com";
            $username = "epiz_30237621";
            $password = "wMilWaej19";
            $dbname = "epiz_30237621_MeuBanco";

            // Create connection
            $conn = new mysqli($servername, $username, $password,  $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM usuario";
            $result = $conn->query($sql);

            echo "<h1>Lista de usuarios para agendamento</h1>";    

            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<br>id: " . $row["id"]. " - Name: " . $row["nome"]. "<br>" ." E-mail: " . $row["email"]. "<br>". "  Senha: " . $row["senha"].  "<br><a href='editar.php?id=".$row["id"]."' ><img src=\"imagens/edit.png\"/style='height:20px;' alt='Editar'></a><br><a href='confirmar_delete.php?id=".$row["id"]."' ><img src=\"imagens/delete.png\"/style='height:20px;' alt='Excluir'></a> <br>";
            }
            } else {
                echo "0 results";
            }
            $conn->close();
        }else{
            echo "Usuario não logado!!";
        }
        echo "<br><br><a href='logout.php'>Logout</a><br>";
    ?>
     
    <div id="menu-rodape">
        <p>@Desenvoldido por José Felix </p>
    </div>  
</body>

</html>