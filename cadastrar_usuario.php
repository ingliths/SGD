<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro de Usu&aacute;rio</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
  <h2 class="form-signin-heading">Cadastro do Usu&aacute;rio</h2>
	<form class="form-signin" action="xt_cadastrar_usuario.php" method="POST">
	    <input type="text" name="cpf" class="form-control" placeholder="CPF">
	    <input type="text" name="name" class="form-control" placeholder="Nome">
	    <input type="password" name="password" class="form-control" placeholder="Password" required="">
	  <br>
	  <br>
	  <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
	</form>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>