(function($){

    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $('#head__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('width--sidebar');
    });

    /* Je veux pouvoir masquer le menu si on clique sur le cache */
    $('#site-cache').click(function(e){
        $('body').removeClass('width--sidebar');
    });
    
})(jQuery);