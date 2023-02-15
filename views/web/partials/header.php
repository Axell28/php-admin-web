<?php
function menuActivo($view, $menu)
{
    return $view == $menu ? "active" : "";
}
?>
<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container ps-0">
            <a class="navbar-brand fs-4 fw-bold" style="letter-spacing: .08em;" href="/">
                <img src="<?= PATH_PUBLIC ?>/img/icons/escudo.png" height="55">
                <span><?= NOMB_EMPRESA ?></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= menuActivo($viewname, 'index') ?>" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= menuActivo($viewname, 'nosotros') ?>" href="/">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= menuActivo($viewname, 'servicios') ?>" href="/">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= menuActivo($viewname, 'galeria-lista') ?>" href="/galeria-lista">Galería</a>
                    </li>
                    <li class="nav-item" onmouseover="showMenuHover(0)">
                        <a class="nav-link <?= menuActivo($viewname, 'publicaciones') ?>" href="/publicaciones/all" id="navbarDropdown">
                            Publicaciones &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="/publicaciones/noticias">Noticias</a></li>
                            <li><a class="dropdown-item py-2" href="/publicaciones/eventos">Eventos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-0">
                        <a class="nav-link round" href="/">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
    var height = document.getElementById('header').clientHeight;
    document.querySelector('body').style.paddingTop = height + "px";

    function showMenuHover(index, add = true) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        if (add) {
            menu.classList.add('show');
        } else {
            menu.classList.remove('show');
        }
    }

    document.addEventListener('click', function() {
        const menu = document.querySelectorAll('ul.dropdown-menu');
        menu.forEach((item) => {
            item.classList.remove('show');
        });
    });
</script>