<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Styleguide</title>
  <meta name="author" content="Pingendo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="neon.css" type="text/css"> </head>

<body>
  <script type="text/javascript">
    function valida_campos()
      {
        if(document.getElementById('nome_usu').value == '')
          {
            alert('Por favor, preencha os campos obrigatórios.');
            document.getElementById('nome_usu').focus();
            return false;
          }
        if(document.getElementById('email_usu').value == '')
          {
            alert('Por favor, preencha os campos obrigatórios.');
            document.getElementById('email_usu').focus();
            return false;
          }
        if(document.getElementById('senha_usu').value == '' || document.getElementById('senha_usu').value != document.getElementById('senha2_usu').value)
          {
            alert('Por favor, as senhas não conferem, por favor, redigite.');
            document.getElementById('senha_usu').focus();
            return false;
          }
      }
    </script>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="display-3 text-capitalize">Bem vindo ao cadastro!</h1>
          <p class="lead text-muted"></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <h4 class="alert-heading">Quase Lá</h4>
            <p class="mb-0">Preencha os campos a seguir por favor</p>
          </div>
        </div>
        <div class="col-md-6">
          <form action="cadastrar.php" method="post" onSubmit="return valida_campos();">
            <div class="form-group">
              <label>Nome usuário</label>
              <input type="text"  name="nome_usu" id="nome_usu" class="form-control" placeholder="nome usuário">
              <small class="form-text text-muted">Seu nome de usuário ficará visível a outros usuários escolha bem!</small>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text"  name="email_usu" id="email_usu"  class="form-control" placeholder="Digite seu email"> </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Senha</label>
              <input type="text"  name="senha_usu" id="senha_usu" class="form-control" placeholder="Digite a senha de sua escolha">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Confirma senha</label>
              <input type="text"  name="senha2_usu" id="senha2_usu" class="form-control"  placeholder="Confirme sua senha">
            </div>
            <button type="submit" class="btn btn-primary">Cadastro</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center section-fade-out" style="background-image: url('Progamação/logoJKL.png');">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4 mb-0"></h1>
        </div>
      </div>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
</body>

</html>