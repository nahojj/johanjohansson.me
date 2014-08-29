$('#menu-primary').addClass('nav navbar-nav');

 var images = ['1.jpg', '2.png'];
 $('#cover').css({'background-image': 'url(http://localhost:8888/johanjohansson/wp-content/themes/johanjohansson/img/' + images[Math.floor(Math.random() * images.length)] + ')'});

 function changetagline(){
 	random = "q" + Math.ceil(Math.random() * quoteCount);
 	random = eval(random);

 	$(".tagline").fadeTo(500,0,easing,
 		function() {
 			$(this).html(""+random+"").fadeTo(0,0).fadeTo(500,1)
 		}
 	)}

   	var quotes = $(".quote");
    var quoteIndex = -1;

    function showNextQuote() {

        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(2000)
            .delay(2000)
            .fadeOut(2000, showNextQuote);

    }

    showNextQuote();

  $(window).scroll(function() {


    if ($(this).scrollTop() < 100)
     {
     	$('.arrow').addClass('hide-arrow');
     }
    else
     {
		$('.arrow').fadeIn();
		$('.arrow').removeClass('hide-arrow');
     }
 });



		$( "button" ).click(function() {
			$(this).toggleClass('active');
		});










