// start import swiper js
import Swiper from "swiper";
import { Pagination, Autoplay, Parallax } from "swiper/modules";

// Import Swiper styles
import "swiper/css";
import "swiper/css/pagination";

// start banner slider
new Swiper(".banner-slider", {
    loop: true,
    loop: true,
    parallax: true,
    speed: 1000,
    autoplay: {
        delay: 3000,
    },
    modules: [Parallax, Pagination, Autoplay],
    pagination: {
        el: ".banner-slider .swiper-pagination",
        clickable: true,
    },
});

// menu button
const menuToggle = document.querySelector(".menu-button");
const menu = document.querySelector(".menu");
menuToggle.addEventListener("click", (event) => {
    event.stopPropagation(); // Prevent click from bubbling up to the document
    menu.classList.toggle("active");
});
document.addEventListener("click", (event) => {
    const isClickInsideMenu = menu.contains(event.target);
    const isClickInsideToggle = menuToggle.contains(event.target);

    if (!isClickInsideMenu && !isClickInsideToggle) {
        menu.classList.remove("active");
    }
});

// circle-text
// import CircleType from "circletype";
// document.querySelectorAll(".circle-text").forEach((element) => {
//     new CircleType(element);
// });

//
const circles = document.querySelectorAll(".circle-solution");
circles.forEach((circle) => {
    const radius = circle.offsetWidth / 2;
    const textRadius = radius;
    const gap = 0;

    const spans = circle.querySelectorAll("span");

    spans.forEach((e, index) => {
        const angle = (index / spans.length) * 2 * Math.PI - Math.PI / 2;

        let x = radius + textRadius * 1.2 * Math.cos(angle);
        let y = radius + textRadius * Math.sin(angle);

        if (x > radius) {
            x += gap;
            e.style.textAlign = "left";
        } else if (x < radius) {
            x -= gap;
            e.style.textAlign = "right";
        } else {
            e.style.textAlign = "center";
        }

        e.style.left = `${x}px`;
        e.style.top = `${y}px`;
        e.style.transform = `translate(-50%, -50%)`;
    });
});

document.querySelectorAll(".product-item").forEach((item) => {
    item.addEventListener("click", (event) => {
        const parent = item.closest(".product-group");
        const productItem = item.querySelector(".product-details-item");
        const viweItem = parent.querySelector(".view-product");

        if (viweItem.innerHTML != "") {
            viweItem.innerHTML = "";
            return;
        }

        viweItem.innerHTML = productItem.innerHTML;
    });
});

document.addEventListener("click", (event) => {
    if (event.target.classList.contains("close-view-product")) {
        const item = event.target;

        const parent = item.closest(".product-group");
        if (parent) {
            const viweItem = parent.querySelector(".view-product");
            if (viweItem) {
                viweItem.innerHTML = "";
            }
        }
    }
});
