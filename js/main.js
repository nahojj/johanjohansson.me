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







function showQuotes() {

    var quotes = [];

    quotes[0] = "Snuff & Coffee is Swedish love";
    quotes[1] = "Love = Oxygen";
    quotes[2] = "Beauty = price";
    quotes[3] = "Keep a business diary";

    var quote = quotes[Math.floor(Math.random() * quotes.length)];

    $('.quote').text(quote).fadeToggle(2000);

    setTimeout(showQuotes, 2000);
}

showQuotes();



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










