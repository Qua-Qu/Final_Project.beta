let carouselProduct = document.querySelector("#carousel-product")
let carouselInner = document.querySelectorAll('.carousel-inner-product')[0]

if (window.matchMedia("(min-width: 768px)").matches) {
    let carouselWidth = document.querySelectorAll(".carousel-inner-product")[0].scrollWidth
    let cardWidth = document.querySelectorAll(".product-item")[0].clientWidth
    let scrollPosition = 0

    document.getElementById("next-btn").addEventListener("click", () => {
        if (scrollPosition < carouselWidth - cardWidth * 4) {
            scrollPosition += cardWidth
            carouselInner.scroll({
                left: scrollPosition,
                top: 0,
                behavior: "smooth",
            })
        }
    })

    document.getElementById("prev-btn").addEventListener("click", () => {
        if (scrollPosition > 0) {
            scrollPosition -= cardWidth
            carouselInner.scroll({
                left: scrollPosition,
                top: 0,
                behavior: "smooth",
            })
        }
    })
}