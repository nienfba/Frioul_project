<!DOCTYPE html>
<html lang="fr">
<?php include_once "html/inc/head.php"; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<body class="">
<header class="">
  <img src="media/c4m.png" alt="" class="logo" />
    <nav class=""><!-- Navigation -->
      <ul class="hidden">
        <li class=""></li>
        <li class=""></li>
        <li class=""></li>
        <li class=""></li>
        <li class=""></li>
        <li class=""></li>
      </ul>
    </nav>
</header>
<section class="">
  <!-- <div class="logo"></div> -->
    <!-- Partie qui contient les photos sur la moitié de page gauche et la carte sur la partie de moitié de page droite" -->
  <div class="container">
    <div class="row  mb-1 mt-1">
   <span class="dropdown dropdown-menu-left d-flex align-items-start">
    <button class="btn-medium border-0" data-toggle="dropdown">Choisissez une ville
        <div class="dropdown-menu" style= "border-0;">
            <div class="dropdown-item">Marseille</div>
            <div class="dropdown-item">Arles</div>
            <div class="dropdown-item">Cassis</div>
            <div class="dropdown-item">LaCiotat</div>
            <div class="dropdown-item">Aix en Provence</div>
        </div>
    </button>
  </span>
  <span class="dropdown">
    <button class="btn-medium" data-toggle="dropdown">Espace naturel
        <div class="dropdown-menu">
            <div class="dropdown-item">Le Panier </div>
            <div class="dropdown-item">Les Calanques</div>
            <div class="dropdown-item">Le Vieux port </div>
            <div class="dropdown-item">La Bonne Mère</div>
        </div>
    </button>
  </span>
  <button type="submit" class="btn-medium  sub">Valider</button>

    </div>
  </div>
</section>
<!-- Partie qui contient les photos sur la moitié de page gauche et la carte sur la partie de moitié de page droite" -->
<div class="container border-top">
  <div class="row">
    <div class= "col-6">
      <!-- demie page sur la gauche : cards" -->
      <div class="row">
        <div class="col-6">
          <div class="card my-2">
            <div class="card-img-top" style="height:150px; background: url('media/panier.jpg'); background-size: cover; background-position: center;" > </div>
              <div class="card-body" style="height:150px; overflow: hidden;">
              <h6 class="text-danger font-weight-bold">Ballade dans le panier</h6>
              <p class= "mr-2 "><i class="fas fa-walking align-items mr-2"></i><strong>idéal pour une famille</strong><br><i class="fas fa-stopwatch mr-2"></i>2 à 4 heures|1km<br><strong style="color:rgb(18, 25, 145);">#Marseille #les Calanques</strong ></p>
              </div>
          </div>
        </div>
          <div class="col-6">
            <div class="card my-2">
              <div class="card-img-top" style="height:150px; background: url('media/calanques.jpg'); background-size: cover; background-position: center;" > </div>
                <div class="card-body" style="height:150px; overflow: hidden;">
                <h6 class="text-danger font-weight-bold">Les Calanques</h6><p><i class="fas fa-tree align-items mr-2"></i><strong>Randonnées</strong><br><i class="fas fa-stopwatch mr-2"></i>2 à 4 heures|800m<br><strong style="color:rgb(18, 25, 145);">
                #Marseille #panier</strong></p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card my-2">
              <div class="card-img-top" style="height:150px; background: url('media/vieuxport.jpg'); background-size: cover; background-position: center;" ></div>
                <div class="card-body" style="height:150px; overflow: hidden;">
                <h6 class="text-danger font-weight-bold">Le vieux-port</h6>
                <p class= "mr-2"><i class="fas fa-walking align-items mr-2"></i><strong>ideal pour une famille</strong><br><i class="fas fa-stopwatch mr-2"></i>1à 2heures <br>
                <strong style="color:rgb(18, 25, 145);">#vieuxport</strong></p>

              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card my-2" >
              <div class="card-img-top" style="height:150px; background: url('media/bonnemere.jpg'); background-size: cover; background-position: center;"></div>
              <div class="card-body" style="height:150px; overflow: hidden;">
              <h6 class="text-danger font-weight-bold">Visite de la bonne mère</h6>
              <p class= "mr-2 "><i class="fas fa-walking align-items mr-2"></i><strong>ideal pour une famille</strong><br>
              <i class="fas fa-stopwatch mr-2"></i>30 minutes<br><strong style="color:rgb(18, 25, 145);">#notredamedelagarde</strong></p>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class= "col-6 map">
      <div class="">
      <!-- Carte -->
      <?php include_once "html/inc/bons-plans-carte.php"; ?>
      </div>
    </div>
  </div>
</div>
</body>
<?php include_once "html/inc/footer.php"; ?>
</html>
