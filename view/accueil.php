<?php include 'header_index.php'; ?>

<section id="accueil" class="container-fluid">
  <div class="row">
    <div id="title_accueil" class="text-center col-md-12">
      <h1 class="text-uppercase">sleam</h1>
      <h2 class="text-capitalize">steam like</h2>
    </div>
  </div>
  <div class="row">
    <div id="button_accueil" class="text-center col-md-12">
      <button id="button_accueil_connexion" class="text-uppercase" data-toggle="modal" data-target="#modal_connexion">connexion</button>
      <button id="button_accueil_inscription" class="text-uppercase" data-toggle="modal" data-target="#modal_inscription">inscription</button>
    </div>
  </div>

<!-- Modal connexion -->
<div class="modal fade" id="modal_connexion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="row">
          <div class="text-center col-md-12">
            <h4 class="modal-title text-uppercase" id="myModalLabel">sign in</h4>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
          <div class="row">
            <div class="col-md-2 col-md-offset-1">
              <div class="icon">
                <i class="ion-android-person"></i>
              </div>
            </div>
            <div class="col-md-8">
              <input type="text" name="pseudo" placeholder="Username">
            </div>
          </div>

          <div class="row">
            <div class="col-md-2 col-md-offset-1">
              <div class="icon">
                <i class="ion-locked"></i>
              </div>
            </div>
            <div class="margin col-md-8">
              <input type="password" name="pass" placeholder="Entrer votre password">
            </div>
          </div>

          <div class="row">
            <div class="connexion text-center col-md-10 col-md-offset-1">
              <input type="submit" value="CONNEXION">
            </div>
          </div>

          <div class="row">
            <div class="phrase col-md-10 col-md-offset-1">
              <p class="p1">Mot de passe oublié ?</p>
              <p class="p2">Inscrivez-vous !</p>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Modal inscription -->
<div class="modal fade" id="modal_inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="row">
          <div class="text-center col-md-12">
            <h4 class="modal-title text-uppercase" id="myModalLabel">inscrivez - vous !</h4>
          </div>
        </div>
      </div>
      <div class="modal-body">

        <form action="view/add.php" method="post">
          <div id="input_top" class="row">
            <div class="col-md-1 col-md-offset-1">
              <div class="icon">
                <i class="ion-person"></i>
              </div>
            </div>
            <div class="padding col-md-4">
              <input type="text" name="pseudo" placeholder="Votre username *">
            </div>
            <div class="col-md-1">
              <div class="icon">
                <i class="ion-person"></i>
              </div>
            </div>
            <div class="col-md-4">
              <input type="text" name="nom" placeholder="Votre Nom Prénom *">
            </div>
          </div>

          <div id="input_mid" class="row">
            <div class="col-md-1 col-md-offset-1">
              <div class="icon">
                <i class="ion-android-mail"></i>
              </div>
            </div>
            <div class="col-md-9">
              <input type="email" name="email" placeholder="Votre @ *">
            </div>
          </div>

          <div id="input_bot" class="row">
            <div class="col-md-1 col-md-offset-1">
              <div class="icon">
                <i class="ion-locked"></i>
              </div>
            </div>
            <div class="padding col-md-4">
              <input type="password" name="pass" value="" placeholder="Votre password *">
            </div>
            <div class="col-md-1">
              <div class="icon">
                <i class="ion-lock-combination"></i>
              </div>
            </div>
            <div class="col-md-4">
              <input type="password" name="pass2" value="" placeholder="Valdez votre password *">
            </div>
          </div>

          <div id="inscrire" class="row">
            <div class="col-md-10 col-md-offset-1">
              <input type="submit" value="S'INSCRIRE">
            </div>
          </div>
        </form>

        <div  class="row">
          <div class="phrase col-md-10 col-md-offset-1">
            <p class="p1">Je ne souhaite pas m'inscrire.</p>
            <p class="p2">J'ai déjà un compte !</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

</section>

<?php include 'footer_index.php'; ?>
