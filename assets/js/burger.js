document.addEventListener("DOMContentLoaded", () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector("[data-nav]");

    /*“Stop. On quitte la fonction.” 
    Donc return arrête l’exécution de ce bloc.
    */
    if (!burger || !nav) return;

    const openMenu = () => {
        burger.classList.add("is-open");
        nav.classList.add("is-open");
        burger.setAttribute("aria-expanded", "true");
        burger.setAttribute("aria-label", "Fermer le menu");
    };

    const closeMenu = () => {
        burger.classList.remove("is-open");
        nav.classList.remove("is-open");
        burger.setAttribute("aria-expanded", "false");
        burger.setAttribute("aria-label", "Ouvrir le menu");
    };

    burger.addEventListener("click", () => {
        const isOpen = nav.classList.contains("is-open");
        isOpen ? closeMenu() : openMenu();
    });

    // Ferme le menu si on clique en dehors
    document.addEventListener("click", (e) => {
        const clickedInside = nav.contains(e.target) || burger.contains(e.target);
        if (!clickedInside) closeMenu();
    });

    // Ferme le menu avec Echap
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeMenu();
    });

    // Si on repasse en desktop, on ferme proprement
    window.addEventListener("resize", () => {
        if (window.innerWidth > 992) closeMenu();
    });
});
