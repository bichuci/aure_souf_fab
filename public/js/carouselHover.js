// On affiche le contenu de la card
window.addEventListener("DOMContentLoaded", function (){
    var timer;
    $(".card").mouseenter(function () {
        var that = this
        timer = setTimeout(function(){
            $(that).children('.panel-collapse').fadeIn();

        }, 500);

    });
    $(".card").mouseleave(function(){
        clearTimeout(timer);
        $(this).children('.panel-collapse').fadeOut();
    });
});


// On ajoute l'overflow visible pour afficher le contenu des cards
$(".card").mouseenter(function () {
    $('.list').addClass('visibleCard');
});


$(".card").mouseleave(function(){
    $('.list').removeClass('visibleCard');
});