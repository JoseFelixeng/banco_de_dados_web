<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Atualizar</title>
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
            $id = $_POST['id'];

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

            //Testar se a um valor dentro do campo senha, caso aja esse valor irá atualizar a senha
            if(strlen($_POST['senha'])>0){
                //$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2"; => Organizar a saida
                $sql = "UPDATE usuario SET nome='".$nome."', email='".$email."', senha='".$email."' WHERE id=".$id;
            }else{
                //atualizando os valores sem a senha 
                $sql = "UPDATE usuario SET nome='".$nome."', email='".$email."' WHERE id=".$id;
            }

            if ($conn->query($sql) === TRUE) {
                header('Location: home.php?msg=Usuario atualizado com sucesso!');
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