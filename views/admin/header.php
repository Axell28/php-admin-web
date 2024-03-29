<header class="fixed-top" id="header">
    <div style="width: 190px; display: flex; align-items: center; padding-left: 12px;">
        <img src="/public/img/icons/escudo.png" height="35">
        <span class="fw-bold ms-2 text-uppercase" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
            <?= NOMB_EMPRESA ?>
        </span>
    </div>
    <button class="toggle">
        <i class="fas fa-bars"></i>
    </button>
    <div class="ms-auto d-flex">
        <div class="me-4">
            <i class="fas fa-calendar-alt"></i>
            <span>&nbsp;<?= \Admin\Core\Functions::getFechaActual() ?></span>
        </div>
        <a href="/admin/login/logout" class="ms-1 text-white">
            <i class="fas fa-sign-out-alt"></i>
            <span><?= $this->translate('Cerrar sesión') ?></span>
        </a>
    </div>
</header>