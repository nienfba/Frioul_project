<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/accueil.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <div class='header'>
            <?php include('..\html\inc\accueil.php'); ?>
        </div>
        <div class='second'>
            <div class="WallOfPictures">
                <div class="row">
                    <br><br><br><br>
                    <center>
                        <img id="ImgWall" src="https://i.ytimg.com/vi/wSTt04rOwa8/maxresdefault.jpg" width="300" height="200"/>
                    </center>
                </div>
            </div>
            <div class="map">
                <div id="mapHome"></div>
            </div>
        </div>
        <?php include('includes/navright.html'); ?>
        <div id="navBottom"><button id="showRight">NavRight</button><button id="showOverlay">Overlay</button></div>
        <div class="overlay-box">
            <center>
                <h3>Jusqu'à quelle heure dure cet évenement ?</h3>

                <textarea></textarea>
            </center>
        </div>
    </body>
    <script>
        var mymap = L.map('mapHome').setView([43.3, 5.4], 13);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            id: 'mapbox.streets'
        }).addTo(mymap);

        window.addEventListener('wheel', function (e) {
            if (e.deltaY < 10) {
                //scroll up
            }
            if (e.deltaY > 10) {
                //scroll down
                if($(".header").is(":visible")) {
                    $(".header").slideUp("slow");
                }   else {
                    $(".WallOfPictures").slideUp("slow");
                    $("#navBottom").slideDown("slow");
                }
            }
        });

        $("#showOverlay").click(function () {
            if ($(".overlay-box").is(":visible")) {
                $(".overlay-box").slideUp("slow");
            } else {
                $(".overlay-box").slideDown("slow");
            }
        });
        $("#showRight").click(function () {
            if ($("#navRight").is(":visible")) {
                $("#navRight").slideUp("slow");
            } else {
                $("#navRight").slideDown("slow");
            }
        });

        /*var UrlApi = "http://localhost/hackaton/myprovence/public/api/instas";

        fetch(UrlApi)
                .then(function (reponse) {
                    return reponse.json();
                })
                .then(function (objetJson) {
                    //Nombres de pages à charger
                    var LastPage = objetJson['hydra:totalItems'] / 100;
                    var NbPages = Math.ceil(LastPage);

                    for (var page = 1; page < NbPages + 1; page++) {
                        var url = UrlApi + '?page=' + page;
                        fetch(url)
                                .then(function (response) {
                                    // SI ON VEUT GERER DU JSON
                                    // ON VA TRANSFORMER LE RESULTAT EN OBJET JSON
                                    return response.json();
                                })
                                .then(function (objetJson) {
                                    var tableauInfo = objetJson["hydra:member"];
                                    // BOUCLE POUR PARCOURIR LES INFOS UNE PAR UNE
                                    for (var index = 0; index < tableauInfo.length; index++) {

                                        var infoCourante = tableauInfo[index];

                                        var title = infoCourante.title;
                                        var latitude = infoCourante.latitude;
                                        var longitude = infoCourante.longitude;
                                        var description = infoCourante.description;
                                        var publicationDate = infoCourante.publicationDate;
                                        var image = infoCourante.lowResolution;
                                        if (image)
                                        {

                                            var marker = L.marker([latitude, longitude]).addTo(mymap)
                                                    .bindPopup('<img class="img-fluid" src="' + image + '" />');
                                        }
                                    }
                                });
                    }
                });*/
    </script>
</html>
