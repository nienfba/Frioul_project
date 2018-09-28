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
  <div class="logo"></div>
    <!-- Partie qui contient les photos sur la moitié de page gauche et la carte sur la partie de moitié de page droite" -->
  <div class="container">
    <div class="row justify-content-center mb-5">
      <form action="" class="">
        <select class=" btn-medium  ">
          <option>Marseille</option>
          <option>Arles </option>
          <option>Cassis </option>
          <option>La Ciotat </option>
          <option>Aix en Provence </option>
        </select>
        <select class="btn-medium " >
          <option>Les Calanques</option>
          <option>Le panier</option>
          <option>Le Vieux port </option>
          <option>La Bonne mère</option>
          <option>L'estaque</option>
        </select>
        <button type="submit" class="btn-medium ">Submit</button>
      </form>
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
          <div class="card my-3">
            <div class="card-img-top" style="height:200px; background: url('media/panier.jpg'); background-size: cover; background-position: center;" > </div>
              <div class="card-body">
              <h4 class="text-danger font-weight-bold">Ballade dans le panier</h4>
              <p class= mr-2 style= "line-height: 5px;"><i class="fas fa-walking align-items mr-2"></i>idéal pour une famille<br><i class="fas fa-stopwatch mr-2"></i>2 à 4 heures <br>800m</p>
              <p>#Marseille #panier</p>
              </div>
          </div>
        </div>
          <div class="col-6">
            <div class="card my-3" >
              <div class="card-img-top" style="height:200px; background: url('media/calanques.jpg'); background-size: cover; background-position: center;" > </div>
                <div class="card-body pxy-0">
                <h4 class="text-danger font-weight-bold">Les Calanques</h4><p><i class="fas fa-tree align-items mr-2"></i>Randonnée</p><p><i class="fas fa-stopwatch mr-2"></i>2 à 4 heures <br>800m</p>
                <p>#Marseille #panier</p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card my-3">
              <div class="card-img-top" style="height:200px; background: url('media/vieux-port.jpg'); background-size: cover; background-position: center;" > </div>
                <div class="card-body">
                <h4 class="text-danger font-weight-bold">Le vieux-port</h4>
                <p class= "mr-2"><i class="fas fa-walking align-items mr-2"></i>ideal pour une famille</p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card my-3" >
              <div class="card-img-top" style="height:200px; background: url('media/bonne_mere.jpg'); background-size: cover; background-position: center;" > </div>
                <div class="card-body">
                <h4 class="text-danger font-weight-bold">Visite de la bonne mère</h4>
                <p class= "mr-2"><i class="fas fa-walking align-items mr-2"></i>ideal pour une famille</p>
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
