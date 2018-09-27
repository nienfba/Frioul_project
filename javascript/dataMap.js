// Import all category name in the dropdown-menu
var urlApiCat = 'https://myprovence.code4marseille.fr/api/categories';
fetch(urlApiCat)
  .then(function(data) {
    //console.log(data);
    return data.json();
  })
  .then(function(x) {
    //console.log(x);
    var arrayCat = x["hydra:member"];
    for (var i = 0; i < arrayCat.length; i++) {
      var listeCat = arrayCat[i];
      //console.log(listeCat);
      var categoryName = listeCat.name;

      var baliseUl = document.querySelector("ul.dropdown-menu");
      var codeHtmlLi =
        '<li class="text-center">' +
        '<p><a href="#" onclick=redirection(); class="' + categoryName + '">' + categoryName + '</a></p>' +
        '</li>';
      baliseUl.innerHTML += codeHtmlLi;
    }
  });

function redirection() {
  alert('Poop');
  //Import the obeject of infos array
  var urlApiAjax = 'https://myprovence.code4marseille.fr/api/infos';
  fetch(urlApiAjax)
    .then(function(data) {
      //console.log(data);
      return data.json();
    })
    .then(function(objetJS) {
      var tableauInfo = objetJS["hydra:member"];
      for (var i = 0; i < tableauInfo.length; i++) {
        var ByCat = tableauInfo[i];
        //console.log(ByCat);

        var title = ByCat.title;
        var latitude = ByCat.latitude;
        var longitude = ByCat.longitude;
        var description = ByCat.description;
        var media = ByCat.media;
        var memberName = ByCat.member.username;
        for (var i = 0; i < ByCat.categories.length; i++) {
          var arrayCat = ByCat.categories[i];
          var categoryName = arrayCat.name;
          var categoryDesc = arrayCat.description;
        }
      }
    })
}