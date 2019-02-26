'use strict';

// Hamburger menu
var header = document.getElementsByClassName('header');
var hamburger = document.getElementsByClassName('header-hamburger');

function toggle() {
	header[0].classList.toggle('header--active');
}

hamburger[0].addEventListener('click', toggle);