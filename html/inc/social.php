
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
ul.listeInfo img {
    object-fit:cover;
    width:8vw;
    height:8vw;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="listeInfo row">
            <!-- ICI ON VA CREER UNE BALISE li PAR INFO RECUPERE -->
            </ul>
        </div>
    </div>
</div>
<script>
// URL API AJAX
var urlApiAjax = 'https://htdocs-symfony1.c9users.io/myprovence/public/api/instas?itemsPerPage=24';
// https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch
fetch(urlApiAjax)
.then(function(data){
    // DEBUG
    console.log(data);
    // ON VEUT RECEVOIR UN OBJET JAVASCRIPT
    return data.json();
})
.then(function(objetJS){
    console.log(objetJS);
    // CA Y'EST J'AI UN OBJET JS AVEC TOUTES INFOS PLANQUEES DEDANS...
    // IL FAUT ALLER RECUPERER LES INFOS QUI NOUS INTERESSENT
    var tableauInfo = objetJS["hydra:member"]; 
    // objet.propriete OU objet["propriete"]
    // BOUCLE POUR PARCOURIR LES INFOS UNE PAR UNE
    for(var index=0; index < tableauInfo.length; index++) {
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
            var codeHtmlLi =      '<li class="col-sm-2">'
                                    + '<a href="' + link + '">'
                                    + '<img class="img-fluid" src="' + standardResolution + '">'
                                    + '</a>'
                                + '</li>';
            // AJOUTER NOTRE CODE POUR LA BALISE li DANS LA BALISE ul
            baliseUl.innerHTML += codeHtmlLi;
        }
    }
    
})    
</script>