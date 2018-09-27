<!DOCTYPE html>
<html lang="fr">
<?php include_once "html/inc/head.php"; ?>

<body class="decouvrir">
    <header class="">
        <img src="media/c4m.png" alt="" class="logo" />
        <div class="logo"></div>
        <nav class="">
            <!-- Navigation -->
            <ul class="">
                <li class=""></li>

            </ul>
        </nav>
    </header>

  <main>
    <div class="container-fluid">     
      <div class="row colonneg">
        <div class="col-lg-6 ">
          <img  class="img-fluid col-lg-12" src="img/panier.jpg" alt="">
          <h1 class="col-lg-12">BALADE DANS LE PANIER</h1>
          <p class="col-lg-12">idéal pour la famille</p>
          <p class="col-lg-12">#marseille #panier</p>
          <p class="col-lg-12">
            On est dimanche matin et il vous manque le petit bouquet d'aromates 
            pour terminer votrebonne daube provençale dont tout le monde raffole?!
            Lemarché de la place Richelme vous attendavec tout les produits du 
            terroir, aromates, olives, l'huile d'olive, les tomates séchées, 
            les fruits et légumes, les poissons, les bons petits fromages de 
            chèvre, le miel, la tapenade ou le caviar d'aubergine pour l'apéro...
            </p>
            <div class="imgport">
            <img  class="img-fluid col-lg-8" src="img/port.jpg" alt="">
          </div>
          <p class="col-lg-12">Sentez-moi ces parfums ! Et à deux pas de là, 
            Place des prêcheurs, vous pourrez même acheter un joli bouquet 
            de fleurs pour décorer votre table dominicale</p>
            <section class="col-lg-12">
              <h3>Partagez avec vos amis</h3>
              <span class="fa-at"></span><!-- Résaux sociaux-->
              <span class="fa-facebook"></span>
              <span class="fa-twitter"></span>
              <span class="fa-pinterest"></span>
          </section>             
        </div>

        <div class="col-lg-6 colonneg">
          <h5 class="img-fluid col-lg-12">Météo des 4 prochains jours (SOURCE:Meteo Blue)</h5>
          <?php include_once "html/inc/meteo.php"; ?>
          
          <p>
            <img class="img-fluid col-lg-12" src="img/stats.jpg" alt="">
          </p>
          <div class="container-fluid">
              <h5>Meilleures Publications</h5>
            <div class="row colonned">
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/302EM-Moulin-panier_01.jpg" alt=""></div>
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/Calanque_de_Sormiou.jpg" alt=""></div>
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/calanque_marseille.jpg" alt=""></div>
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/calanque_sugiton.jpg" alt=""></div>
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/le-quartier-du-Panier.jpg" alt=""></div>
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/marseille_pointerouge.jpg" alt=""></div>
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/marseille-panier0490b.jpg" alt=""></div>
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/mucem_nuit.jpg" alt=""></div>
              <div class="col-lg-4 "><img  class="img-fluid" src="img/marseille/stade-velodrome-marseille.jpg" alt=""></div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </main>
</body>
<?php include_once "html/inc/footer.php"; ?>

</html>