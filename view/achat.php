<?php include 'header.php'; ?>
<section id="achat">
  <div class="container-fluid">


    <div id="choix_carte"class="container text-center">
      <h2>Moyen de paiement</h2>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <img src="http://campusrecruitingforum.com/wp-content/uploads/2016/08/Visa_Inc._logo.svg_.png">
          <p>Visa<p>
            <input type="checkbox" id="cbox1" value="checkbox1">
          </div>
          <div class="col-md-3">
            <img src="http://i0.wp.com/www.reussir-mon-ecommerce.fr/wp-content/uploads/2016/03/logo-cb.jpg?fit=580%2C414">
            <p>Carte bleue</p>
            <input type="checkbox" id="cbox1" value="checkbox1">

          </div>
          <div class="col-md-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2000px-MasterCard_Logo.svg.png">
            <p>MasterCard</p>
            <input type="checkbox" id="cbox1" value="checkbox1">

          </div>
          <div class="col-md-3">
            <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcSybMVLEqUuEqUyolbb3pbtfPTWiCeAMHPbvuKGOykS74Jxjdg8acG4CUI">
            <p>Paypal</p>
            <input type="checkbox" id="cbox1" value="checkbox1">
          </div>
        </div>
      </div>

      <div id="info_perso"class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Informations Personnelles</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Adresse email</h3>
            <input type="mail" name="mail" id="mail">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Nom</h3>
            <input type="text" name="text" id="nom">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Prénom</h3>
            <input type="text" name="text" id="prenom">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Informations bancaire</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Nom sur la carte</h3>
            <input type="text" name="text" id="nom_carte">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Numero de la carte</h3>
            <input type="text" name="text" id="numero_carte" placeholder="0000-0000-0000-0000">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Date d'expiration</h3>
            <input type="text" name="text" id="date_expi" placeholder="jj/mm/aa">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Cryptogramme visuel</h3>
            <input type="text" name="text" id="cv" placeholder="XXX">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="submit" id="bouton_sub" value="Submit">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
