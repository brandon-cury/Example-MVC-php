<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Validation de formulaire</title>
  </head>
  <body>
    <h1>Création de compte</h1>
    <form action="App/Controller/signup.php" method="post">
      <label for="nom"> Nom </label>
      <input type="text" id="nom" name="nom" /><br />

      <label for="prenom"> Prenom </label>
      <input type="text" id="prenom" name="prenom" /><br />

      <label for="`matricule"> Matricule </label>
      <input type="text" id="matricule" name="matricule" /><br />

      <label for="date_de_naissance"> Date de naissance </label>
      <input type="date" id="date_de_naissance" name="date_de_naissance" /><br />

      <input type="submit" value="Ajouter">

      <?php
    if(!empty($_SESSION['alert'])){
?>
      <div class="alert alert-success" role="alert">
        <?php
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
    
  ?>
      </div>

      <?php } ?>
    </form>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
