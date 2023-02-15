<footer id="footer" class="text-white pt-4" style="background-color: #1a201f;">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Subscribe to our Blog</h2>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class="fw-bold">Useful Links</h4>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="/">Home</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class="fw-bold">Our Services</h4>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4 class="fw-bold">Contact Us</h4>
                    <p>
                        <?= $dataEmpresa['direccion'] ?>
                        <br><br>
                        <strong>Phone:</strong> <?= $dataEmpresa['telefono'] ?><br>
                        <strong>Celular:</strong> <?= $dataEmpresa['celular'] ?> <br>
                        <strong>E-mail:</strong> <?= $dataEmpresa['correo1'] ?> <br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3 class="fw-bold">About web</h3>
                    <p><?= $dataEmpresa['metades'] ?></p>
                    <div class="social-links mt-3">
                        <a href="<?= $dataEmpresa['twitter'] ?>" class="twitter fs-4 mx-2"><i class="fab fa-twitter"></i></a>
                        <a href="<?= $dataEmpresa['facebook'] ?>" class="facebook fs-4 mx-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?= $dataEmpresa['instagram'] ?>" class="instagram fs-4 mx-2"><i class="fab fa-instagram"></i></a>
                        <a href="<?= $dataEmpresa['youtube'] ?>" class="google-plus fs-4 mx-2"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr>
    <div class="container pb-3">
        <div class="copyright text-center">
            &copy; Copyright <strong><span><?= NOMB_EMPRESA ?></span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->