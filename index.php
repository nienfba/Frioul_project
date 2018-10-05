<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="fr">
<!--<![endif]-->
    <?php include('html/inc/head.php'); ?>
    <body>
        <?php include('html/inc/accueil.php'); ?>
        <?php include('html/inc/wallofpictures.php'); ?>
        <?php include('html/inc/map.php'); ?>
        <?php include('html/inc/navright.html'); ?>
        <?php include('html/inc/overlay.php'); ?>

        <!--BOUTON HAUT DE PAGE -->
        <div id="UpPage"><img src="img/hautdepage.png" width="40" height="40"></div>
    </body>
    <script>

        var map = L.map('mapHome').setView([43.3, 5.4], 13);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            id: 'mapbox.streets'
        }).addTo(map);

        // GESTION POINTS BONS PLANS ECT..

        var idsInfos = [];

        function ajaxInfos() {

            /*if (photoLayer != null) {
             map.removeLayer(photoLayer);
             }*/

            var UrlApi = "https://myprovence.code4marseille.fr/api/infos";

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
                                            if (infoCourante.latitude && infoCourante.longitude) {
                                                var id = infoCourante["@id"];
                                                //Verification d'ajout d'image (live)
                                                if (idsInfos.includes(id) == false) {
                                                    idsInfos.push(id);
                                                    //Icone :
                                                    if (infoCourante.icon != null && infoCourante.description != null) {
                                                        var myIcon = L.divIcon({className: 'fa fa-2x fa-'+infoCourante.icon});
                                                        //Création du marker :
                                                        L.marker([infoCourante.latitude, infoCourante.longitude], {icon: myIcon})
                                                                .addTo(map)
                                                                .bindPopup(infoCourante.description);
                                                    }
                                                }
                                            }
                                        }
                                    });
                        }
                    });
        }

        // GESTION POINTS INSTAGRAM

        photoLayer = L.photo.cluster({spiderfyDistanceMultiplier: 1.6}).on('click', function (evt) {
            evt.layer.bindPopup(L.Util.template('<img src="{url}"/></a><img id="imgLike" src="img/instaLike.png" style="float: left;"/><span style="line-height:25px;"><b>{likes}</b></span><p>{caption}</p>', evt.layer.photo), {
                className: 'leaflet-popup-photo',
                minWidth: 400
            });
        });


        var photoLayer;
        var idInsta = [];

        function ajaxMap(hashtag = "code4marseille") {

            /*if (photoLayer != null) {
             map.removeLayer(photoLayer);
             }*/

            var UrlApi = "https://myprovence.code4marseille.fr/api/instas?tags=" + hashtag;

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

                                            if (infoCourante.latitude && infoCourante.longitude) {
                                                var title = infoCourante.title;
                                                var likes = infoCourante.likes;
                                                var link = infoCourante.link;
                                                var latitude = infoCourante.latitude;
                                                var longitude = infoCourante.longitude;
                                                var description = infoCourante.caption;
                                                var publicationDate = infoCourante.publicationDate;
                                                var image = infoCourante.lowResolution;
                                                var id = infoCourante.id;

                                                //Verification d'ajout d'image (live)
                                                if (idInsta.includes(id) == false) {
                                                    idInsta.push(id);
                                                    //Verification si image existe encore
                                                    var img = new Image();
                                                    img.myLat = String(latitude);
                                                    img.myLng = String(longitude);
                                                    img.myLink = link;
                                                    img.myDescription = description;
                                                    img.myLikes = likes
                                                    img.onload = function () {
                                                        var photo = [{
                                                                lat: this.myLat,
                                                                lng: this.myLng,
                                                                url: this.src,
                                                                caption: "<a href='" + this.myLink + "'>" + this.myDescription + "</a>",
                                                                thumbnail: this.src,
                                                                likes: this.myLikes
                                                            }];
                                                        photoLayer.add(photo).addTo(map);
                                                    }
                                                    img.src = infoCourante.lowResolution;
                                                }
                                            }
                                        }
                                    });
                        }
                    });
        }

        var hashtag = "code4marseille";

        ajaxMap();

        setInterval(function () {
            ajaxMap(hashtag);
            ajaxInfos();
        }, 5000);


        $("#hashtag").click(function () {
            if ($("#inputHashtag").val().length > 2) {
                hashtag = $("#inputHashtag").val();
                ajaxMap(hashtag);
            } else {
                hashtag = "code4marseille";
                ajaxMap(hashtag);
            }
        });

        var page = 1;

        /*window.addEventListener('wheel', function (e) {
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
         });*/

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

        /*$("#UpPage").click(function () {
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
         });*/


        //SCRIPT DANIEL ACCUEIL.PHP
        $(document).ready(function () {
            $.fn.delay = function (time, callback) {
                jQuery.fx.step.delay = function () {};
                return this.animate({
                    delay: 1
                }, time, callback);
            }

            $.getJSON('html/inc/accueil.json', function (data) {
                $.each(data, function (index, d) {
                    $('#lieux').delay(5000, function () {

                        $('#lieux').html(d.hashtag);
                        $('article').css('background-image', 'url(' + d
                                .image + ')');

                        var alternate = anime({
                            targets: '#alternate .el',
                            translateX: -950,
                            direction: 'alternate'
                        });

                    });
                });
            });

        });

        var urlApiAjax = 'https://myprovence.code4marseille.fr/api/instas?itemsPerPage=24';

        var appelAjax = function (urlApiAjax, callbackJson)
        {
            // https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch
            fetch(urlApiAjax)
                    .then(function (data) {
                        // ON VEUT RECEVOIR UN OBJET JAVASCRIPT
                        return data.json();
                    })
                    .then(callbackJson)
        }

// URL API AJAX
        var ajouterImage = function (objetJS)
        {
            // CA Y'EST J'AI UN OBJET JS AVEC TOUTES INFOS PLANQUEES DEDANS...
            // IL FAUT ALLER RECUPERER LES INFOS QUI NOUS INTERESSENT
            var tableauInfo = objetJS["hydra:member"];
            // objet.propriete OU objet["propriete"]
            // BOUCLE POUR PARCOURIR LES INFOS UNE PAR UNE
            for (var index = 0; index < tableauInfo.length; index++) {
                var infoCourante = tableauInfo[index];
                //onsole.log(infoCourante);
                var link = infoCourante.link;
                var thumbnail = infoCourante.thumbnail;
                var lowResolution = infoCourante.lowResolution;
                var standardResolution = infoCourante.standardResolution;
                if (link) {
                    var baliseUl = document.querySelector("div.liste");
                    // DOM Document Object Model
                    // AJOUTER UNE BALISE li
                    var codeHtmlLi = '<a href="' + link + '"><div class="listeInfo img-thumbnail" style="background-image:url(' + standardResolution + ');background-size:cover;background-position:center center";></div></a>';
                    // AJOUTER NOTRE CODE POUR LA BALISE li DANS LA BALISE ul
                    //baliseUl.innerHTML += codeHtmlLi;
                    baliseUl.innerHTML += codeHtmlLi;
                }
                animWall();
            }

        }
        appelAjax(urlApiAjax, ajouterImage);

        // ANIMATIONS DES PHOTOS DU WALLOFPICTURE

        function animWall() {
            let bars = document.querySelectorAll('.listeInfo')
            const NUM_ELEMENTS = bars.length
            const BAR_ANIM_DURATION = 2.65

            bars.forEach((bar, index) => {


                // Set 'animation-duration'
                bar.style.animationDuration = `${BAR_ANIM_DURATION}s`

                // Calculate Staggered Delay
                let barDelay = index * (BAR_ANIM_DURATION / NUM_ELEMENTS) * 2

                // Set Staggered Delay
                bar.style.animationDelay = `${barDelay}s`

                bar.classList.add("animWall");
            })
        }






    </script>
</html>
