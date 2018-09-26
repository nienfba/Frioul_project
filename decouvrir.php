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

    <!-- <div class="container"> -->
        <div class="row">
            <article class="col-xs-12 col-sm-6">
                <!-- Full width -->
                <section>
                    <!-- 1 Colonnes / Voir pour limiter le nombre de photos -->
                    <div class="">
                        <img src="media/panier.jpg" alt="">
                        </div><!-- Photo en background -->
                        <h3 class="">BALADE DANS LE PANIER</h3><!-- Titre -->
                        <p class="">
                            <!-- Description avec picto / Gras -->
                            <!-- Durée et distance avec picto -->
                            <!-- # Hashtag / Gras-->
                        </p>
                        <!-- Description texte et photo -->
                        <p class="">
                            On est dimanche matin et il vous manque le petit bouquet d'aromates 
                        pour terminer votrebonne daube provençale dont tout le monde raffole?!
                        Lemarché de la place Richelme vous attendavec tout les produits du 
                        terroir, aromates, olives, l'huile d'olive, les tomates séchées, 
                        les fruits et légumes, les poissons, les bons petits fromages de 
                        chèvre, le miel, la tapenade ou le caviar d'aubergine pour l'apéro...
                        </p>
                </section>
                <section>
                    <h3>Partagez avec vos amis</h3>
                    <span class="fa-at"></span><!-- Résaux sociaux-->
                    <span class="fa-facebook"></span>
                    <span class="fa-twitter"></span>
                    <span class="fa-pinterest"></span>
                </section>
            </article>

            <aside class="col-xs-12 col-sm-6"><!-- Block de widgets flottant à droite -->
                
                <section>
                    <?php include_once "html/inc/meteo.php"; ?>
                </section><!-- Météo -->

                <section>
                    <h3>Horaires d'affluence</h3>
                </section><!-- Horaires d'affluence -->
                    
                <section><!-- Meilleures publications / Grille de photos -->
                    <h3>Meilleures publications</h3>
                    <div class=""></div><!-- Photo en background -->
                    <div class=""></div><!-- Photo en background -->
                    <div class=""></div><!-- Photo en background -->
                    <p></p><!-- Description avec hashtags en gras -->
                </section>

            </aside>
        </div>
    <!-- </div> -->
</body>
<?php include_once "html/inc/footer.php"; ?>

</html>