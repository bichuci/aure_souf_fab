$.fn.infiniteCarousel = function(config){
    config = $.extend({
        itemsPerMove : 1,
        duration : 1000,
    },config);

    var viewportEl = this.find('.viewport'), listEl = viewportEl.find('.list');
    var first = listEl.children(":first"), last = listEl.children(":last");

    var distance, prevProp, nextProp;

    distance = Math.max(first.outerWidth(true),last.outerWidth(true)) * config.itemsPerMove;
    prevProp = { 'scrollLeft' : "-=" + distance };
    nextProp = { 'scrollLeft' : '+=' + distance };

    function move(config) {
        if (config.dir === 'next') {
            viewportEl.stop().animate(nextProp,{
                duration : config.duration,
                complete : function() {
                    config.vertical ? viewportEl.scrollTop(0) : viewportEl.scrollLeft(0);
                    repeatRun(function(){
                        listEl.children(":last").after(listEl.children(":first"));
                    },config.itemsPerMove);
                }
            });
        }

        if (config.dir === 'pre') {
            for(var i = 0; i < config.itemsPerMove; i++){
                listEl.prepend(listEl.children(":last"));
            }
            viewportEl[config.vertical ? 'scrollTop' : 'scrollLeft'](distance)
                .stop().animate(prevProp, {
                duration : config.duration
            });
        }
    }

    function repeatRun(func,times){
        for(var i = 0; i < times; i++){
            func();
        }
    }

    this.find('.pre').click(function() {
        move($.extend(config,{
            dir: "pre"
        }));
    });

    this.find('.next').click(function() {
        move($.extend(config,{
            dir: "next"
        }));
    });

    return this;
};


// On affiche le contenu de la card
window.addEventListener("DOMContentLoaded", function (){
    var timer;
    $(".card-carousel").mouseenter(function () {
        var that = this
        timer = setTimeout(function(){
            $(that).children('.panel-collapse').fadeIn();

        }, 500);

    });
    $(".card-carousel").mouseleave(function(){
        clearTimeout(timer);
        $(this).children('.panel-collapse').fadeOut();
    });
});


// On ajoute l'overflow visible pour afficher le contenu des cards
$(".card-carousel").mouseenter(function () {
    $('.list').addClass('visibleCard');
});


$(".card-carousel").mouseleave(function(){
    $('.list').removeClass('visibleCard');
});