
<style>
div.liste {
    display:block;
    height: auto;
    padding-bottom:100vw;
}
div.listeInfo {
    display:inline-block;
}

</style>

<div class="row">
    <div class="liste">
        <!-- ICI ON VA CREER UNE BALISE div PAR INFO RECUPERE -->
    </div>
</div>
<script>
var appelAjax = function(urlApiAjax, callbackJson)
{
    // https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch
    fetch(urlApiAjax)
    .then(function(data){
        // DEBUG
        //console.log(data);
        // ON VEUT RECEVOIR UN OBJET JAVASCRIPT
        return data.json();
    })
    .then(callbackJson)
}

// URL API AJAX
var urlApiAjax = 'https://myprovence.code4marseille.fr/api/instas?itemsPerPage=24';
var ajouterImage = function(objetJS)
{
    //console.log(objetJS);
    // CA Y'EST J'AI UN OBJET JS AVEC TOUTES INFOS PLANQUEES DEDANS...
    // IL FAUT ALLER RECUPERER LES INFOS QUI NOUS INTERESSENT
    var tableauInfo = objetJS["hydra:member"];
    // objet.propriete OU objet["propriete"]
    // BOUCLE POUR PARCOURIR LES INFOS UNE PAR UNE
    for(var index=0; index < tableauInfo.length; index++) {
        var infoCourante = tableauInfo[index];
        //console.log(infoCourante);
        var link = infoCourante.link;
        var thumbnail = infoCourante.thumbnail;
        var lowResolution = infoCourante.lowResolution;
        var standardResolution = infoCourante.standardResolution;
        if (link) {
            var baliseUl = document.querySelector("div.liste");
            // DOM Document Object Model
            // AJOUTER UNE BALISE li
            var codeHtmlLi =      '<div class="listeInfo">'
                                    + '<a href="' + link + '">'
                                    + '<img class="img-fluid" src="' + standardResolution + '">'
                                    + '</a>'
                                + '</div>';
            // AJOUTER NOTRE CODE POUR LA BALISE li DANS LA BALISE ul
            baliseUl.innerHTML += codeHtmlLi;
        }
    }

}


appelAjax(urlApiAjax, ajouterImage);

</script>
