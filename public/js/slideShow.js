
var slideIndex = 0;
var testiIndex = 0;
showSlides();
showTestimonialSlides()

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 10000); // Change image every 10 seconds
}

function showTestimonialSlides() {
    let i;
    let slides = document.getElementsByClassName("testimonialSlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    testiIndex++;
    if (testiIndex > slides.length) {testiIndex = 1}
    slides[testiIndex-1].style.display = "block";
    setTimeout(showTestimonialSlides, 4000); // Change image every 4 seconds
}