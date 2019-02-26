document.querySelector('#menu-item-30 > a').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('section.portfolio').scrollIntoView({behavior:'smooth'});
});


// Scroll top
window.addEventListener('scroll', function () {
	document.body.classList[
	  window.scrollY > 480 ? 'add': 'remove'
	]('scrolled');
  });
