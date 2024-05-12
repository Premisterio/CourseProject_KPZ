<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Контакти</title>
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
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/forms.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <!--[if lt IE 8]>
            <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
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
                                            <li><a href="index-2.php">Новини<em></em><strong></strong></a></li>
                                            <li><a href="index-3.php">Галерея<em></em><strong></strong></a></li>
                                            <li class="active"><a href="index-4.php">Контакти<em></em><strong></strong></a></li>
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
            <div class="container">
                <div class="row">
                    <article class="span12">
                        <figure class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d636.0472595722803!2d30.49594426531131!3d50.381674487625844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c895581f1195%3A0x86896fac0eccc12d!2z0KTQsNC60YPQu9GM0YLQtdGCINCG0L3RhNC-0YDQvNCw0YbRltC50L3QuNGFINCi0LXRhdC90L7Qu9C-0LPRltC5!5e0!3m2!1suk!2sua!4v1684038665537!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="container padBot4">
                <div class="row">
                    <article class="span4">
                        <h2>Адреса</h2>
                        <div class="info">
                            <p>вулиця Героїв Оборони, 16а, Київ, 03041.</p>
                            <p>Телефон: <a href="tel:+380665337222" class="glow-on-hover">+38 (066) 533 72 22</a></p>
                            <p>E-mail: <a href="mailto:premisterio007@gmail.com">premisterio007@gmail.com</a></p>
                        </div>
                        <div class="info marg">
                            <p>вулиця Генерала Родимцева, 19, Київ, 03041.</p>
                            <p>Телефон: <a href="tel:+380953867706" class="glow-on-hover">+38 (095) 386 77 06</a></p>
                            <p>E-mail: <a href="mailto:nik.zubin@gmail.com">nik.zubin@gmail.com</a></p>
                        </div>
                    </article>
                    <article class="span8">
                        <h2>Співпраця з нами</h2>
                        <h4>Якщо у вас є конкретні запити або ви зацікавлені в демонстрації чи продажу своїх робіт на нашому веб-сайті, зв’яжіться з відповідною особою:</h4>
                        <p>Якщо ви зацікавлені в виставленні чи продажі картин, напишіть адміністратору:</p>
                        <ul>
                            <li>
                                Пошта адміністатора: <a href="mailto:premisterio007@gmail.com">premisterio007@gmail.com</a>
                            </li>
                        </ul>
                        <p>Якщо ви маєте пропозиції чи хочете з нами співпрацювати, напишіть власнику:</p>
                        <ul>
                            <li>
                                Пошта власника <a href="mailto:nik.zubin@gmail.com">nik.zubin@gmail.com</a>
                            </li>
                        </ul>
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
                                        <a href="https://instagram.com/_pugovi4ka_?igshid=ZGUzMzM3NWJiOQ==">Зибін Нікіта</a>
                                        <p>Студент НУБіП спеціальності ІПЗ 2го курсу, молодий розробник web та C#.</p>
                                    </li>
                                    <li class="span4">
                                        <figure><img src="img/vova-pgn.jpg" alt=""></figure>
                                        <a href="https://instagram.com/premisterio?igshid=NTc4MTIwNjQ2YQ==">Грегуль Володимир</a>
                                        <p>Студент НУБіП спеціальності ІПЗ 2го курсу, python та web.</p>
                                    </li>
                                    <li class="span4">
                                        <figure><img src="img/bigdan.png" alt=""></figure>
                                        <a href="https://instagram.com/milij_bogdan?igshid=ZGUzMzM3NWJiOQ==">Андрєєв Богдан</a>
                                        <p>Студент НУБіП спеціальності ІПЗ 2го курсу, розробник SQL, C#, web.</p>
                                    </li>
                                    <li class="span5">
                                        <figure><img src="img/dima3.jpg" alt=""></figure>
                                        <a href="https://instagram.com/glukh0v_d1ma?igshid=NTc4MTIwNjQ2YQ==">Глухов Дмитро</a>
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

<style>
    .glow-on-hover {
        transition: all 0.3s ease;
    }

        .glow-on-hover:hover {
            color: #fff;
            background-color: #ffd700;
            box-shadow: 0 0 5px #ffd700;
        }
</style>