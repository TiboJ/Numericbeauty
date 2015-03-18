$(document).ready(function (){
    
    /*Test Device*/ 
    var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
 
    /*---Taille du content*/
    if (!isMobile.any()){
    $(".content").css({ 
        "width": +$( window ).width(),
        "height":+ $( window ).height() });
    $(window).resize(function(){
        $(".content").css({ 
            "width": +$( window ).width(),
            "height":+ $( window ).height() });       
    });
    }

    $("video").coverVid(1920, 1080);

    /*---Menu Drag&Drop + animation*/  

    $(function() {
        $( "#drag" ).draggable({ cursor: "move"});
    });

    $('header').mouseenter(function(){
        $(this).stop().animate({'opacity':'0.7','-ms-filter':'"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)"'},100)    
    })
    $('header').mouseleave(function(){
        $(this).stop().animate({'opacity':'0.2','-ms-filter':'"progid:DXImageTransform.Microsoft.Alpha(Opacity=20)"'},100)
    });

    /*---anim frame3*/

    $('#ct3 a.arrow-l').click(function(){        
        $( "#ct3_1" ).toggle("slide");
        $( "#ct3_2" ).toggle("top");
    });   

    $('#ct3 a.arrow-r').click(function(){
        $( "#ct3_1" ).toggle("slide");
        $( "#ct3_2" ).toggle("top");
    });

    /*---Smooth scroll*/
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });

/*Nos travaux*/
  $(".confidence li a").hover(function() {
        $(this).children(".contener").stop().animate({
            opacity: 0
        }, "fast")
    }, function() {
        $(this).children(".contener").stop().animate({
            opacity: 0.8
        }, "slow")
    });
    
/*Animation formulaire contact*/

$("#ct4 form input,#ct4 form textarea").focus(function(){
    $(this).parent().addClass("onfocus");   
})
    $("#ct4 form input,#ct4 form textarea").blur(function(){
    $(this).parent().removeClass("onfocus");   
});
     
    
}); 

