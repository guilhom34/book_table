// Déclaration de la variable globale définissant l'état courant
var g_bMenuFerme;

console.log("ok");


$(document).ready( function() {
    // Initialisation de l'état courant
    g_bMenuFerme = true;
});

$("#ham-menu").click( function() {
    // Test de l'état courant
    if(g_bMenuFerme)
    { //-> LE menu est fermé
        // Suppression de la classe "Menu fermé"
        $("nav").removeClass("menu-traiteur");

        // Ajout de la classe "Menu ouvert"
        $("nav").addClass("menu-ouvert");
         
        // Mise à jour de l'état courant : "ouvert"
        g_bMenuFerme = false;
    }
    else
    { //-> Le menu est ouvert
        // Suppression de la classe "Menu ouvert"
        $("nav").removeClass("menu-ouvert");
        
        // Ajout de la classe "Menu fermé"
        $("nav").addClass("menu-traiteur");

        // Mise à jour de l'état courant : "fermé"
        g_bMenuFerme = true;
    }
});


function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});
          
    //------date reservation----

   $( function() {
    $( "#datepicker" ).datepicker();

  } );

    $.datepicker.regional['fr'] = {

      closeText: 'Fermer',

      prevText: 'Précédent',

      nextText: 'Suivant',

      currentText: 'Aujourd\'hui',

      monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'],

      monthNamesShort: ['Janv.','Févr.','Mars','Avril','Mai','Juin','Juil.','Août','Sept.','Oct.','Nov.','Déc.'],

      dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],

      dayNamesShort: ['Dim.','Lun.','Mar.','Mer.','Jeu.','Ven.','Sam.'],

      dayNamesMin: ['D','L','M','M','J','V','S'],

      weekHeader: 'Sem.',

      dateFormat: 'dd/mm/yy',

      firstDay: 1,

      isRTL: false,

      showMonthAfterYear: false,

      yearSuffix: ''};

    $.datepicker.setDefaults($.datepicker.regional['fr']);

    // ----Select Menu---
       $(function(){ $( "#number, #time" )
            .selectmenu()
            .selectmenu( "menuWidget" )
            .addClass( "overflow" )});







