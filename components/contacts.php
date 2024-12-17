<div id="contacts" class="section"></div>
<div class="contacts">
    <div class="title">
        <div class="contacts-title">
            <?php t("Contacts") ?>
        </div>
        <div class="communication d-none d-lg-block">
            <?php t("Communication") ?>
        </div>
        <img src="./assets/green_p.svg" alt="Element">
    </div>

    <div class="main">
        <div class="content">
            <div class="label"><?php t("Fill in the contact information below and describe your project") ?></div>
            <form action="./utils/order.php" method="post" class="form">
                <input type="hidden" name="url" value='<?php echo getCurrentUrl() ?>'>
                <input type="hidden" name="lang" value='<?php echo $_GET['lang'] ?>'>

                <div class="name-email field">
                    <div class="name">
                        <label for="name" class="label"><?php t("Your name") ?></label>
                        <input type="text" placeholder="Jane Johansson" name="name" id="name" required>
                    </div>
                    <div class="email">
                        <label for="email" class="label"><?php t("Email address") ?></label>
                        <input type="email" placeholder="email@janesfakedomain.net" name="email" id="email" required>
                    </div>
                </div>
                <div class="service field">
                    <div class="label"><?php t("Service") ?></div>
                    <div class="radio-group">
                        <input name="service" type="radio" value="Custom" id="one_s" checked required>
                        <label for="one_s" class="radio">
                            <div><?php t("Custom") ?></div>
                        </label>

                        <input name="service" type="radio" value="Telegram Bot" id="two_s">
                        <label for="two_s" class="radio">
                            <div><?php t("Telegram Bot") ?></div>
                        </label>

                        <input name="service" type="radio" value="Web Site" id="three_s">
                        <label for="three_s" class="radio">
                            <div><?php t("Web Site") ?></div>
                        </label>

                        <input name="service" type="radio" value="SEO" id="four_s">
                        <label for="four_s" class="radio">
                            <div><?php t("SEO") ?></div>
                        </label>

                        <input name="service" type="radio" value="UI/UX Design" id="five_s">
                        <label for="five_s" class="radio">
                            <div><?php t("UI/UX Design") ?></div>
                        </label>

                        <div class="selected"></div>
                    </div>
                </div>

                <div class="budget field">
                    <div class="label"><?php t("Project budget") ?></div>
                    <div class="radios d-none d-lg-flex">

                        <input name="budget" type="radio" value="< &euro;100" id="one" checked required>
                        <label for="one" class="radio">
                            < <?php t("€100") ?></label>

                                <input name="budget" type="radio" value="&euro;100 - &euro;300" id="two">
                                <label for="two" class="radio"><?php t("€100 - €300") ?></label>

                                <input name="budget" type="radio" value="&euro;300 - &euro;500" id="three">
                                <label for="three" class="radio"><?php t("€300 - €500") ?></label>

                                <input name="budget" type="radio" value="&euro;500+" id="four">
                                <label for="four" class="radio"><?php t("€500+") ?></label>

                    </div>
                    <div class="radios d-flex d-lg-none">

                        <input name="budget" type="radio" value="< &euro;100" id="one_m" >
                        <label for="one_m" class="radio">
                            < <?php t("€100") ?></label>

                                <input name="budget" type="radio" value="&euro;100 - &euro;300" id="two_m">
                                <label for="two_m" class="radio"><?php t("€100 - €300 ") ?></label>

                                <input name="budget" type="radio" value="&euro;300 - &euro;500" id="three_m">
                                <label for="three_m" class="radio"><?php t("€300 - €500 ") ?></label>

                                <input name="budget" type="radio" value="&euro;500+" id="four_m">
                                <label for="four_m" class="radio"><?php t("€500+") ?></label>

                    </div>
                </div>
                <div class="message field">
                    <div class="label"><?php t("Describe your idea here or leave a message") ?></div>
                    <textarea name="message" id="message" placeholder='<?php t("Enter your question or message") ?>'></textarea>
                </div>
                <div class="submit field">
                    <input name="submit" type="submit" value='<?php t("Submit") ?>'>
                </div>
            </form>
        </div>
    </div>
</div>
<script> if(window.innerWidth < 992)document.getElementById('one_m').checked = true;</script>