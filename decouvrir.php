<!DOCTYPE html>
<html lang="fr">
<?php include_once "html/inc/head.php"; ?>


<body class="decouvrir">
 
  <!----------------------------------- DEBUT  HEADER   --------------------------------------->
    <header class="">
        <a href="index.php"><img src="media/c4m.png" alt="" class="logo" /></a>
        <div class="logo"></div>
        <nav class="">
            <!-- Navigation -->
            <ul class="">
                <li class=""></li>

            </ul>
        </nav>
    </header>
  <!-----------------------------------  FIN  HEADER   ---------------------------------------->



  <!-----------------------------------  DEBUT  MAIN   ---------------------------------------->
    <main>
      <div class="container-fluid">     
        <div class="row colonneg">

          <!-- Debut Colonne de gauche -->
            <div class="col-lg-6 ">

              <!-- Affichage d'une publication (Photos + commentaires) -->
              <img  class="img-fluid col-lg-12" src="img/panier.jpg" alt="">
              <h1 class="col-lg-12">BALADE DANS LE PANIER</h1>
              <p class="col-lg-12">idéal pour la famille</p> <!-- pictogrammes -->
              <p class="col-lg-12">#marseille #panier</p>    <!---- Hachtag ---->
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
              <p class="col-lg-12">
                Sentez-moi ces parfums ! Et à deux pas de là, 
                Place des prêcheurs, vous pourrez même acheter un joli bouquet 
                de fleurs pour décorer votre table dominicale
              </p>

              <!-- Réseaux sociaux -->
              <section class="col-lg-12">
                <h3>Partagez avec vos amis</h3>
                <span class="footer-social">eee</span>
                <span class="fa-facebook"></span>
                <span class="fa-twitter"></span>
                <span class="fa-pinterest"></span>
              </section>             
            </div>
          <!-- Fin Colonne de gauche -->

          <!-- Debut Colonne de Droite -->
            <div class="col-lg-6 colonneg">
              <h5 class="img-fluid col-lg-12">Météo des 4 prochains jours (SOURCE:Meteo Blue)</h5>
              <?php include_once "html/inc/meteo.php"; ?>
              <p>
                <img class="img-fluid col-lg-12" src="img/stats.jpg" alt="">
              </p>
              <!-- Vignettes des meilleur publications -->
              <div class="container-fluid">
                <h5>Meilleures Publications</h5>
                <div class="row colonned">
                  <div class="col-lg-4 colonnrdimg1"></div>
                  <div class="col-lg-4 colonnrdimg2"></div>
                  <div class="col-lg-4 colonnrdimg3"></div>
                  <div class="col-lg-4 colonnrdimg4"></div>
                  <div class="col-lg-4 colonnrdimg5"></div>
                  <div class="col-lg-4 colonnrdimg6"></div>
                  <div class="col-lg-4 colonnrdimg7"></div>
                  <div class="col-lg-4 colonnrdimg8"></div>
                  <div class="col-lg-4 colonnrdimg9"></div>
                </div>
              </div>
            </div>
          <!-- Fin Colonne de Droite -->

        </div>
      </div>
    </main>
  <!-----------------------------------  FIN  MAIN   ---------------------------------------->
</body>
<?php include_once "html/inc/footer.php"; ?>

</html>
