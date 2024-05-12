<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Онлайн-галерея</title>
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
    <link rel="stylesheet" href="css/touchTouch.css">
    <link rel="stylesheet" href="font/font-awesome.css">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script>
        $(window).load(function () {
            // Initialize the gallery
            $('.gallery-box .span4 a').touchTouch();
        });
    </script>
</head>
<body>
        <div class="global">
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
                                            <li class="active"><a href="index.php">Головна сторінка<em></em><strong></strong></a></li>  
                                            <li><a href="index-2.php">Новини<em></em><strong></strong></a></li>
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
        <div class="pusto">
            <section class="slider">
                <div class="container">
                    <div class="row">
                        <article class="span4 gallery-box">
                            <figure><img src="img/page1_pic.jpg" alt=""></figure>
                        </article>
                        <article class="span8 pull-left">
                            <p class="title1">Modern-gallery</p>
                            <p class="title2">Для <em>всіх!</em></p>
                            <p class="margBot">Наша онлайн-галерея - це місце, де творчість та технології зливаються в одне, створюючи унікальне та вражаюче візуальне досвід. У цій віртуальній просторі, ви можете відкрити для себе широкий діапазон творів мистецтва, від класичних картин до сучасних інсталяцій. Усі вони відбираються нашою командою експертів з метою представити вам найкращі та найяскравіші приклади мистецтва.</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="dog-holder">
                <div class="container">
                    <div class="row">
                        <article class="span5 dog-box">
                            <figure><img src="img/page1_pic2.jpg" alt=""></figure>
                        </article>
                        <article class="span7">
                            <p class="title1">Вітаємо!</p>
                            <h4>Ласкаво просимо до нашої онлайн галереї!</h4>
                            <p class="margBot">Запрошуємо вас на захоплюючу подорож по світу мистецтва. Розкрийте свою творчість і насолоджуйтесь унікальними шедеврами, представленими на нашому сайті. Знайдіть натхнення і відчуйте магію мистецтва у кожній деталі. Дізнайтеся більше про талановитих художників та їхні роботи. Відкрийте світ краси і естетики разом з нами.</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="about-box">
                <div class="container">
                    <div class="row">
                        <article class="span6">
                            <h2>Про нас</h2>
                            <p class="margBot">
                                Ми - команда ентузіастів і творців, які віддані мистецтву і його просуванню. Наша мета - створити онлайн галерею, яка допоможе зблизити мистецтво з людьми з усього світу. Ми віримо в силу візуального мистецтва, яке може надихати, розширювати межі та перетворювати наше сприйняття світу.

                                У нашій галереї ви знайдете широкий вибір творів мистецтва різних жанрів, стилів і епох. Ми пропонуємо унікальні картини, фотографії, скульптури та інші форми візуального вираження, створені великими майстрами і талановитими новаторами. Кожна робота, яку ви побачите, відображає унікальну історію, емоції та бачення автора.

                                Ми прагнемо забезпечити зручний і захоплюючий досвід перегляду мистецтва. Наш сайт пропонує зручну навігацію, високу якість зображень і можливість дізнатися більше про кожну роботу та її автора. Ми також раді ділитися інформацією про мистецтво, організовувати виставки та події, щоб залучити спільноту мистецтва та створити простір для обміну думками та ідеями.

                                Ми віримо, що мистецтво має бути доступним для всіх і сприяти розумінню, творчості та розвитку суспільства. Приєднуйтесь до нас в цій незабутній подорожі мистецтвом і дізнайтеся більше про неповторну красу, що оточує нас.

                                Ласкаво просимо до нашої онлайн галереї!
                            </p>
                            <a href="index-4.php" class="btn btn-primary btn3">Більше інформації про нас тут!<em class="icon-double-angle-right"></em></a>
                        </article>
                        <article class="span6">
                            <ul class="list1">
                                <li>
                                    <div class="pull-left"><i class="icon-comments-alt">&nbsp;</i></div>
                                    <div class="extra-wrap">
                                        <a href="index-2.php">Новини</a>
                                        <p>Залишайтесь на хвилі найсвіжіших подій і новин з нашою онлайн-галереєю! Ми розуміємо, наскільки важливо бути в курсі останніх подій у світі мистецтва, тому ми пропонуємо вам легкий і зручний спосіб перегляду новин.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="pull-left"><i class="icon-heart-empty">&nbsp;</i></div>
                                    <div class="extra-wrap">
                                        <a href="index-3.php">Галерея</a>
                                        <p>Наша онлайн-галерея картин представляє собою справжній скарбницю мистецтва, яка відкриває двері у різні епохи та культури. Завдяки сучасним технологіям, ви можете відчути всю глибину та багатство кольорів, деталізацію та техніки, використані художниками, не виходячи з комфорту вашого дому.</p>
                                    </div>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
                </
            </section>
            <section class="gallery-box">
                <div class="container">
                    <div class="row">
                        <article class="span12">
                            <h2>Галерея</h2>
                            <div class="row">
                                <article class="span4"><figure><a href="img/vejerya.jpg"><img src="img/vejerya.jpg" alt="Таємна вечеря" title="Таємна вечеря"><strong class="icon-zoom-in"></strong></a></figure></article>
                                <article class="span4"><figure><a href="img/page1_pic4.jpg"><img src="img/page1_pic4.jpg" alt="Зоряна ніч"><strong class="icon-zoom-in"></strong></a></figure></article>
                                <article class="span4"><figure><a href="img/page1_pic5.jpg"><img src="img/page1_pic5.jpg" alt="Венера Урбінська"><strong class="icon-zoom-in"></strong></a></figure></article>
                                <article class="span4"><figure><a href="img/page1_pic6.jpg"><img src="img/page1_pic6.jpg" alt="Стійність пам'яті"><strong class="icon-zoom-in"></strong></a></figure></article>
                                <article class="span4"><figure><a href="img/page1_pic7.jpg"><img src="img/page1_pic7.jpg" alt="Схід сонця. Враження"><strong class="icon-zoom-in"></strong></a></figure></article>
                                <article class="span4"><figure><a href="img/page1_pic8.jpg"><img src="img/page1_pic8.jpg" alt="Сосна"><strong class="icon-zoom-in"></strong></a></figure></article>
                            </div>
                            <a href="index-3.php" class="btn btn-link">Галерея<em class="icon-double-angle-right">&nbsp;</em></a>
                        </article>
                    </div>
                </div>
            </section>
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
                <!-- {%FOOTER_LINK} -->
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        $('.gallery-box a strong').css({ opacity: 0 });
        $('.gallery-box a').hover(function () {
            $(this).find('strong').stop().animate({ opacity: 0.55 }, 350, "easeOutSine");
        }, function () {
            $(this).find('strong').stop().animate({ opacity: 0 }, 350, "easeOutSine");
        })

        if ($.browser.mozilla) {
            $('.btn.btn-primary.btn1 > em').css({ 'position': 'relative', Нагору: '4px' });
        }
    </script>
</body>
</html>