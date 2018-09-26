<!DOCTYPE html>
<html lang="fr">
<?php include_once "html/inc/head.php"; ?>
<body class="autour">
<header class="">    
    <a href="index.php"><img src="media/c4m.png" alt="" class="logo" /></a>
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
<article class=""><!-- Full width -->

    <section class="container">
        <div class="row">
            <div class="col-12">
<form>
  <div class="form-group row">
      <div class="col-sm-4">
        <select class="form-control" id="ville" placeholder="ville">
          <option value="">choisissez une ville</option>
          <option>marseille</option>
          <option>aix</option>
          <option>aubagne</option>
          <option>cassis</option>
        </select>
      </div>
      <div class="col-sm-4">
        <select class="form-control" id="activite" placeholder="activité">
          <option value="">choisissez une activité</option>
          <option>Espace Naturel</option>
          <option>Mer</option>
          <option>Montagne</option>
          <option>Urbain</option>
        </select>
      </div>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary mb-2">Valider</button>
      </div>
  </div>
</form>                
            </div>
        </div>
    </section>    

    <section class="container">
        <div class="row">
            <div class="col-sm-6">
                LISTE DES BONS PLANS
            </div>
            <div class="col-sm-6">
                <div id="map">
                </div>
                <script>
var mymap = L.map('map').setView([43.3, 5.4], 10);
this.tileLayer = L.tileLayer(
                'https://cartodb-basemaps-{s}.global.ssl.fastly.net/rastertiles/voyager/{z}/{x}/{y}.png', {
                    maxZoom: 18,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, &copy; <a href="https://carto.com/attribution">CARTO</a>',
                }
            );                
            this.tileLayer.addTo(mymap);
            
            </script>
            </div>
        </div>
    </section>
    <section>
        <!-- Bas de page contenu à définir -->
    </section>
</article>
<aside class=""></aside><!-- Block flottant à droite -->
<?php include_once "html/inc/footer.php"; ?>
</body>
</html>