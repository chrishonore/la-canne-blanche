<header>
    <nav class="p-0 position-fixed start-0 end-0 z-3">
        <img class="ms-5" width="90" height="80" src="../assets/images/logo2.png" alt="Logo entreprise">
        <a class="px-3 text-decoration-none" href="?page=home">Séries TV</a>
        <a class="px-3 text-decoration-none cursor-disabled">Films</a>
        <a class="px-3 text-decoration-none cursor-disabled">Livre audio</a>
        <a class="px-3 me-5 my-4 text-info text-decoration-none float-end btn btn-outline-info" href="?page=login">Espace personnel</a>
        <span onclick="toggleNavPhone()" class="float-end my-4 me-4 user-select-none material-symbols-outlined">menu</span>
    </nav>

    <section id="nav-phone" class="position-fixed d-none end-0 nav-phone">
        <a class="px-3 mx-4 my-4 text-info text-decoration-none btn btn-outline-info" href="?page=home">Series Tv</a>
        <a class="px-3 mx-4 my-4 text-info text-decoration-none btn btn-outline-info" href="?page=login">Espace personnel</a>
    </section>
</header>


<script>
    function toggleNavPhone() {
        let navPhone = document.getElementById("nav-phone")

        if (navPhone.classList.contains("d-none")) {
            navPhone.classList.remove("d-none")
            navPhone.classList.add("d-block")
        } else {
            navPhone.classList.remove("d-block")
            navPhone.classList.add("d-none")
        }
    }
</script>
