function introPadding() {
	let body = document.getElementsByTagName('body');
	let intro = document.getElementsByClassName('intro');
	let textBlock = document.getElementsByClassName('home__bar-text');
	let homeBar = document.getElementsByClassName('home__bar');

	function createPadding(calc) {
		let padding = calc;
		padding = padding.toString() + "px";
		intro[0].style.paddingTop = padding;
	}

	if( body[0].clientWidth < 500 ) {
		createPadding( textBlock[0].clientHeight + textBlock[1].clientHeight + 57 );
	}
	else {
		createPadding( (homeBar.clientHeight / 2) + 88 );
	}
} introPadding();
