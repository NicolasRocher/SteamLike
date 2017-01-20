<?php include 'header.php'; ?>

<section id="inscription" class="container-fluid">
  <div id="formulaire_inscription" class="col-md-8 col-md-offset-2 text-center">
    <div class="row">
      <div class="col-md-6" id="off">
        <button type="button">Connexion</button>
      </div>
      <div class="col-md-6" id="on">
        <button type="button">Inscription</button>
      </div>
    </div>
    <h2 class="text-center">Inscris toi gratuitement ! <h2>
    <form action="add.php" method="post">
      <input type="text" name="pseudo" id="pseudo" placeholder="Name"/>
      <input type="email" name="email" id="email" placeholder="Mail" />
      <br>
      <input type="password" name="pass" id="pass" placeholder="Password" />
      <input type="password" name="pass2" id="pass" placeholder="Confirm password" />
      <br>
      <input type="submit" value="Valider" />
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>
