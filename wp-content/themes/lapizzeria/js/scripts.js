var map;
function initMap() {

    var latLag = {
        lat: parseFloat(options.latitude),
        lng: parseFloat(options.longitude)
    };
  map = new google.maps.Map(document.getElementById('map'), {
    center: latLag,
    zoom: parseInt(options.zoom)
  });

  var maker = new google.maps.Marker({
      position: latLag,
      map: map,
      title: 'La Pizzeria'
  }) 
}


$ = jQuery.noConflict();

$(document).ready(function() {
    $('.mobile-menu a').on('click', function() {
        $('nav.site-nav').toggle('slow');
    });

    var breakpoint =768;
    $(window).resize(function() {
        if($(document).width() >= breakpoint){
            $('nav.site-nav').show();
        }
        else{
            $('nav.site-nav').hide();
        }

    });

});

// Fluidbox Plugin

jQuery('.gallery a').each(function() {
    jQuery(this).attr({'data-fluidbox': ''});

});

if(jQuery('[data-fluidbox]').length > 0 ){
    jQuery('[data-fluidbox]').fluidbox();
}

//Adapt map to height

var map = $('#map');
if(map.length > 0) {
    
        displaymap(0);
    } else{
        displaymap(300);
    }

$(window).resize(function(){
    if(map.length > 0) {
    
        displaymap(0);
    } else{
        displaymap(300);
    }
});

function displaymap(value){
    if(value ==0){
        var locationSection = $('.location-reservation');
        var locationHeight = locationSection.height();
        $('#map').css({'height': locationHeight });

    }else{
        $('#map').css({'height':value });
    }
}