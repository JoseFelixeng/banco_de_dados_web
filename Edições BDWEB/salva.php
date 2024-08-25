<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Cadastro</title>
</head>

<body id="form-body">
  <div id="area-menu">


        <div id="menu-texto">
            <h1>Lab<span class="branco">CE</span></h1>
        </div>
        <div id="menu-menu">
            <a href="index.php">Home</a>
            <a href="formulario.html">Horarios</a>
            <a href="Sobre.html">SobreNós</a>
        </div>

    </div>      

    <div id="form-tab">
        <h2 id="form-h2">Usuario Cadastrado</h2>
    </div>     
        <h3 id="form-h3">Informações do Usuario</h3>
       <div>
        <?php
            $nome =  $_POST["nome"];
	        $email = $_POST["email"];
	        $senha = sha1($_POST["senha"]);

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

            $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('".$nome."','".$email."', '".$senha."')";

            if ($conn->query($sql) === TRUE) {
                header('Location: index.php?msg=usuario Cadastrado com Sucesso!');
                exit;
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        ?>
        </div>

            <div id="form-ro">
                <a href="index.php" >Go to Home</a>
            </div>
</body>



</html>