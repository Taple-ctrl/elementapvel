// Печать текста главной страницы
function printText( el ){

	let letterTimeout = 150

	let text = el.innerHTML
	let i = 1

	let print__fn = function(){

			if( i <= text.length ){
				el.innerHTML = text.substr( 0, i );
				setTimeout( arguments.callee, letterTimeout );
			}

			i++;
		}

	print__fn()
};

let el = document.getElementById( 'my-text-tittle' )
printText( el );


// Плавный якорь
const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}

// Кнопка наверх
(function() {
  'use strict';

  function trackScroll() {
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
      goTopBtn.classList.add('back_to_top-show');
    }
    if (scrolled < coords) {
      goTopBtn.classList.remove('back_to_top-show');
    }
  }

  function backToTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -20);
      setTimeout(backToTop, 0);
    }
  }

  var goTopBtn = document.querySelector('.back_to_top');

  window.addEventListener('scroll', trackScroll);
  goTopBtn.addEventListener('click', backToTop);
})();

document.addEventListener('keydown', function(event){
    if (event.shiftKey && ['F','f'].includes(event.key) ) {
        window.location.href = 'login.php';
    }
});