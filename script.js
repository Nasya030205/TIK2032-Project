// galery.js
document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".gallery-img");
    const lightbox = document.querySelector(".lightbox");
    const lightboxImg = document.querySelector(".lightbox-img");
    const closeBtn = document.querySelector(".close");

    images.forEach(img => {
        img.addEventListener("click", function() {
            const src = this.getAttribute("src");
            lightboxImg.setAttribute("src", src);
            lightbox.style.display = "block";
        });
    });

    closeBtn.addEventListener("click", function() {
        lightbox.style.display = "none";
    });
});
