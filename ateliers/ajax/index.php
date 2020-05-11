<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
  <title>Exemple AJAX</title>
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <!-- Default form register -->
        <form id="formulaire" class="text-center border border-light p-5">

          <p class="h4 mb-4">Sign up</p>

          <div class="form-row mb-4">
            <div class="col">
              <!-- First name -->
              <input type="text" id="first" name="first" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
            </div>
            <div class="col">
              <!-- Last name -->
              <input type="text" id="last" name="last" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
            </div>
          </div>

          <!-- E-mail -->
          <input type="email" id="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

          <!-- Password -->
          <input type="password" id="password" name="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
          <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            At least 8 characters and 1 digit
          </small>

          <!-- Sign up button -->
          <button class="btn btn-info my-4 btn-block" type="submit">Sign up</button>
          <p id="retourUtilisateur"> </p>
          <hr>

          <!-- Terms of service -->
          <p>By clicking
            <em>Sign up</em> you agree to our
            <a href="" target="_blank">terms of service</a>

        </form>
        <!-- Default form register -->
      </div>
    </div>
  </div>




  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
  <script src="script.js"></script>
</body>

</html>