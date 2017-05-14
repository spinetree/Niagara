
var $j = jQuery.noConflict();

$j(document).ready(function() {
    
     if (screen.width < 1024){
            console.log('firing');
            $j('.slider').slick({
                dots: true,
                autoplay:true,
                autoplaySpeed:5000,
                arrows:false
            });
        }

     else {
        console.log('else');
        $j('.slider').slick({
            dots: true,
            autoplay:true,
            autoplaySpeed:5000,
            prevArrow:'<button type="button" class="slick-prev"><</button>',
            nextArrow:'<button type="button" class="slick-next">></button>',
            pauseOnHover:true
        });
     };       


    $j(window).scroll(function(){

		if ($j(this).scrollTop() > 400) 
			{ 
				$j('.site-header').fadeIn(500);
			};
	});


  });//end doc.ready




