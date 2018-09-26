<!DOCTYPE html>
<html lang="fr">
<?php include_once "html/inc/head.php"; ?>
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
    <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>  
</section>
<article><!-- Liste des photos et informations -->   
    <section><!-- 2 Colonnes / Voir pour limiter le nombre de photos -->
        <div class=""></div><!-- Photo en background -->
        <h3 class=""></h3><!-- Titre -->
        <p class="">
            <!-- Description avec picto / Gras -->
            <!-- Durée et distance avec picto -->
            <!-- # Hashtag / Gras-->
        </p>

    </section>
</article>
<aside>
    <!-- Carte -->
    <?php include_once "html/inc/bons-plans-carte.php"; ?>
</aside>

</body>
<?php include_once "html/inc/footer.php"; ?>
</html>