<div class="header" id="header">
    <div class="center">
        <a class="logo" href="#">
            <img src="./assets/palumni_logo.svg" alt="Palumni logo">
            <div class="logo-title">
                Palumni
            </div>
        </a>
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <form class="collapse navbar-collapse" id="navbarNavDropdown" action="./index.php" method="get">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active nav-hover about-element" href="#about"><?php t("About us") ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active nav-hover profile-element" href="#profile"><?php t("Portfolio") ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active nav-hover services-element" href="#services"><?php t("Services") ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active nav-hover tools-element" href="#tools"><?php t("Tools") ?></a>
                            </li>

                            <!-- <li class="nav-item">
                            <a class="nav-link active" href="#"></a>
                        </li> -->

                            <li class="nav-item dropdown active d-none d-lg-block">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    switch ($_GET["lang"]) {
                                        case 'en':
                                            echo "English";
                                            break;
                                        case 'sk':
                                            echo "Slovak";
                                            break;
                                        case 'pl':
                                            echo "Polish";
                                            break;
                                        case 'ua':
                                            echo "Ukrainian";
                                            break;
                                        case 'ru':
                                            echo "Russian";
                                            break;
                                        case 'de':
                                            echo "German";
                                            break;
                                        default:
                                            echo "English";
                                            break;
                                    }
                                    ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <?php
                                    switch ($_GET['lang']) {
                                        case 'en':
                                            echo '
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                            break;
                                        case 'sk':
                                            echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                            break;
                                        case 'pl':
                                            echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                            break;
                                        case 'ua':
                                            echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                            break;
                                        case 'ru':
                                            echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                            break;
                                        case 'de':
                                            echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>';
                                            break;
                                        default:
                                            echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                            break;
                                    }
                                    ?>

                                </ul>
                            </li>
                            <li class="nav-item theme-btn d-none d-lg-flex">
                                <div onclick="changeTheme()"><img src="./assets/sun.svg" alt="sun" class="theme-icon"></div>
                            </li>
                        </ul>
                    </form>
                </div>
            </nav>
            <div class="contacts d-none d-lg-block">
                <a href="#contacts">
                    <button class="contact-btn">
                        <?php t("Contact us") ?>
                    </button>
                </a>

            </div>
            <form class="buttons d-flex d-lg-none" action="./index.php" method="get">
                <div class="nav-item dropdown active languages">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                        switch ($_GET["lang"]) {
                            case 'en':
                                echo "English";
                                break;
                            case 'sk':
                                echo "Slovak";
                                break;
                            case 'pl':
                                echo "Polish";
                                break;
                            case 'ua':
                                echo "Ukrainian";
                                break;
                            case 'ru':
                                echo "Russian";
                                break;
                            case 'de':
                                echo "German";
                                break;
                            default:
                                echo "English";
                                break;
                        }
                        ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                        switch ($_GET['lang']) {
                            case 'en':
                                echo '
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                break;
                            case 'sk':
                                echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                break;
                            case 'pl':
                                echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                break;
                            case 'ua':
                                echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                break;
                            case 'ru':
                                echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                break;
                            case 'de':
                                echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>';
                                break;
                            default:
                                echo '<li class="dropdown-item">English <input type="submit" name="lang" value="en"></li>
                                <li class="dropdown-item">Slovak <input type="submit" name="lang" value="sk"></li>
                                <li class="dropdown-item">Polish<input type="submit" name="lang" value="pl"></li>
                                <li class="dropdown-item">Ukrainian <input type="submit" name="lang" value="ua"></li>
                                <li class="dropdown-item">Russian<input type="submit" name="lang" value="ru"></li>
                                <li class="dropdown-item">German<input type="submit" name="lang" value="de"></li>';
                                break;
                        }
                        ?>

                    </ul>
            </div>

            <div class="theme" onclick="changeTheme()">
                <img src="./assets/sun.svg" alt="sun" class="theme-icon">
            </div>
        </form>
    </div>
</div>
</div>