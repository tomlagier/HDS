jQuery(document).ready(function($){
   $('#top #s').prop( {'type' : 'text', 'placeholder' : 'Search'});
   $('#top #searchsubmit').attr('value', 'L');
      
   $('body').bind('wc_fragments_loaded', function () {
            if ($('#top li.cart li.cart').length){
                var contents = $('#top li.cart li.cart').contents();
                $('#top li.cart li.cart').replaceWith(contents);
            }
    });
    
    $('body').bind('wc_fragments_refreshed', function () {
            if ($('#top li.cart li.cart').length){
                var contents = $('#top li.cart li.cart').contents();
                $('#top li.cart li.cart').replaceWith(contents);
            }
    });
    
    $('#bubbles').sprite({
        fps: 3,
        no_of_frames: 6
    }).active();
    
    $('#main-nav li a').hover(function(){
        startBubbleAnimation($(this));
    }, function(){
        stopBubbleAnimation($(this));
    });
});

function startBubbleAnimation(context){
    setBubblePosition(context);
    jQuery('#bubbles').show();
}

function stopBubbleAnimation(){
    jQuery('#bubbles').hide();
}

function setBubblePosition(context){
    var nav_name = context.context.innerText;
    switch(nav_name)
    {   
        case "SOAPS":
            jQuery('#bubbles').css('left', '44px');
            break;
        case "OILS":
            jQuery('#bubbles').css('left', '197px');
            break;
        case "SPRAYS":
            jQuery('#bubbles').css('left', '352px');
            break;
        case "BUTTER":
            jQuery('#bubbles').css('left', '505px');
            break;
        case "PERFUMES":
            jQuery('#bubbles').css('left', '660px');
            break;
        case "BATH":
            jQuery('#bubbles').css('left', '815px');
            break;
        case "GIFTS":
            jQuery('#bubbles').css('left', '970px');
            break;
        default:
            console.log("Error");
            break;
    }
}