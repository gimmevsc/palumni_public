<div id="profile" class="section"></div>
<div class="profile d-none d-lg-block">
    <div class="title">
        <div class="profile-title">
            <?php t("Our cases") ?>
        </div>
        <div class="wnb">
            <?php t("Websites and bots") ?>
        </div>
        <img src="./assets/green_p.svg" alt="Element">
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="content">
                    <div class="block">
                        <img src="./assets/etalon.png" alt="Etalon">
                        <div class="label"><?php t("'Etalon' website") ?></div>
                        <div class="description">
                            <?php t("The website was created on a turnkey basis for the customer <br>The site presents the 'Etalon' plant, products, contacts, information about the plant, etc <br>The site is written in React and PHP using OctoberCMS for easy site administration (change of information on the site). <br>Link to the site: <a href='https://etalon-uman.pp.ua/en' style='text-decoration:none;'>Etalon</a>") ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="content">
                    <div class="block">
                        <img src="./assets/pt_bot.png" alt="Etalon">
                        <div class="label"><?php t("Enroll in Pavel Trusov VIP Bot") ?></div>
                        <div class="description"> <?php t("A turnkey bot created for an influencer<br>Used to accept subscription payments through the Stripe payment system <br>All data required for the customer is stored in the SQLite3 database <br>The bot is deployed on Render hosting <br>Bot's username in Telegram: <a href='https://t.me/trusov_vip_bot' style='text-decoration:none;'>@trusov_vip_bot</a>") ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="content">
                    <div class="block">
                        <img src="./assets/d_bot.png" alt="Etalon">
                        <div class="label">Dictionary Bot</div>
                        <div class="description"><?php t("Bot for recording words and translating them into other languages (using DeepL API)<br>The SQLite3 database is used to store the recorded words of the client and the client base<br>At the request of the client, a permanent backup of the database to Google Drive is implemented<br>Deployed on Render hosting<br>Bot's username in Telegram: <a href='https://t.me/dict1onarybot' style='text-decoration:none;'>@dict1onarybot</a>") ?>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <div class="prev c-btn">
                    <img src="./assets/prev.png" alt="">
                </div>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <div class="next c-btn">
                    <img src="./assets/next.png" alt="">
                </div>
            </button>
        </div>
    </div>

</div>
<div class="profile d-block d-lg-none">
<div class="title">
        <div class="profile-title">
            <?php t("Our cases") ?>
        </div>
        <!-- <div class="wnb">
            <?php t("Websites and bots") ?>
        </div> -->
        <img src="./assets/green_p.svg" alt="Element">
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="block">
                    <img src="./assets/etalon.png" alt="Etalon">
                    <div class="label"><?php t("'Etalon' website") ?></div>
                    <div class="description">
                        <?php t("The website was created on a turnkey basis for the customer <br>The site presents the 'Etalon' plant, products, contacts, information about the plant, etc <br>The site is written in React and PHP using OctoberCMS for easy site administration (change of information on the site). <br>Link to the site: <a href='https://etalon-uman.pp.ua/en' style='text-decoration:none;'>Etalon</a>") ?>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="block">
                    <img src="./assets/pt_bot.png" alt="Etalon">
                    <div class="label"><?php t("Enroll in Pavel Trusov VIP Bot") ?></div>
                    <div class="description"> <?php t("A turnkey bot created for an influencer<br>Used to accept subscription payments through the Stripe payment system <br>All data required for the customer is stored in the SQLite3 database <br>The bot is deployed on Render hosting <br>Bot's username in Telegram: <a href='https://t.me/trusov_vip_bot' style='text-decoration:none;'>@trusov_vip_bot</a>") ?>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="block">
                    <img src="./assets/d_bot.png" alt="Etalon">
                    <div class="label">Dictionary Bot</div>
                    <div class="description"><?php t("Bot for recording words and translating them into other languages (using DeepL API)<br>The SQLite3 database is used to store the recorded words of the client and the client base<br>At the request of the client, a permanent backup of the database to Google Drive is implemented<br>Deployed on Render hosting<br>Bot's username in Telegram: <a href='https://t.me/dict1onarybot' style='text-decoration:none;'>@dict1onarybot</a>") ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </div>
</div>