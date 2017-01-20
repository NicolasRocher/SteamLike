<?php include 'header.php'; ?>

<section id="dashboard" class="container-fluid">
  <div class="row">

    <div id="profil" class="col-md-4">

      <div id="profil_title" class="row">
        <div class="col-md-12">
          <h2 class="text-uppercase">welcome on <span>sleam<span></h2>
        </div>
      </div>
      <div id="profil_avatar" class="row">
        <div class="col-md-4">
          <img class="img-rounded" src="../img/avatar.png" alt="">
        </div>
        <div class="col-md-8">
          <p><strong>Welcome back :</strong> Name, last name / user  </p><br>
          <p><strong>You'r username :</strong> Username / jeux </p><br>
          <p><strong>You'r email :</strong> Email / user </p><br>
          <p><strong>Vos jeux :</strong> Name / jeux </p>
        </div>
      </div>
      <div id="profil_icon" class="row">
        <div class="profil_icon col-md-3">
          <i class="ion-person"></i>
        </div>
        <div class="profil_icon col-md-3">
          <i class="ion-android-person"></i>
        </div>
        <div class="profil_icon col-md-3">
          <i class="ion-settings"></i>
        </div>
        <div class="profil_icon col-md-3">
          <i class="ion-android-lock"></i>
        </div>
      </div>

      <div id="profil_jeux_title" class="row">
        <div class="col-md-12">
          <h3>Vos <span>jeux</span> :</h3>
        </div>
      </div>
      <div id="profil_jeux" class="row">

        <div class="profil_jeux_description text-right col-md-3">
          <p><strong>Nom du jeu*</strong></p><br>
          <p> <strong>Description du jeu</strong> :<br><br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="profil_jeux_img col-md-3">
          <img class="img-rounded" src="../img/jeu2.png" alt="">
        </div>

        <div class="profil_jeux_img col-md-3">
          <img class="img-rounded" src="../img/jeu3.png" alt="">
        </div>
        <div class="profil_jeux_description col-md-3">
          <p><strong>Nom du jeu*</strong></p><br>
          <p> <strong>Description du jeu</strong> :<br><br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>

      </div>
      <div id="profil_jeux" class="row">

        <div class="profil_jeux_description text-right col-md-3">
          <p><strong>Nom du jeu*</strong></p><br>
          <p> <strong>Description du jeu</strong> :<br><br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="profil_jeux_img col-md-3">
          <img class="img-rounded" src="../img/jeu6.png" alt="">
        </div>

        <div class="profil_jeux_img col-md-3">
          <img class="img-rounded" src="../img/jeu7.png" alt="">
        </div>
        <div class="profil_jeux_description col-md-3">
          <p><strong>Nom du jeu*</strong></p><br>
          <p> <strong>Description du jeu</strong> :<br><br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>


      </div>

      <div id="profil_jeux_amis_title" class="row">

          <div class="col-md-12">
            <hr>
            <h3>Vos <span>amis</span> y ont joués !</h3>
          </div>
      </div>
      <div id="profil_jeux_amis" class="row">
        <div class="profil_jeux_amis_img text-center col-md-3">
          <img class="img-rounded" src="../img/jeu5.jpg" alt="">
          <p><strong>Nom de l'ami *</strong></p>
        </div>
        <div class="profil_jeux_amis_img text-center col-md-3">
          <img class="img-rounded" src="../img/jeu1.jpg" alt="">
          <p><strong>Nom de l'ami *</strong></p>
        </div>
        <div class="profil_jeux_amis_img text-center col-md-3">
          <img class="img-rounded" src="../img/jeu3.jpg" alt="">
          <p><strong>Nom de l'ami *</strong></p>
        </div>
        <div class="profil_jeux_amis_img text-center col-md-3">
          <img class="img-rounded" src="../img/jeu4.jpg" alt="">
          <p><strong>Nom de l'ami *</strong></p>
        </div>
      </div>

    </div>

    <div id="shop" class="col-md-8">
      <div id="shop_menu" class="row">
        <div class="col-md-5 col-md-offset-1">
          <h2 class="text-uppercase">the <span>shop</span></h2>
        </div>
        <div class="text-right col-md-5">
          <div class="btn-group btn-group-lg" role="group">
            <button type="button" class="btn btn-default"><i class="ion-android-cart"></i></button>
            <button type="button" class="btn btn-default"><i class="ion-card"></i></button>
            <button type="button" class="btn btn-default"><i class="ion-gear-b"></i></button>
          </div>
        </div>
      </div>
      <div id="shop_search" class="row">

        <div id="shop_categorie" class="col-md-5 col-md-offset-1">
          <div class="btn-group btn-group-lg" role="group" aria-label="...">
            <button type="button" class="btn btn-default">Action</button>
            <button type="button" class="btn btn-default">Aventure</button>
            <button type="button" class="btn btn-default">Reflexion</button>
            <button type="button" class="btn btn-default">Gratuit</button>
            <button type="button" class="btn btn-default">Payant</button>
          </div>
        </div>

        <div id="shop_search_nav" class="col-md-5">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div><!-- /input-group -->
        </div>

      </div>
      <div id="shop_store" class="row">

        <div class="shop_store_position col-md-10 col-md-offset-1">

          <div class="img_options">
            <img class="img-rounded" src="../img/jeu1.jpg" alt="">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-danger">Acheter</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Description</a></li>
                <li><a href="#">Ajouter au panier</a></li>
                <li><a href="#">Recommander à un ami</a></li>
                <li role="separator" class="divider"></li>
                <li data-dismiss="close"><a href="#">Fermer</a></li>
              </ul>
            </div>
          </div>

          <div class="img_options">
            <img class="img-rounded" src="../img/jeu2.png" alt="">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-danger">Acheter</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Description</a></li>
                <li><a href="#">Ajouter au panier</a></li>
                <li><a href="#">Recommander à un ami</a></li>
                <li role="separator" class="divider"></li>
                <li data-dismiss="close"><a href="#">Fermer</a></li>
              </ul>
            </div>
          </div>

          <div class="img_options">
            <img class="img-rounded" src="../img/jeu3.jpg" alt="">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-danger">Acheter</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Description</a></li>
                <li><a href="#">Ajouter au panier</a></li>
                <li><a href="#">Recommander à un ami</a></li>
                <li role="separator" class="divider"></li>
                <li data-dismiss="close"><a href="#">Fermer</a></li>
              </ul>
            </div>
          </div>

          <div class="img_options">
            <img class="img-rounded" src="../img/jeu3.png" alt="">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-danger">Acheter</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Description</a></li>
                <li><a href="#">Ajouter au panier</a></li>
                <li><a href="#">Recommander à un ami</a></li>
                <li role="separator" class="divider"></li>
                <li data-dismiss="close"><a href="#">Fermer</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="shop_store_position col-md-10 col-md-offset-1">

          <div class="img_options">
            <img class="img-rounded" src="../img/jeu4.jpg" alt="">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-danger">Acheter</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Description</a></li>
                <li><a href="#">Ajouter au panier</a></li>
                <li><a href="#">Recommander à un ami</a></li>
                <li role="separator" class="divider"></li>
                <li data-dismiss="close"><a href="#">Fermer</a></li>
              </ul>
            </div>
          </div>

          <div class="img_options">
            <img class="img-rounded" src="../img/jeu5.jpg" alt="">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-danger">Acheter</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Description</a></li>
                <li><a href="#">Ajouter au panier</a></li>
                <li><a href="#">Recommander à un ami</a></li>
                <li role="separator" class="divider"></li>
                <li data-dismiss="close"><a href="#">Fermer</a></li>
              </ul>
            </div>
          </div>

          <div class="img_options">
            <img class="img-rounded" src="../img/jeu6.png" alt="">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-danger">Acheter</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Description</a></li>
                <li><a href="#">Ajouter au panier</a></li>
                <li><a href="#">Recommander à un ami</a></li>
                <li role="separator" class="divider"></li>
                <li data-dismiss="close"><a href="#">Fermer</a></li>
              </ul>
            </div>
          </div>

          <div class="img_options">
            <img class="img-rounded" src="../img/jeu7.png" alt="">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-danger">Acheter</button>
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Description</a></li>
                <li><a href="#">Ajouter au panier</a></li>
                <li><a href="#">Recommander à un ami</a></li>
                <li role="separator" class="divider"></li>
                <li data-dismiss="close"><a href="#">Fermer</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
      <div id="shop_footer_bar" class="row">
        <div class="footer_bar_position col-md-10 col-md-offset-1">
          <div class="btn-toolbar" role="toolbar" aria-label="...">
            <div class="btn-group" role="group" aria-label="...">
              <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-fast-backward"></span></button>
              <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-step-backward"></span></button>
            </div>
            <div class="btn-group" role="group" aria-label="...">
              <button type="button" class="btn btn-default">1</button>
              <button type="button" class="btn btn-default">2</button>
              <button type="button" class="btn btn-default">3</button>
              <button type="button" class="btn btn-default">4</button>
              <button type="button" class="btn btn-default">5</button>
              <button type="button" class="btn btn-default">6</button>
              <button type="button" class="btn btn-default">7</button>
              <button type="button" class="btn btn-default">...</button>
            </div>
            <div class="btn-group" role="group" aria-label="...">
              <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-step-forward"></span></button>
              <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-fast-forward"></span></button>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include 'footer.php'; ?>
