'use strict';

function introPadding() {
	var body = document.getElementsByTagName('body');
	var intro = document.getElementsByClassName('intro');
	var textBlock = document.getElementsByClassName('home__bar-text');
	var homeBar = document.getElementsByClassName('home__bar');

	function createPadding(calc) {
		var padding = calc;
		padding = padding.toString() + "px";
		intro[0].style.paddingTop = padding;
	}

	if (body[0].clientWidth < 500) {
		createPadding(textBlock[0].clientHeight + textBlock[1].clientHeight + 57);
	} else {
		createPadding(homeBar.clientHeight / 2 + 88);
	}
}introPadding();