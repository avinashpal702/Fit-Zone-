document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#contactForm");
    if (!form) return;

    form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add("was-validated");
    });
});