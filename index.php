<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
    <?/* Грубое редактирование HTML, можно также сделать по элементам,
         чтобы контент-менеджер не порушил верстку */?>
    <? $APPLICATION->IncludeFile('/include/first_block.php'); ?>
    <? $APPLICATION->IncludeFile('/include/about_company.php'); ?>


    <div class="lead_1">
        <div class="container-fluid">
            <div class="row wow zoomIn" data-wow-delay='0.5s' data-wow-duration='0.5s'>
                <span class="text_1"><i>Каждый 3-й клиент</i> приходит к нам по рекомендации. А это означает только одно: </span>
                <span class="text_2">мы правильно делаем свою работу.</span>
                <span class="phone"><i>Звоните!</i><a href="tel:"><?=getPhone()?></a></span>
                <span class="shedule">Пн-Пт с 8:00 до 17:00</span>
            </div>
        </div>
    </div>

    <div class="lead_2 lead_template">
        <div class="container-fluid">
            <div class="row wow slideInLeft" data-wow-delay='0.5s' data-wow-duration='0.5s'>
                <span class="title">Оформите заявку и получите надёжного подрядчика уже сегодня!</span>
                <form method="POST" class="ajax_lead_form" action="">
                    <div class="input_block">
                        <input class="name" name="name" type="text" placeholder="Ваше имя">
                        <input class="phone phone_maska" type="phone" required name="phone" placeholder="Ваш телефон*">
                    </div>
                    <input id="checkbox_2" type="checkbox" checked required>
                    <label for="checkbox_2">Я согласен на обработку персональных данных</label>
                    <span class="errors"></span>
                    <button type="submit">Оформить заявку</button>
                    <input type="hidden" name="typeForm" value="formRequest">
                    <input type="hidden" name="nameForm" value="Оформления заявки">
                    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>">
                </form>
            </div>
        </div>
    </div>

    <div class="recommend" id="recommend">
        <div class="container-fluid">
            <div class="row">
                <span class="section_title wow fadeIn" data-wow-delay='0.3s' data-wow-duration='0.8s'>Отзывы наших клиентов</span>
                <div class="recommend_block wow fadeIn" data-wow-delay='0.5s' data-wow-duration='1.5s'>
                    <div class="item item_1">
                        <div class="title">
                            <span class="name">Анастасия Твердова 1</span>
                            <span class="position">Дизайнер мебели и ИП</span>
                        </div>
                        <div class="text">С интернет рекламой не дружу, потому обратилась к другу маркетологу, он меня
                            направил на этот ресурс, сказал что самый проверенный способ найти агентство. Через два дня
                            я подписала договор с агентством по контекстной рекламе. Клиентов больше чем могу
                            обработать. Ребята спасибо огромнейшее, Вы спасли мой бизнес.
                        </div>
                    </div>
                    <div class="item item_2">
                        <div class="title">
                            <span class="name">Сергей Минашкин 2</span>
                            <span class="position">Директор по продажам услуг физ. лицам</span>
                        </div>
                        <div class="text">Пять раз подбирали Агенство интернет рекламы, пять раз бюджет был растрачен
                            без отдачи. Хотели уже самим набирать штат, но тут наткнулся на эту компанию. Ребята
                            опросили меня, сказали что задача сложная и с таким бюджетом надо подбирать среднее
                            агентство. Через неделю мы начали получать клиентов по очень низкой цене, спасибо ребятам за
                            оперативность.
                        </div>
                    </div>
                    <div class="item item_3">
                        <div class="title">
                            <span class="name">Александр Ильнуров 3</span>
                            <span class="position">Частный фотограф</span>
                        </div>
                        <div class="text">Моя тематика очень сильно перегружена дешевыми фрилансерами,работать не умеют
                            и цену запрашивают низкую. Конкурировать с ними очень тяжело, не знал как получать клиентов.
                            Обратился в эту компанию, через два дня мне подобрали агентство которое ведет двух таких же
                            фотографов по контекстной рекламе. Я не только познакомился с коллегами но и стал получать
                            много звонков от клиентов. Теперь я выбираю с кем работать.
                        </div>
                    </div>
                    <div class="item item_4">
                        <div class="title">
                            <span class="name">Александр Ильнуров 4</span>
                            <span class="position">Частный фотограф</span>
                        </div>
                        <div class="text">Моя тематика очень сильно перегружена дешевыми фрилансерами,работать не умеют
                            и цену запрашивают низкую. Конкурировать с ними очень тяжело, не знал как получать клиентов.
                            Обратился в эту компанию, через два дня мне подобрали агентство которое ведет двух таких же
                            фотографов по контекстной рекламе. Я не только познакомился с коллегами но и стал получать
                            много звонков от клиентов. Теперь я выбираю с кем работать.
                        </div>
                    </div>
                    <div class="item item_5">
                        <div class="title">
                            <span class="name">Александр Ильнуров 5</span>
                            <span class="position">Частный фотограф</span>
                        </div>
                        <div class="text">Моя тематика очень сильно перегружена дешевыми фрилансерами,работать не умеют
                            и цену запрашивают низкую. Конкурировать с ними очень тяжело, не знал как получать клиентов.
                            Обратился в эту компанию, через два дня мне подобрали агентство которое ведет двух таких же
                            фотографов по контекстной рекламе. Я не только познакомился с коллегами но и стал получать
                            много звонков от клиентов. Теперь я выбираю с кем работать.
                        </div>
                    </div>
                    <div class="item item_6">
                        <div class="title">
                            <span class="name">Александр Ильнуров 6</span>
                            <span class="position">Частный фотограф</span>
                        </div>
                        <div class="text">Моя тематика очень сильно перегружена дешевыми фрилансерами,работать не умеют
                            и цену запрашивают низкую. Конкурировать с ними очень тяжело, не знал как получать клиентов.
                            Обратился в эту компанию, через два дня мне подобрали агентство которое ведет двух таких же
                            фотографов по контекстной рекламе. Я не только познакомился с коллегами но и стал получать
                            много звонков от клиентов. Теперь я выбираю с кем работать.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="lead_3 lead_template wow slideInLeft" data-wow-delay='0.5s' data-wow-duration='0.5s'>
        <div class="container-fluid">
            <div class="row">
                <span class="title">Оставьте свои контактные данные, и мы вам перезвоним!</span>
                <form method="POST" class="ajax_lead_form" action="">
                    <div class="input_block">
                        <input class="name" name="name" type="text" placeholder="Ваше имя">
                        <input class="phone phone_maska" type="phone" required name="phone" placeholder="Ваш телефон*">
                    </div>
                    <span class="errors"></span>
                    <input id="checkbox_3" type="checkbox" checked required>
                    <label for="checkbox_3">Я согласен на обработку персональных данных</label>
                    <button type="submit">Перезвоните мне</button>
                    <input type="hidden" name="typeForm" value="formRequest">
                    <input type="hidden" name="nameForm" value="Заказ обратного звонка">
                    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>">
                </form>
            </div>
        </div>
    </div>
    <div class="map wow zoomIn" data-wow-delay='0.5s' data-wow-duration='0.5s'>
        <div id='map'></div>
        <div class='content'>
            <span class="section_title">Наши контакты</span>
            <div class="text">
                <a href="tel:"><?=getPhone()?></a>
                <span class="mail">info@test.ru</span>
                <span class="address">г. Москва, Дербеневская набережная</span>
            </div>
        </div>
    </div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>