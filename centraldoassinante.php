<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Projeto Login</title>
	<link rel="stylesheet" type="text/css" href="estilologin.css">
</head>
<body>
<h1 class="logo">
      		<a href="index.php">Conecta</a>
      	</h1>
<div id="corpo-form">

	<h1>Faça seu login</h1>
   <form method="POST" >
   	<input type="email" name="usuario" placeholder="Usuário">
   	<input type="password" name="senha" placeholder="Senha">
   	<input type="submit" value="ACESSAR">
   	<a href="Cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se!</a>
   </form>
   <?php
    if(isset($_POST['usuario'])) 
  {
     $email = addslashes($_POST['usuario']);
     $senha = addslashes($_POST['senha']);
     if(!empty($email) && !empty($senha))
     {
      $u->conectar("projeto_login","localhost","root","");
      if($u->msgerro=="")
      {
        if($u->logar($email,$senha))
         {
          header("location: privado.php");
         }
         else
         {
          echo"email e/ou senha estão incorretos";
         }
      }
      else
      {
        echo "erro".$u->msgerro;
      }
    }else
    {
     ?>
        <div style="padding-left: 70PX; width: 370PX;background-color: #FF4500;">"preencha todos os campos!"</div>
       <?php
     }
   }
      ?>

  </div>
 
</body>
</html>