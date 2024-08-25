<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>confirmar_delete</title>
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

        <h1 align="center">Delete</h1>

        <?php
            $servername = "sql104.epizy.com";
            $username = "epiz_30237621";
            $password = "wMilWaej19";
            $dbname = "epiz_30237621_MeuBanco";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
            }

            $sql = "DELETE FROM usuario WHERE id='".$_POST['id']."'";

            if ($conn->query($sql) === TRUE) {
                header('Location: home.php?msg=Usuario removido com Sucesso!');
                die();
            } else {
                echo "<br>Error: " .$sql."<br>" . $conn->error;
            }

            $conn->close();
        ?>    
 
 
 
 
    <div id="menu-rodape">
        <p>@Desenvoldido por José Felix </p>
    </div>  
</body>

</html>