<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Політика конфіденційності</title>
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
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
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
        <!--content-->
        <div class="pusto"></div>
        <div class="container padTop padBot3">
            <div class="row">
                <article class="span8">
                    <h2>Політика Конфіденційності</h2>
                    <h4>"Вступ"</h4>
                    <p class="margBot4">Ця Політика Конфіденційності описує, як Онлайн-Галерея (далі "Ми", "Наш", "Онлайн-Галерея") збирає, використовує, зберігає, обмінюється та захищає вашу особисту інформацію. Ми рекомендуємо вам уважно прочитати цю Політику, щоб зрозуміти наші процедури щодо обробки ваших персональних даних.</p>
                    <h4>"Збір Інформації"</h4>
                    <p class="margBot2">Ми можемо збирати персональні дані, такі як ім'я, електронна адреса, поштова адреса, номер телефону та іншу інформацію, яку ви надаєте нам в процесі реєстрації на сайті або під час використання наших послуг. </p>
                    <h4>"Використання Інформації"</h4>
                    <p class="margBot2">Ми використовуємо зібрану інформацію для надання, підтримки, захисту та вдосконалення наших послуг, а також для розробки нових продуктів і послуг. </p>
                    <h4>"Зберігання Інформації"</h4>
                    <p class="margBot2">Ми зберігаємо ваші персональні дані на захищених серверах і вживаємо всіх можливих заходів для захисту ваших даних від неправомірного доступу, зміни, розголошення або знищення. </p>
                    <h4>"Обмін Інформацією"</h4>
                    <p class="margBot2">Ми не продамо, не обміняємо та не передамо ваші особисті дані третім особам без вашої виразної згоди, за винятком випадків, передбачених законодавством. </p>
                    <h4>"Ваші Права"</h4>
                    <p class="margBot2">Ви маєте право на доступ до своїх персональних даних, їх виправлення, видалення або обмеження обробки, а також право висловити заперечення проти обробки ваших даних. </p>
                    <h4>"Зміни в Політиці Конфіденційності"</h4>
                    <p class="margBot2">Ми залишаємо за собою право оновлювати або змінювати цю Політику Конфіденційності в будь-який час. Всі оновлення або зміни набувають чинності негайно після публікації на нашому веб-сайті. Ваше продовження використання Онлайн-Галереї після таких змін означає вашу згоду на дотримання оновленої Політики Конфіденційності. </p>
                    <h4>"Зв'язок з нами"</h4>
                    <p class="margBot2">
                        Якщо у вас є будь-які питання щодо цієї Політики Конфіденційності або нашого використання вашої особистої інформації, будь ласка, зв'яжіться з нами за адресою: <a href="mailto:nik.zubin@gmail.com">nik.zubin@gmail.com</a>.

                        Дата останнього оновлення: 13.05.2023

                        Ваше використання наших послуг після дати набрання чинності цих змін означає, що ви приймаєте змінену Політику Конфіденційності. Ми рекомендуємо вам періодично перевіряти цю сторінку на предмет останніх оновлень.
                    </p>
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
    <!--coded by lynx-->
</body>
</html>