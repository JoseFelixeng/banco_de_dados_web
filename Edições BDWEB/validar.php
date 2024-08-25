<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>validar</title>
    <link rel="stylesheet" type="text/css"  href="css/estilo.css">
</head>

<body>
        <div id="menu-title">
            <h1 id="menu-logo">LAB<span class="branco">CE</span></h1>
        </div>
        <div id="menu-menu">
            <a href="index.php"> Menu </a>
            <a href="cadastro.php">Cadastro</a>
            <a href=" projetos.html ">Projetos</a>
            <a href="linux.html">Sobre Linux</a>
            <a href="sobre.html ">Conheça-me</a>
        </div>

        <h1 align="center">Validar Usuario</h1>
    <?php
        //iniciar o session
        session_start();
        echo "Start!!";
    ?>
            
    <?php
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $_SESSION["Logado"] = false;
        $_SESSION["email"] = $email;
    

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
        
        $sql = "SELECT id, nome,email,senha FROM usuario";
        $result = $conn->query($sql);
            
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {    
            if ($row["email"] == $email && sha1($senha) == $row["senha"])
            {
                $_SESSION["Logado"] = true;
            }
            //echo "<br>id: " . $row["id"]. " - Name: " . $row["nome"]. "<br>" ." E-mail: " . $row["email"]. "<br>". "  Senha: " . $row["senha"];
        }
        } else {
            echo "0 results";
        }
        if($_SESSION["Logado"]){
            header("Location: home.php");
            echo "Usuario Logado";
        }else{
            header("Location: login.php?msg=Dados invalidos");
        }

        $conn->close();

    ?>
 
    <div id="menu-rodape">
        <p>@Desenvoldido por José Felix </p>
    </div>  
</body>

</html>