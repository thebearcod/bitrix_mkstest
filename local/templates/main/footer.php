<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>
        </main>

        <footer>
            <div class="container-fluid">
                <div class="row wow fadeIn" data-wow-delay='0.5s' data-wow-duration='0.5s'>
                    <span class="footer_logo"></span>
                    <span class="copyright">«Федерации лидов» <i>© Все права защищены</i></span>
                </div>
            </div>
        </footer>

        <div id='popup_thanks'>
            <div class='popup_block'>
                <div class='close'></div>
                <div class='title'>Ваша заявка принята!</div>
                <div class="text">Наши специалисты перезвонят Вам <br> в ближайшее время</div>
            </div>
        </div>

        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/slick.min.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/maska.js");?>
        <?// Asset::getInstance()->addString("<script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU'></script>"); ?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/wow.js");?>
        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");?>
	</body>
</html>