<div class="first_block">
    <div class="container-fluid">
        <div class="row">
            <span class="title wow fadeIn" data-wow-delay='0.5s' data-wow-duration='0.5s'>Сервис по подбору <i>рекламных агентств</i></span>
            <span class="subtitle wow fadeIn" data-wow-delay='0.5s' data-wow-duration='0.5s'>Выберите себе надёжного подрядчика!</span>
            <form method="POST" action="" class="wow zoomIn ajax_lead_form" data-wow-delay='0.5s' data-wow-duration='0.5s'>
                <div class="input_block">
                    <input class="name" name="name" type="text" placeholder="Ваше имя">
                    <input class="phone phone_maska" type="phone" required name="phone" placeholder="Ваш телефон*">
                </div>
                <span class="errors"></span>
                <input id="checkbox" type="checkbox" checked required>
                <label for="checkbox">Я согласен на обработку персональных данных</label>
                <button type="submit">Заказать подбор</button>
                <input type="hidden" name="typeForm" value="formRequest">
                <input type="hidden" name="nameForm" value="Заказ подбора">
                <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>">
            </form>
        </div>
        <div class="row">
            <div class="advantage">
                <div class="item wow slideInUp" data-wow-delay='0.5s' data-wow-duration='0.5s'>
                    <span class="title">Проверенные подрядчики</span>
                    <span class="text">Все компании прошли проверку на профессионализм и отсортированы по приоритетным тематикам бизнеса</span>
                </div>
                <div class="item wow slideInUp" data-wow-delay='0.5s' data-wow-duration='0.9s'>
                    <span class="title">Вы экономите время</span>
                    <span class="text">Мы подберем Вам агентство, по Вашим критериям всего за 1 – 2 рабочих дня</span>
                </div>
                <div class="item wow slideInUp" data-wow-delay='0.5s' data-wow-duration='1.1s'>
                    <span class="title">Гарантия добросовестного сотрудничества</span>
                    <span class="text">Только у нас есть статистика по лучшим агентствам, которая ежедневно обновляется</span>
                </div>
            </div>
        </div>
    </div>
</div>