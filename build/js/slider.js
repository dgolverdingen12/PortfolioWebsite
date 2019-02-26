'use strict';

// Get things
var sliders = document.querySelectorAll('.slider');
var isRunning = true;
var current = 0;
var timer;

if (sliders) {
    sliders.forEach(function (sliderItem, currentIndex) {

        var slides = sliderItem.querySelectorAll('.portfolio__item-image');
        var progressItem = sliderItem.querySelectorAll('.portfolio__progress-item');
        var prevSlide = document.querySelector('.prev');
        var nextSlide = document.querySelector('.next');

        if (prevSlide !== null && nextSlide !== null) {
            prevSlide.addEventListener('click', function () {
                if (current === 0) {
                    current = slides.length - 1;
                } else {
                    current--;
                }

                slideImages();
            }, false);

            nextSlide.addEventListener('click', function () {
                if (current === slides.length - 1) {
                    current = 0;
                } else {
                    current++;
                }

                slideImages();
            }, false);
        }

        sliderItem.addEventListener('mouseover', function () {
            isRunning = false;
        }, false);

        sliderItem.addEventListener('mouseout', function () {
            isRunning = true;
        }, false);

        if (slides.length < 1) {
            return;
        }
        slides[0].classList.add('active');
        progressItem[0].classList.add('active');

        function slideImages() {
            removeActive();
            slides[current].classList.add('active');
            progressItem[current].classList.add('active');
        }

        function removeActive() {
            slides.forEach(function (slide) {
                slide.classList.remove('active');
            });

            progressItem.forEach(function (item) {
                item.classList.remove('active');
            });
        }

        function getCurrent() {
            return current >= slides.length - 1 ? 0 : ++current;
        }

        timer = setInterval(function () {
            if (isRunning) {
                current = getCurrent();
                slideImages();
            }
        }, 3500 * (currentIndex + 0.5));

        window.onload = timer;
    });
}