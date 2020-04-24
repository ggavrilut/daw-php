<!DOCTYPE html>
<html>
    <?php include('views/head.html');?>
    <body>
        <div class="header">
            <div class="topbar">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-globe-europe"></i> Languages</a>
                        <ul class="dropdown">
                            <li class="menu-item"><a href="#">English</a></li>
                            <li class="menu-item"><a href="#">Russian</a></li>
                            <li class="menu-item"><a href="#">Italian</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#"><i class="fas fa-share-alt"></i> Our social</a>
                        <ul class="dropdown">
                            <li class="menu-item"><a href="#">Facebook</a></li>
                            <li class="menu-item"><a href="#">Twiter</a></li>
                        </ul>
                    </li>
                    <li class="menu-item secondary"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="menu-item secondary"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="menu-item secondary"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="menu-item secondary"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li class="menu-item secondary"><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <ul class="menu">
                    <li class="menu-item"><a href="#"><i class="far fa-user"></i> Login</a></li>
                    <li class="menu-item"><a href="#"><i class="fas fa-lock"></i> Register</a></li>
                </ul>
            </div>
            <div class="navbar">
                <div class="logo-container">
                    <a href="/"></a><img src="/assets/images/daw_logo.svg" alt="Laborator DAW"></a>
                    <h1>Laborator DAW</h1>
                </div>
                <div class="menu-container">
                    <ul class="main-menu">
                        <li class="menu-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Labs</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Students</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                    <button id="mobile-menu-btn" class="menu-btn"><i class="fas fa-2x fa-bars"></i></button>
                    <button class="search-btn"><i class="fas fa-2x fa-search"></i></button>
                    <div id="mobile-menu" class="mobile-menu">
                        <button id="mobile-menu-close-btn" class="close-btn"><i class="far fa-times-circle"></i></button>
                        <ul>
                            <li class="menu-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Labs</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Students</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="slider">
                <p class="first-row">In our Campus you can</p>
                <p class="second-row">learn <span id="slider-dynamic-content"></span></p>
            </div>
        </div>
        <div class="container">
            <div class="about">About</div>
            <div class="labs">Laboratories</div>
            <div class="students">Students</div>
            <div class="info">Info</div>
            <div class="blog">Blog</div>
        </div>
        <div class="footer">
            <div class="technologies">Technologies</div>
            <div class="bottom-bar">Bottom bar</div>
            <div class="copyright">Copyright</div>
        </div>
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/menu.js"></script>
        <script src="/assets/js/slider.js"></script>
    </body>
</html>