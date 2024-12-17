<div class="footer d-none d-lg-flex">
    <div class="left">
        <a class="logo_url" href="#">
            <div class="logo">
                <img src="./assets/palumni_logo.svg" alt="">
                <div class="logo-text">
                    Palumni
                </div>
            </div>
        </a>
        <div class="text">
            <?php t("Pioneering Web Development and AI Implementation to Elevate Your Business...") ?>
        </div>
    </div>
    <div class="center">
        <div class="contacts bl">
            <div class="title">
                <?php t("Contact us") ?>
            </div>
            <div class="content">
                <div class="email">
                    <a href="mailto:info@palumni.co.site">info@palumni.co.site</a>
                </div>
                <div class="number">
                    +421 950 614 790
                </div>
            </div>
        </div>
        <div class="navigation bl">
            <div class="title">
                <?php t("Navigation") ?>
            </div>
            <div class="navigation">
                <div class="nav-item"><a href="#contacts"><?php t("Contact us") ?></a></div>
                <div class="nav-item"><a href="#services"><?php t("Services") ?></a></div>
                <div class="nav-item"><a href="#profile"><?php t("Portfolio") ?></a> </div>
                <div class="nav-item"><a href="#about"><?php t("About us") ?></a> </div>

            </div>
        </div>
        <div class="about bl">
            <div class="title">
                <?php t("About us") ?>
            </div>
            <div class="navigation">
                <div class="nav-item"><a href="#about"><?php t("Who we are?") ?></a></div>
                <div class="nav-item"><a href="#services"><?php t("What do we offer?") ?></a></div>
                <div class="nav-item"><a href="#tools"><?php t("Tools") ?></a> </div>

            </div>
        </div>
    </div>
    <div class="right">
        <div class="title"><?php t("Have any questions?") ?></div>
        <a href="#contacts" class="contact-us"><button><?php t("Contact us") ?></button></a>
        <div class="links">
            <a href="https://www.facebook.com/palumni.solutions/"><img src="./assets/facebook.png" alt=""></a>
            <a href="https://t.me/palumni_solutions"><img src="./assets/telegram.png" alt=""></a>
            <a href=""><img src="./assets/x.png" alt="" class="twitter-img"></a>
            <a href="https://www.instagram.com/palumni_solutions"><img src="./assets/instagram.png" alt=""></a>
        </div>
    </div>
</div>
<div class="mobile-footer d-flex d-lg-none">
    <div class="top">
        <a class="logo_url" href="#">
            <div class="logo">
                <img src="./assets/palumni_logo.svg" alt="">
                <div class="logo-text">
                    Palumni
                </div>
            </div>
        </a>
        <div class="text">
            <span>
                <?php t("Have any questions?") ?>
            </span>
            <a href="#contacts">
                <button><?php t("Contact us") ?></button>
            </a>
        </div>
    </div>
    <div class="mid">
        <div class="text">
            <?php t("Pioneering Web Development and AI Implementation to Elevate Your Business...") ?>
        </div>
        <div class="links">
            <a href="https://www.facebook.com/palumni.solutions/"><img src="./assets/facebook.png" alt=""></a>
            <a href="https://t.me/palumni_solutions"><img src="./assets/telegram.png" alt=""></a>
            <a href=""><img src="./assets/x.png" alt="" class="twitter-img"></a>
            <a href="https://www.instagram.com/palumni_solutions"><img src="./assets/instagram.png" alt=""></a>
        </div>
    </div>
    <div class="bot">

        <div class="nav container-fluid">

            <button id="footer-btn-1" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#about-menu" aria-controls="about-menu" aria-expanded="false" aria-label="Toggle navigation" onclick="turnArrow(1)">
                <?php t("About us") ?>
                <div class="arrow">
                    <img id="arrow1" src="./assets/bottom-arrow.svg" alt="">
                </div>
            </button>
            <ul class="nav-list collapse navbar-collapse" aria-labelledby="aboutMenu" id="about-menu">
                <li><a class="nav-item" href="#about"><?php t("Who we are?") ?></a>
                <li><a class="nav-item" href="#services"><?php t("What do we offer?") ?></a>
                </li><li><a class="nav-item" href="#tools"><?php t("Tools") ?></a></li>
            </ul>
        </div>

        <div class="nav container-fluid">

            <button id="footer-btn-2" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#contacts-menu" aria-controls="contacts-menu" aria-expanded="false" aria-label="Toggle navigation" onclick="turnArrow(2)">
                <?php t("Contacts") ?>
                <div class="arrow">
                    <img id="arrow2" src="./assets/bottom-arrow.svg" alt="">
                </div>
            </button>
            <ul class="nav-list collapse navbar-collapse" aria-labelledby="aboutMenu" id="contacts-menu">
                <li><a class="nav-item" href="mailto:info@palumni.co.site">info@palumni.co.site</a></li>
                <li><a class="nav-item" href="tel:+421-950-614-790">+421 950 614 790</a></li>
            </ul>
        </div>

        <div class="nav container-fluid">

            <button id="footer-btn-3" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navigation-menu" aria-controls="navigation-menu" aria-expanded="false" aria-label="Toggle navigation" onclick="turnArrow(3)">
                <?php t("Navigation") ?>
                <div class="arrow">
                    <img id="arrow3" src="./assets/bottom-arrow.svg" alt="">
                </div>
            </button>
            <ul class="nav-list collapse navbar-collapse" aria-labelledby="aboutMenu" id="navigation-menu">
                <li><a class="nav-item" href="#about"><?php t("About us") ?></a></li>
                <li><a class="nav-item" href="#profile"><?php t("Portfolio") ?></a></li>
                <li><a class="nav-item" href="#services"><?php t("Services") ?></a></li>
                <li><a class="nav-item" href="#contacts"><?php t("Contact us") ?></a></li>
                <li><a class="nav-item" href="#tools"><?php t("Tools") ?></a></li>

            </ul>
        </div>

    </div>
    <hr>
    <div class="palumni2024">
        <div class="text">
            © Palumni 2024
        </div>
    </div>
</div>