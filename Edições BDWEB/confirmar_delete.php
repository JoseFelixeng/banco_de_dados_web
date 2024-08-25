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
        //iniciar o session
        session_start();
    ?>

 
    <?php
        if($_SESSION["Logado"]==true){
            echo "<h2>Usuario ".$_SESSION["email"]."</h2><br>";

            $servername = "sql104.epizy.com";
            $username = "epiz_30237621";
            $password = "wMilWaej19";
            $dbname = "epiz_30237621_MeuBanco";
            $id = $_GET["id"];

        // Create connection
            $conn = new mysqli($servername, $username, $password,  $dbname);

        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "<br>Você Foi conectado com sucesso! ";
            $sql = "SELECT * FROM usuario  WHERE id='".$id."'";
            $result = $conn->query($sql);

            echo "<h2>Tem certeza que deseja excluir o seguinte usuário ?</h2><br>";    

            if ($result->num_rows > 0){
                // output data of each row
                $row = $result->fetch_assoc();
                echo "<form action='deletar.php' method='post' >";
                echo "<input type='hidden' name='id' value='".$id."'>";
                echo  "id: ". $row["id"]." - Nome: ".$row["nome"]." ". $row["email"]." " .$row["senha"]."";
                echo "<br><input type='submit' value='Excluir'>";
            } else {
                echo "O usuario não está cadastrado";
            }
            $conn->close();
        }else{
            echo "Usuario não logado!!<br>";
        }
         echo "<br><br><br><a href='logout.php'>Logout</a><br>";
    ?>
    
 
 
 
 
 
    <div id="menu-rodape">
        <p>@Desenvoldido por José Felix </p>
    </div>  
</body>

</html>