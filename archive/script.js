const langBtn = document.querySelector(".lang-btn");
const langBox = document.querySelector(".lang");
const items = document.querySelectorAll(".lang-dropdown li");
const currentLang = document.getElementById("current-lang");

langBtn.onclick = () => {
    langBox.classList.toggle("active");
};

items.forEach(item => {
    item.onclick = () => {
        let lang = item.dataset.lang;

        currentLang.textContent = lang.toUpperCase();

        if (lang === "th") {
            window.location.href = "/th/";
        } else {
            window.location.href = "/en/";
        }
    };
});

document.addEventListener("click", (e) => {
    if (!langBox.contains(e.target)) {
        langBox.classList.remove("active");
    }
});
