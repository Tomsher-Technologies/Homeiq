// import './bootstrap';

import Alpine from 'alpinejs';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import $ from 'jquery';

window.$ = window.jQuery = $;

window.Alpine = Alpine;
Alpine.start();





document.addEventListener("DOMContentLoaded", function () {
    // ✅ Hero Swiper with Lazy Loading & Fixed Navigation
    new Swiper(".hero-swiper", {
        loop: true,
        autoplay: {
            delay: 3000, // Adjust slide change speed
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        effect: "slide",
        lazy: {
            loadPrevNext: true, // Preload next and previous images
            loadPrevNextAmount: 2,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    });
});




// ✅ Categories Swiper
new Swiper("#category-swiper", {
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    slidesPerView: 2,
    spaceBetween: 20,
    breakpoints: {
        640: { slidesPerView: 3 }, // Tablets
        1024: { slidesPerView: 4 }, // Laptops
        1280: { slidesPerView: 6

         }  // Large Screens
    },
    // pagination: { 
    //     el: "#category-swiper-pagination", 
    //     clickable: true 
    // }
});




document.addEventListener("DOMContentLoaded", function() {
    // Initialize Swiper
    new Swiper(".product-images-swiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next1",
            prevEl: ".swiper-button-prev1",
        },
    });


});


document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.testimonials-swiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        },
    });
});



// Cart

document.addEventListener("DOMContentLoaded", function () {
    const cartBtn = document.getElementById("cart-btn");
    const cartDrawer = document.getElementById("cart-drawer");
    const closeCart = document.getElementById("close-cart");

    // Open Cart Drawer
    cartBtn.addEventListener("click", () => {
        cartDrawer.classList.remove("translate-x-full");
        cartDrawer.classList.add("translate-x-0");
    });

    // Close Cart Drawer
    closeCart.addEventListener("click", () => {
        cartDrawer.classList.remove("translate-x-0");
        cartDrawer.classList.add("translate-x-full");
    });
});






import TomSelect from 'tom-select';
import 'tom-select/dist/css/tom-select.css';

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".search-dropdown").forEach((el) => {
        new TomSelect(el, {
            maxItems: 1,
            persist: false,
            create: false,
            placeholder: "Search...",
        });
    });
});

function toggleFAQ(id, btn) {
    const faq = document.getElementById(id);
    const arrow = btn.querySelector('.arrow');
    
    if (faq.classList.contains('hidden')) {
        faq.classList.remove('hidden');
        faq.style.maxHeight = faq.scrollHeight + 'px';
        arrow.textContent = '-';
    } else {
        faq.classList.add('hidden');
        faq.style.maxHeight = '0px';
        arrow.textContent = '+';
    }
}

