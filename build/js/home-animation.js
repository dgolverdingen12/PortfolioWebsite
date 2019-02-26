"use strict";

var canvas = document.getElementById("canvas");
var context = canvas.getContext("2d");
var heading = document.querySelector('.home__title');
var blokje = document.querySelector('.blokje');
var container = document.querySelector('.home');
var pixelBlokje = document.querySelector('.pixel-blokje');

var headingRect = heading.getBoundingClientRect();

if (heading) {
	blockSize();
}

canvas.width = container.clientWidth;
canvas.height = container.clientHeight;
canvas.style.opacity = 0;

window.addEventListener('resize', function () {
	headingRect = heading.getBoundingClientRect();
	canvas.width = container.clientWidth;
	canvas.height = container.clientHeight;

	blockSize();
	drawLine();
	drawDash();
});

document.addEventListener("DOMContentLoaded", function () {

	setTimeout(function () {
		drawLine();
		drawDash();
		canvas.style.opacity = 1;
	}, 1000);
});

container.addEventListener('mousemove', function (evt) {
	if (evt.clientX > headingRect.left && evt.clientX < headingRect.right) {
		blokje.style.top = evt.clientY - 5 + 'px';
		blokje.style.left = headingRect.left + 'px';

		var pixelBlokje = evt.clientY + 'px';
		document.querySelector('.pixel-blokje').innerHTML = pixelBlokje;
	}
}, true);

function blockSize() {
	var headingsWidth = heading.getBoundingClientRect().width;
	blokje.style.width = headingsWidth + 'px';
}

function drawLine() {
	context.beginPath();

	// First vertical line
	context.moveTo(headingRect.left, headingRect.top);
	context.lineTo(headingRect.left, headingRect.bottom);

	// Second vertical line
	context.moveTo(headingRect.right, headingRect.top);
	context.lineTo(headingRect.right, headingRect.bottom);

	// First horizontal line
	context.moveTo(headingRect.left, headingRect.top);
	context.lineTo(headingRect.right, headingRect.top);

	// Second horizontal line
	context.moveTo(headingRect.left, headingRect.bottom);
	context.lineTo(headingRect.right, headingRect.bottom);

	context.lineWidth = 1;

	context.strokeStyle = '#fff';
	context.stroke();
};

function drawDash() {
	context.beginPath();
	context.setLineDash([1, 4]);

	// First horizontal line
	context.moveTo(0, headingRect.top);
	context.lineTo(container.clientWidth, headingRect.top);

	// Second horizontal line
	context.moveTo(0, headingRect.bottom);
	context.lineTo(container.clientWidth, headingRect.bottom);

	// First vertical line
	context.moveTo(headingRect.left, 0);
	context.lineTo(headingRect.left, container.clientHeight);

	// Second vertical line
	context.moveTo(headingRect.right, 0);
	context.lineTo(headingRect.right, container.clientHeight);

	context.stroke();
};