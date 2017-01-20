<?php include 'header.php'; ?>

<section id="connexion" class="container-fluid">
  <div class="row">
    <div id="formulaire_connexion" class="col-md-8 col-md-offset-2 text-center">
      <div class="row">
        <div class="col-md-6" id="on">
          <button type="button">Connexion</button>
        </div>
        <div class="col-md-6" id="off">
          <button type="button">Inscription</button>
        </div>
      </div>
      <h2 class="text-center">Connecte toi ! <h2>
      <form>
        <input type="text" name="pseudo" id="pseudo" placeholder="Name"/>
        <br>
        <input type="password" name="pass" id="pass" placeholder="Password" />
        <br>
        <input type="submit" value="Valider" />
      </form>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>
