$("#accueil").load("./index.html");
$("#characters").load("./characters.html");
$("#game").load("./game.html");
$("#rules").load("./rules.html");
$("#news").load("./news.html");


$('#character-info-edit').on('click', function() {
    var editable = element.contentEditable
    element.contentEditable = "true"
});