<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Login</title>
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
    
    <span>
        <?php
            if($_GET['msg']){
                echo $_GET['msg'].'</br>';
            }
        ?>
    </span>

    <div id="form-tab">
        <h2 id="form-h2">Login</h2>
           
        <h3 id="form-h3">Informações Necessarias:</h3>
        <form action="validar.php" method="post">
                Email: 
                <input type="text"  name="email">
                Senha:
                <input type="password"  name="senha">
                <input type="submit"  value="Logar">
         </form>
    </div>
    <div id="form-ro">
        <a href="index.php">Go to Home</a>
    </div>
</body>



</html>