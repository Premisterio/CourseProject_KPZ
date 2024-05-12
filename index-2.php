<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Новини</title>
    <style>
        .upheader {
            background-color: white;
            position: fixed;
            top: 0;
            z-index: 100;
            width: 100%;
            margin-top: 50px;
        }

        .pusto {
            margin-top: 170px;
        }
    </style>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/font-awesome.css">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <!--[if lt IE 8]>
            <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src=""border="0"alt=""/></a></div>
    <![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css">
      <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
    <div class="global">
        <!--header-->
        <header class="upheader">
            <div class="upbox">
                <div class="container">
                    <div class="row">
                        <article class="span12">
                            <?php if(isset($_SESSION['username'])): ?>
                                <p style="color:white">Привіт, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Вийти</a></p>
                            <?php else: ?>
                                <p style="color:white">Ви не зареєстровані? <a href="login.html">Авторизація</a> або <a href="index-6.php" class="orange">Реєстрація</a></p>
                            <?php endif; ?>
                        </article>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <article class="span12">
                        <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt=""></a></h1>
                        <div class="navbar navbar_ clearfix">
                            <div class="navbar-inner">
                                <div class="clearfix">
                                    <div class="nav-collapse nav-collapse_">
                                        <ul class="nav sf-menu clearfix">
                                            <li><a href="index.php">Головна сторінка<em></em><strong></strong></a></li>
                                            <li class="active"><a href="index-2.php">Новини<em></em><strong></strong></a></li>
                                            <li><a href="index-3.php">Галерея<em></em><strong></strong></a></li>
                                            <li><a href="index-4.php">Контакти<em></em><strong></strong></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </header>
        <!--content-->
        <div class="pusto">
            <div class="container padTop padBot3">
                <div class="row">
                    <article class="span4">
                        <h2>Новини</h2>
                        <ul class="list2">
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.independent.co.uk/arts-entertainment/art/features/artworks-looted-nazis-jewish-museum-nyc-b1904166.html"><p class="extra-wrap"></p>Ось сліди цього бунту»: дорогоцінні твори мистецтва, пограбовані нацистами</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.nga.gov/exhibitions/2022/called-to-create.html"><p class="extra-wrap"></p>Покликані творити: чорношкірі художники американського півдня</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://southamptoncityartgallery.com/whats-on/in-search-of-a-new-world/"><p class="extra-wrap"></p>У ПОШУКАХ НОВОГО СВІТУ</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.artnews.com/list/art-news/news/best-art-exhibits-2022-1234650570/"><p class="extra-wrap"></p>Визначальні виставки 2022 року</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://hyperallergic.com/790307/top-50-exhibitions-2022/"><p class="extra-wrap"></p>50 найкращих виставок 2022 року</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://indianexpress.com/article/lifestyle/art-and-culture/sold-out-vermeer-exhibition-releases-2600-extra-tickets-8605291/"><p class="extra-wrap"></p>Розпродана виставка Vermeer випускає 2600 додаткових квитків</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.nytimes.com/2023/05/05/arts/design/immersive-art-exhibits.html"><p class="extra-wrap"></p>Мистецькі виставки з ефектом занурення: зачаровують чи забуваються?</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.exhibitionworld.co.uk/news"><p class="extra-wrap"></p>Нові дані Explori свідчать про те, що 85% експонентів обирають, де брати участь у виставці, залежно від вартості</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://edition.cnn.com/style/article/elizabeth-siddal-tate-britain-untold-art-history/index.html"><p class="extra-wrap"></p>Вона була «супермоделлю» періоду прерафаелітів. Зараз історики мистецтва коректують курс на коротке життя Елізабет Сіддал</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.lemonde.fr/en/culture/article/2023/03/21/utagawa-hiroshige-s-ephemeral-fan-art-at-the-musee-guimet_6020109_30.html"><p class="extra-wrap"></p>Ефемерне фан-арт Утагави Хіросіге в музеї Гіме</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://news.artnet.com/art-world/in-pictures-marguerite-humeau-meys-white-cute-bermondsey-2298186"><p class="extra-wrap"></p>Художниця Маргеріт Юмо співпрацювала з А.І. досліджувати життя комах у її нових потойбічних скульптурах. Дивіться їх тут</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.theartnewspaper.com/2023/05/12/independent-fair-new-york-vip-sales-nightmares-dreams"><p class="extra-wrap"></p>Незалежний арт-ярмарок у Нью-Йорку повний снів і кошмарів</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.galleriesnow.net/press-news/"><p class="extra-wrap"></p>Елісон Жак оголошує про представництво Monica Sjöö</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://hota.com.au/whats-on/live/exhibitions/pop-masters"><p class="extra-wrap"></p>ПОП МАЙСТЕРИ:МИСТЕЦТВО ВІД КОЛЕКЦІЯ МУГРАБІ, НЬЮ-ЙОРК</a></li>
                            <li><em class="icon-double-angle-right">&nbsp;</em><a href="https://www.nationalgallery.org.uk/events/after-impressionism-2023-0"><p class="extra-wrap"></p>Після імпресіонізму</a></li>
                        </ul>
                    </article>
                    <article class="span8 margBot3">
                        <h2>Цікаві факти?</h2>
                        <h4><em>""Відкриття Нової Виставки Сучасного Мистецтва в Лондоні".</em></h4>
                        <p class="margBot2">Нова виставка сучасного мистецтва відкрилась в Лондоні цього тижня, представляючи роботи відомих та маловідомих художників з усього світу. Виставка спрямована на підкреслення важливості мистецтва у сучасному суспільстві..</p>
                        <h4><em>"Музей Гуггенхайма Відзначає Ювілей".</em></h4>
                        <p>Музей Гуггенхайма в Нью-Йорку святкує свою 80-річчя з моменту відкриття. З цієї нагоди музей представляє спеціальну виставку, яка відображає його вплив на сучасне мистецтво за останні вісім десятиліть. </p>
                    </article>
                    <article class="span8 margBot3">
                        <h2>Історичні події у світі мистецтва</h2>
                        <h4><em>"Відкриття Лувру як публічного музею (1793 р.)"</em></h4>
                        <p class="margBot2">Після Французької революції Лувр було перетворено з королівського палацу на публічний музей, що стало важливим кроком в доступності мистецтва для загального населення.</p>
                        <h4><em>"Перша Виставка Імпресіоністів (1874 р.)"</em></h4>
                        <p class="margBot2">Перша виставка імпресіоністів у Парижі в 1874 році стала каменем спотикання у світі мистецтва, відкривши дорогу новому напрямку в живопису.</p>
                        <h4><em>"Продаж 'Спасителя світу' за рекордні $450 млн (2017 р.)"</em></h4>
                        <p>В 2017 році картина Леонардо да Вінчі "Спаситель світа" була продана на аукціоні Christie's за рекордні 450 мільйонів доларів, що стало найвищою ціною за твір мистецтва, який коли-небудь продавався на аукціоні.</p>
                    </article>
                    <article class="span8 box-list3">
                        <h2>Популярні новини</h2>
                        <div class="row">
                            <ul class="list3">
                                <li>
                                    <div class="extra-wrap">
                                        <figure><img src="img/page3_pic1.jpg" alt=""></figure>
                                        <h4><em>Після імпресіонізму</em></h4>
                                        <p>На основі виставки «Після імпресіонізму» цей онлайн-курс вивчає, як нове покоління <a href="https://www.nationalgallery.org.uk/events/after-impressionism-2023-0">[...]</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="extra-wrap">
                                        <figure><img src="img/page3_pic2.jpg" alt=""></figure>
                                        <h4><em>У пошуках нового світу</em></h4>
                                        <p>На цій виставці представлені твори мистецтва жителів Гемпшира, Вілтшира, Дорсета та острова Вайт і є частиною <a href="https://southamptoncityartgallery.com/whats-on/in-search-of-a-new-world/">[...]</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="extra-wrap">
                                        <figure><img src="img/page3_pic3.jpg" alt=""></figure>
                                        <h4><em>Поп майстери: мистецтво від колекії Муграбі, Нью-Йорк</em></h4>
                                        <p>Перша в історії масштабна міжнародна виставка в галереї HOTA запрошує вас у світ іконічних художників Енді Ворхола, Кіта Харінга та Жан-Мішеля Баскіата <a href="https://hota.com.au/whats-on/live/exhibitions/pop-masters">[...]</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="extra-wrap">
                                        <figure><img src="img/page3_pic4.jpg" alt=""></figure>
                                        <h4><em>Незалежний арт-ярмарок у Нью-Йорку повний снів і кошмарів</em></h4>
                                        <p>Останнє весняне видання ярмарку акцентує увагу на фантасмагоричному зображенні <a href="https://www.theartnewspaper.com/2023/05/12/independent-fair-new-york-vip-sales-nightmares-dreams">[...]</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
            <section class="follow-box">
                <div class="container">
                    <div class="row">
                        <article class="span12">
                            <h2>Розробники</h2>
                            <div class="row">
                                <ul class="follow">
                                    <li class="span4">
                                        <figure><img src="img/nikita-pgn.jpg" alt=""></figure>
                                        <h3><a href="https://instagram.com/_pugovi4ka_?igshid=ZGUzMzM3NWJiOQ==">Зибін Нікіта</a></h3>
                                        <p>Студент НУБіП спеціальності ІПЗ 2го курсу, молодий розробник web та C#.</p>
                                    </li>
                                    <li class="span4">
                                        <figure><img src="img/vova-pgn.jpg" alt=""></figure>
                                        <h3><a href="https://instagram.com/premisterio?igshid=NTc4MTIwNjQ2YQ==">Грегуль Володимир</a></h3>
                                        <p>Студент НУБіП спеціальності ІПЗ 2го курсу, python та web.</p>
                                    </li>
                                    <li class="span4">
                                        <figure><img src="img/bigdan.png" alt=""></figure>
                                        <h3><a href="https://instagram.com/milij_bogdan?igshid=ZGUzMzM3NWJiOQ==">Андрєєв Богдан</a></h3>
                                        <p>Студент НУБіП спеціальності ІПЗ 2го курсу, розробник SQL, C#, web.</p>
                                    </li>
                                    <li class="span5">
                                        <figure><img src="img/dima3.jpg" alt=""></figure>
                                        <h3><a href="https://instagram.com/glukh0v_d1ma?igshid=NTc4MTIwNjQ2YQ==">Глухов Дмитро</a></h3>
                                        <p>Студент НУБіП спеціальності ІПЗ 2го курсу, розробник C#.</p>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--footer-->
    <footer>
        <div class="main">
            <div class="container">
                <div class="row">
                    <article class="span12">
                        <p>Modern-Gallery &copy; 2023. <a href="index-5.php">Політика Конфіденційності</a></p>
                    </article>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>