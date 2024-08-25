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
        <h2 id="form-h2">Cadastro de Usuario</h2>
           
        <h3 id="form-h3">Informações Necessarias:</h3>
        <div>
            <form action="salva.php" method="post">
                Nome: 
                <input type="text"  name="nome">
                Email: 
                <input type="text"  name="email">
                Senha:
                <input type="password"  name="senha">
                <input type="submit"  value="Cadastrar">
            </form>
        </div>
    </div>
            <div id="form-ro">
                <a href="index.php" >Go to Home</a>
            </div>
</body>
</html>