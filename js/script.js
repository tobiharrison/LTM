// ---- GOOGLE TRANSLATE ----
function googleTranslateElementInit() {
  if (typeof google !== "undefined" && google.translate) {
    new google.translate.TranslateElement(
      {
        pageLanguage: "en",
        includedLanguages: "fr,es,ar,zh-CN,pt,ru,sw,yo,ig,ha,af",
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      },
      "google_translate_element",
    );
  }
}

// ---- ACTIVE NAV HIGHLIGHT ----
document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll(".nav-links a");
  const currentPage = window.location.pathname.split("/").pop();

  links.forEach((link) => {
    const linkPage = link.getAttribute("href");

    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });
});

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("show");
});
