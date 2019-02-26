'use strict';

// get things
var homeBarButtons = document.querySelectorAll('.home__bar-item');
var homeBarText = document.getElementsByClassName('home__bar-text');

// listend  to things
toggleBar();

window.addEventListener("resize", function () {
	displayText();
	toggleBar();
}, false);

function toggleBar() {
	if (window.innerWidth <= 700) {
		homeBarButtons.forEach(function (currentElement) {
			currentElement.addEventListener('click', function () {
				removeActiveClasses();
				addClass(currentElement, 'home__bar-item--active');
				displayText();
			});
		});
	} else {
		resetText();
	}
}

// Do things
function removeActiveClasses() {
	homeBarButtons.forEach(function (currentElement) {
		currentElement.classList.remove('home__bar-item--active');
	});
}

function resetText() {
	for (var i = 0; i < homeBarButtons.length; i++) {
		homeBarText[i].style.display = "";
	}
	introPadding();
}

function displayText() {
	for (var i = 0; i < homeBarButtons.length; i++) {
		if (homeBarButtons[i].classList.contains('home__bar-item--active')) {
			homeBarText[i].style.display = "block";
		} else {
			homeBarText[i].style.display = "none";
		}
	}
	introPadding();
}

function addClass(element, className) {
	element.classList.add(className);
}