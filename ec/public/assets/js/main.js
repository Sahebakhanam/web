document.querySelector(".navTrigger").addEventListener("click", function () {
    this.classList.toggle("active");
    console.log("Clicked menu");

    var mainListDiv = document.getElementById("mainListDiv");
    mainListDiv.classList.toggle("show_list");

    // Check if the element is not already visible
    if (
        mainListDiv.style.display === "none" ||
        mainListDiv.style.display === ""
    ) {
        mainListDiv.style.display = "block";
        // Add fade-in effect
        mainListDiv.style.opacity = 0;
        var fadeEffect = setInterval(function () {
            if (!mainListDiv.style.opacity) {
                mainListDiv.style.opacity = 1;
            }
            if (mainListDiv.style.opacity < 1) {
                mainListDiv.style.opacity =
                    parseFloat(mainListDiv.style.opacity) + 0.1;
            } else {
                clearInterval(fadeEffect);
            }
        }, 50);
    }
});
// testimonial
document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".testimonial-slide");
    let indicators = document.querySelectorAll(".testimonial-indicator");
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
        });
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle("active", i === index);
        });
        currentIndex = index;
    }

    function nextSlide() {
        showSlide((currentIndex + 1) % slides.length);
    }

    function prevSlide() {
        showSlide((currentIndex - 1 + slides.length) % slides.length);
    }

    document
        .querySelector(".testimonial-control-next")
        .addEventListener("click", nextSlide);
    document
        .querySelector(".testimonial-control-prev")
        .addEventListener("click", prevSlide);

    indicators.forEach((indicator, i) => {
        indicator.addEventListener("click", () => showSlide(i));
    });

    // Auto slide every 5 seconds
    setInterval(nextSlide, 5000);
});
