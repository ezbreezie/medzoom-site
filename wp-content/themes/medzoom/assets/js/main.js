// Mobile Menu

var theToggle = document.getElementById('mobile-toggle');

function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}

function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}

function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   if($('#page').hasClass('on')){
        $('#page').removeClass('on');
   }else{
        $('#page').addClass('on');
   }
   return false;
}

$(document).ready(function(){

    $("#phone").delay(1000).stop().fadeTo('slow',1);

    $("#mobile-toggle").click(function(){
        $("#mobile-nav").fadeToggle();
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() >= 2) {
            $("#mobile-nav:visible").stop().fadeToggle();

            if ($("#mobile-toggle").hasClass("on")) {
              $("#mobile-toggle").removeClass("on");
            }
        };
    });

    $('.grid').masonry({
      itemSelector: '.grid-item',
      //columnWidth: 200
    });

}); 
