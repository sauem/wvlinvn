$(document).ready(function () {
    $(".menu-item-wrapper").each(function (idx, el) {
        $(this).click(function (e) {
            if (e.target.matches(".visible-s")) {
                console.log(e.target);
                e.target.classList.toggle("active");
            } else {
                e.target.querySelector(".visible-s").classList.toggle("active");
            }
            $(this).next().slideToggle(200);
        });
    });
});

const headerBar = document.querySelector(".header-bar img");
const headerFixed = document.querySelector(".header-fixed");
headerBar.addEventListener("click", () => {
    headerFixed.classList.add("show");
});

const iconCloseHeaderFixed = document.querySelector(".close-header-fixed");
iconCloseHeaderFixed.addEventListener("click", () => {
    headerFixed.classList.remove("show");
});

const header = document.querySelector("header");
const backToTop = document.querySelector(".back-to-top");
window.addEventListener("scroll", (e) => {
    const srollY = window.pageYOffset;
    const headerHeight = header.offsetHeight;
    if (srollY >= headerHeight) {
        backToTop.classList.add("show");
    } else {
        backToTop.classList.remove("show");
    }
});

const dropdowns = document.querySelectorAll(".faqs-dropdown");

dropdowns.forEach((el) => {
    const button = el.querySelector(".faqs-dropdown-btn");

    button.addEventListener("click", () => {
        // Close all
        [...dropdowns]
            .filter((x) => x != el)
            .forEach((el) => el.classList.remove("is-open"));
        // Toggle one
        el.classList.toggle("is-open");
    });
});

//number animation
function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

const obj1 = document.getElementById("value-1");
const obj2 = document.getElementById("value-2");
const obj3 = document.getElementById("value-3");

//scroll-view-display

function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
            window.addEventListener("scroll", animateValue(obj1, 0, 125, 2000));
            window.addEventListener("scroll", animateValue(obj2, 0, 20, 1000));
            window.addEventListener("scroll", animateValue(obj3, 0, 20, 1000));
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);

function changeLanguage() {
    const languageSelected = document.querySelector(".selected-language");
    const languageItem = document.querySelectorAll(".languages li");
    [...languageItem].forEach((item) =>
        item.addEventListener("click", function () {
            languageSelected.querySelector(".selected-language-text").textContent =
                item.querySelector("span").textContent;
            const srcImg = item.querySelector(".menu-item-flag").getAttribute("src");
            languageSelected
                .querySelector(".menu-item-flag.selected")
                .setAttribute("src", srcImg);
        })
    );
}
changeLanguage();

function changeLanguage_mobile() {
    var x = document.getElementById("language");
    $(".flag").toggleClass("minus");
    if (x.innerHTML === "EN") {
        x.innerHTML = "VN";
    } else {
        x.innerHTML = "EN";
    }
}
