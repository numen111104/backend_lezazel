const hamburger = document.querySelector(".hamburger");
const navbar = document.querySelector(".navbar");
const liNavbar = navbar.querySelectorAll("li");

hamburger.addEventListener("click", () => {
    liNavbar.forEach((li) => {
        li.addEventListener("click", () => {
            navbar.classList.remove("active");
            hamburger.classList.remove("active");
        });
    });
    navbar.classList.toggle("active");
    hamburger.classList.toggle("active");
});

const h2Title = document.querySelectorAll(".page-switch");
const pageContainer = document.querySelectorAll(".page-container");
const container = document.querySelector(".landing-page");
const bgImg = document.querySelectorAll(".bg-img");

h2Title.forEach((h2, index) => {
    pageContainer.forEach((page, pageIndex) => {
        if (pageIndex === 0) {
            page.classList.add("active");
            page.style.display = "block";
        }
    });

    h2.addEventListener("click", () => {
        pageContainer.forEach((page) => {
            page.classList.remove("active");
            page.style.display = "none";
        });
        pageContainer[index].classList.add("active");
        pageContainer[index].style.display = "block";

        function changeBackground(index, image) {
            bgImg[index].classList.add("active");
            setTimeout(() => {
                container.style.backgroundImage = `url(./img/${image}.jpg)`;
                bgImg[index].classList.remove("active");
            }, 1000);
        }

        switch (index) {
            case 0:
                changeBackground(0, "lezazel");
                break;
            case 1:
                changeBackground(1, "lezazel1");
                break;
            case 2:
                changeBackground(2, "lezazel2");
                break;
            case 3:
                changeBackground(3, "lezazel3");
                break;
            case 4:
                changeBackground(4, "lezazel4");
                break;
        }

        h2Title.forEach((btn) => {
            btn.classList.remove("active");
        });
        h2.classList.add("active");
    });
});

const buttonForm = document.querySelectorAll(".form-destination .top button");

buttonForm.forEach((button, index) => {
    if (index === 0) {
        button.classList.add("active");
    }
    button.addEventListener("click", () => {
        buttonForm.forEach((btn) => {
            btn.classList.remove("active");
        });
        button.classList.add("active");
    });
});

const showImage = document.querySelector(".show-image");
const fourthPage = document.querySelector(".fourth-page");
const imageGallery = fourthPage.querySelectorAll(".col > div");

imageGallery.forEach((e) => {
    e.addEventListener("click", () => {
        showImage.classList.add("active");
        fourthPage.classList.add("active");

        let i = 1;
        while (i <= 3) {
            if (showImage.firstChild) {
                showImage.removeChild(showImage.firstChild);
            }
            i++;
        }

        let img = document.createElement("img");
        let imgSrc = e.querySelector("img").getAttribute("src");
        img.setAttribute("src", `${imgSrc}`);

        let imageDesc = document.createElement("div");
        imageDesc.classList.add("image-desc");

        let h1 = document.createElement("h1");
        h1.innerHTML = e.querySelector("p:not(.hidden)").innerHTML;

        let p = document.createElement("p");
        p.innerHTML = e.querySelector(".hidden").innerHTML;

        let icons = document.createElement("i");
        icons.classList.add("bi", "bi-x-lg");

        imageDesc.appendChild(h1);
        imageDesc.appendChild(p);
        showImage.appendChild(img);
        showImage.appendChild(imageDesc);
        showImage.appendChild(icons);

        icons.addEventListener("click", () => {
            showImage.classList.remove("active");
            fourthPage.classList.remove("active");
        });
    });
});
