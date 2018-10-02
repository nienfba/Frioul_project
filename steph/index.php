<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/accueil.css">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/MarkerCluster.css">
        <link rel="stylesheet" href="css/Leaflet.Photo.css">
        <link rel="stylesheet" href="css/map.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
        <!-- FONT AWESOME CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="js/reqwest.min.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script src="js/Leaflet.Photo.js"></script>
        <script src="js/anime.js"></script>

        <style>
            ul.listeInfo {
                padding-left:0;
                display:flex;
                flex-wrap:wrap;
                list-style:none;
                width:100%;
            }
            ul.listeInfo li {
                width:100%;
            }
            .container {
                padding-top: 10%;
            }

        </style>

    </head>
    <body>
        <div class='header'>
            <?php include('../html/inc/accueil.php'); ?>
        </div>
        <div class='second'>
            <div class="WallOfPictures">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="listeInfo row">
                                <!-- ICI ON VA CREER UNE BALISE li PAR INFO RECUPERE -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div id="mapHome"></div>
            </div>
        </div>
        <?php include('includes/navright.html'); ?>
        <?php include('includes/navleft.php'); ?>
        <div class="overlay-box bounceIn animated">
            <center>
                <h3>Jusqu'à quelle heure dure cet évenement ?</h3>

                <textarea></textarea>
            </center>
        </div>
        <div id="UpPage"><img src="img/hautdepage.png" width="40" height="40"></div>
    </body>
    <script>

        var map = L.map('mapHome').setView([43.3, 5.4], 13);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            id: 'mapbox.streets'
        }).addTo(map);

        var hashtag = "code4Marseille";

        function ajaxMap() { 
            
            
            
            if(photoLayer)  {
                map.removeLayer(photoLayer);
            }

            var photoLayer = L.photo.cluster({spiderfyDistanceMultiplier: 1.6}).on('click', function (evt) {
                evt.layer.bindPopup(L.Util.template('<img src="{url}"/></a><img id="imgLike" src="img/instaLike.png" style="float: left;"/><span style="line-height:25px;"><b>{likes}</b></span><p>{caption}</p>', evt.layer.photo), {
                    className: 'leaflet-popup-photo',
                    minWidth: 400
                });
            });

            var UrlApi = "https://myprovence.code4marseille.fr/api/instas?tags=code4marseille";

            fetch(UrlApi)
                    .then(function (reponse) {
                        return reponse.json();
                    })
                    .then(function (objetJson) {
                        //Nombres de pages à charger
                        var LastPage = objetJson['hydra:totalItems'] / 100;
                        var NbPages = Math.ceil(LastPage);

                        for (var page = 1; page < NbPages + 1; page++) {

                            var url = UrlApi + '&page=' + page;
                            fetch(url)
                                    .then(function (response) {
                                        // SI ON VEUT GERER DU JSON
                                        // ON VA TRANSFORMER LE RESULTAT EN OBJET JSON
                                        return response.json();
                                    })
                                    .then(function (objetJson) {
                                        var tableauInfo = objetJson["hydra:member"];
                                        var photos = [];
                                        // BOUCLE POUR PARCOURIR LES INFOS UNE PAR UNE
                                        for (var index = 0; index < tableauInfo.length; index++) {


                                            var infoCourante = tableauInfo[index];

                                            var title = infoCourante.title;
                                            var likes = infoCourante.likes;
                                            var link = infoCourante.link;
                                            var latitude = infoCourante.latitude;
                                            var longitude = infoCourante.longitude;
                                            var description = infoCourante.caption;
                                            var publicationDate = infoCourante.publicationDate;
                                            var image = infoCourante.lowResolution;
                                            if (image)
                                            {

                                                photos.push({
                                                    lat: String(latitude),
                                                    lng: String(longitude),
                                                    url: image,
                                                    caption: "<a href='" + link + "'>" + description + "</a>",
                                                    thumbnail: image,
                                                    likes: likes
                                                });
                                            }
                                        }

                                        photoLayer.add(photos).addTo(map);
                                        map.fitBounds(photoLayer.getBounds());
                                    });
                        }
                    });
        }
        
        
        ajaxMap();
        setInterval(ajaxMap, 10000);

        var page = 1;

        window.addEventListener('wheel', function (e) {
            if (e.deltaY < 10) {
                //scroll up
            }
            if (e.deltaY > 10) {
                //scroll down
                if (page == 1) {
                    anime({
                        targets: '.header',
                        translateY: (document.body.clientWidth)
                    });
                    appelAjax(urlApiAjax, ajouterImage);
                    $("#UpPage").show();
                    page = 2;
                } else if (page == 2) {
                    anime({
                        targets: '.WallOfPictures',
                        translateY: -(document.body.clientWidth)
                    });
                    anime({
                        targets: '#navBottom',
                        translateY: -50
                    });
                    page = 3;
                    //$("#navBottom").slideDown(1000);
                }
                //$("#UpPage").show();
            }
        });

        $("#showOverlay").click(function () {
            if ($(".overlay-box").is(":visible")) {
                $(".overlay-box").hide();
            } else {
                $(".overlay-box").show();
            }
        });

        $("#showRight").click(function () {
            if ($("#navRight").is(":visible")) {
                $("#navRight").hide();
            } else {
                $("#navRight").show();
            }
        });

        var hauteur = (document.body.clientWidth);

        $("#UpPage").click(function () {
            if (page = 3) {
                anime({
                    targets: '.WallOfPictures',
                    translateY: 2500
                });
                anime({
                    targets: '#navBottom',
                    translateY: 50
                });
                page = 2;
            }
        });


        //SCRIPT DANIEL ACCUEIL.PHP
        $(document).ready(function () {
            $.fn.delay = function (time, callback) {
                jQuery.fx.step.delay = function () {};
                return this.animate({
                    delay: 1
                }, time, callback);
            }

            $.getJSON('../html/inc/accueil.json', function (data) {
                $.each(data, function (index, d) {
                    $('#lieux').delay(3000, function () {
                        $('#lieux').html(d.hashtag);
                        //$('article').css('background-image', 'url(' + d.image + ')');

                        var alternate = anime({
                            targets: '#alternate .el',
                            translateX: 250,
                            direction: 'alternate'
                        });

                    });
                });
            });

        });

        var appelAjax = function (urlApiAjax, callbackJson)
        {
            // https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch
            fetch(urlApiAjax)
                    .then(function (data) {
                        // DEBUG
                        console.log(data);
                        // ON VEUT RECEVOIR UN OBJET JAVASCRIPT
                        return data.json();
                    })
                    .then(callbackJson)
        }

// URL API AJAX
        var urlApiAjax = 'https://myprovence.code4marseille.fr/api/instas?itemsPerPage=24';
        var ajouterImage = function (objetJS)
        {
            console.log(objetJS);
            // CA Y'EST J'AI UN OBJET JS AVEC TOUTES INFOS PLANQUEES DEDANS...
            // IL FAUT ALLER RECUPERER LES INFOS QUI NOUS INTERESSENT
            var tableauInfo = objetJS["hydra:member"];
            // objet.propriete OU objet["propriete"]
            // BOUCLE POUR PARCOURIR LES INFOS UNE PAR UNE
            for (var index = 0; index < tableauInfo.length; index++) {
                var infoCourante = tableauInfo[index];
                console.log(infoCourante);
                var link = infoCourante.link;
                var thumbnail = infoCourante.thumbnail;
                var lowResolution = infoCourante.lowResolution;
                var standardResolution = infoCourante.standardResolution;
                if (link) {
                    var baliseUl = document.querySelector("ul.listeInfo");
                    // DOM Document Object Model
                    // AJOUTER UNE BALISE li
                    var codeHtmlLi = '<li class="col-sm-2 col-xs-1">'
                            + '<a href="' + link + '">'
                            + '<img class="img-fluid" src="' + standardResolution + '">'
                            + '</a>'
                            + '</li>';
                    // AJOUTER NOTRE CODE POUR LA BALISE li DANS LA BALISE ul
                    //baliseUl.innerHTML += codeHtmlLi;
                    setTimeout(function () {
                        baliseUl.innerHTML += codeHtmlLi;
                    }, 1000 * index);
                }
            }

        }

    </script>
</html>
