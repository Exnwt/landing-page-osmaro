<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a class="navbar-brand logo-text" href="/">
                <img src="{{ asset('frontend/images/logo-osmaro.png') }}" alt="Logo" class="logo">
            </a>


            <div class="social-icons d-flex align-items-center order-1">
                <a href="https://api.whatsapp.com/send?phone=628116418181" target="_blank" class="social-button wa-button">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
                </a>
                <a href="{{$instagram}}" target="_blank" class="social-button ig-button">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
                </a>
            </div>


            <button class="navbar-toggler order-2 ms-2" type="button" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active-link" href="/"><b>Beranda</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('layanan') }}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('fasilitas') }}">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('post') }}">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header_section");
    const menuToggle = document.getElementById("menuToggle");
    const navbarMenu = document.getElementById("navbarMenu");
    let lastScrollTop = 0;

    if (!header || !menuToggle || !navbarMenu) {
        console.error("Elemen tidak ditemukan! Pastikan ID sudah benar.");
        return;
    }


    window.addEventListener("scroll", function () {
        let scrollTop = window.scrollY;

        if (scrollTop > lastScrollTop && !navbarMenu.classList.contains("show")) {

            header.classList.add("header-hidden");
        } else {

            header.classList.remove("header-hidden");
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });


    menuToggle.addEventListener("click", function (event) {
        event.stopPropagation();
        navbarMenu.classList.toggle("show");


        if (navbarMenu.classList.contains("show")) {
            header.classList.remove("header-hidden");
        }
    });


    document.addEventListener("click", function (event) {
        if (!menuToggle.contains(event.target) && !navbarMenu.contains(event.target)) {
            navbarMenu.classList.remove("show");
        }
    });
});


</script>
