'use strict';

var slider = document.querySelector('.slider');
var icon = document.querySelector('.btn-icons');
var fontAwesome = document.querySelector('.btn-icons .fas');

function toggle() {
	slider.classList.toggle('slider--open');

	// FontAwesome
	fontAwesome.classList.toggle('fa-expand');
	fontAwesome.classList.toggle('fa-times');
}

icon.addEventListener('click', toggle);
window.addEventListener('keydown', function (e) {
	if (e.key == 'Escape' || e.key == 'Esc' || e.keyCode == 27) {
		e.preventDefault();
		toggle();
	}
}, true);