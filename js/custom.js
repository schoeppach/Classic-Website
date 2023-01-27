

/* Smooth Scroll */
$(document).ready(function() {
    $('a.smooth').on('click',function(event) {
        /* Ist im href Attribut ein Hash vorhanden */
        if( this.hash != "" ) {
            /* Standard-Funktion des Links deaktivieren */
            event.preventDefault();
            /* Variable mit dem Inhalt des href Attributes angeklickten Links */
            var hashlink = this.hash;
            /* Animation hinzufügen */
            $("html, body").animate({
                scrollTop: $(hashlink).offset().top
            }, 600, function() {
                window.location.hash = hashlink;
            });
                
        }
    })
});

/* AOS */
AOS.init({
    offset: 300,
    duration: 800,
    disable: 'mobile',
    easing: 'ease-out'
});
