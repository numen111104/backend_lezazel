const hamburger = document.querySelector(".hamburger")
const navbar = document.querySelector(".navbar")
const liNavbar = navbar.querySelectorAll("li")

hamburger.addEventListener("click", () => {
    liNavbar.forEach((li) => {
        li.addEventListener("click", () => {
            navbar.classList.remove("active")
            hamburger.classList.remove("active")
        })
    })
    navbar.classList.toggle("active")
    hamburger.classList.toggle("active")
})

function formatText(input, max = 50) {
    if (input.length > max) {
        return input.slice(0, max) + '...'
    } else {
        return input
    }
}
let titleFormat = document.querySelectorAll(".card-article h3")
titleFormat.forEach(h3 => {
    h3.innerHTML = formatText(h3.innerHTML)
})

const articleP = document.querySelectorAll(".article p")
const articleH2 = document.querySelectorAll(".article h2")
const articleImg = document.querySelectorAll(".article img")
const headerImg = document.querySelector(".landing-page img")

articleP.forEach((p) => { 
    p.setAttribute("data-aos", "fade-up")
})
articleH2.forEach((h2) => { 
    h2.setAttribute("data-aos", "fade-up")
})
articleImg.forEach((img) => { 
    img.setAttribute("data-aos", "fade-up")
})

document.querySelectorAll("article h1").forEach((h1) => {
    h1.setAttribute("data-aos", "fade-up")
})

headerImg.setAttribute("data-aos", "fade-in")
headerImg.setAttribute("data-aos-duration", "1000")

document.querySelectorAll(".container-card > div").forEach((card, index) => {
    card.setAttribute("data-aos", "fade-up")
    let delay = index * 100
    card.setAttribute("data-aos-delay", `${delay}`)
})
