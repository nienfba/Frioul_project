<!DOCTYPE html>
<html lang="fr">
<?php include_once "html/inc/head.php"; ?>

<body class="accueil">
    <header class="">
        <img src="media/c4m.png" alt="" class="logo" />
        <nav class="">
            <!-- Navigation -->
            <ul class="hidden">
                <li class=""></li>
                <li class=""></li>
                <li class=""></li>
            </ul>
        </nav>
    </header>

    <article class="">
        <!-- Full width -->
        <div class="row">
            <section id="intro" class="text-center">
                <!-- Background animé à définir -->
                <h1 class="">Découvrez en direct les merveilles de Marseille. <span class="hashtag">#Panier</span></h1>
                <p class="">Une ville contemporaine qui abrite des petits villages de pêcheurs et des quartiers
                    alternatifs.</p>
            </section>

            <section id="bandeau">
                <!-- Bas de page visible page home avec fond transparent-->
                <span class="dropdown">
                    <button class="dropdown btn-medium" data-toggle="dropdown">Choisissez une ville
                        <div class="dropdown-menu">
                            <div class="dropdown-item">Marseille</div>
                            <div class="dropdown-item">Plan de Cuques</div>
                            <div class="dropdown-item">Allauch</div>
                            <div class="dropdown-item">Aix en Provence</div>
                        </div>
                    </button>
                </span>
                <a href="" title=""><button class="btn-medium bouton">Choisissez une activité</button></a>
                <a href="bons_plans.php" title=""><button class="btn-medium bouton">Découvrir les bons plans</button></a>
                <a href="autour.php" title=""><button class="btn-medium bouton">Autour de moi</button></a>
            </section>
        </div>
    </article>
    
    <section id="infos">
        <!-- Bas de page contenu à définir -->
        <h1>Vous pouvez dès à présent publier vos photos avec Instagram</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mx-auto">
                <strong>Choisissez votre lieu</strong>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mx-auto">
                <strong>Regardez les hastags du bon plan</strong>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mx-auto">
                <strong>Publiez votre photo</strong>
            </div>
        </div>
    </section>

    <aside class=""></aside><!-- Block flottant à droite -->
    <?php include_once "html/inc/footer.php"; ?>
</body>

</html>