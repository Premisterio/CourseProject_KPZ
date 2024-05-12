<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Галерея</title>
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
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/add.css">

    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/touchTouch.jquery.js"></script>

    <style>
        /* Styles for Cart Window */
        #cart-window {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            max-height: 80vh;
            overflow-y: auto;
            background-color: #fff;
            padding: 20px;
        }

        .price {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }

        .cart-buttons {
            margin-top: 20px;
        }

        .total-price {
            font-weight: bold;
            font-size: 16px;
        }

        .remove-button {
            color: #f00;
            cursor: pointer;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="global">
        <!-- Header -->
        <header class="upheader">
            <div class="upbox">
                <div class="container">
                    <div class="row">
                        <article class="span12">
                            <?php if(isset($_SESSION['username'])): ?>
                            <p style="color:white">Привіт, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Вийти  </a><a href="#" style="color:yellow" onclick="toggleCart()">Кошик</a></p>
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
                                            <li class="active"><a href="index-3.php">Галерея<em></em><strong></strong></a></li>
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

        <!-- Content -->
        <div class="pusto">
        <div class="container padTop padBot">
            <div class="row">
                <article class="span12">
                    <h2>Галерея</h2>
                    <div class="row">
                        <ul class="thumb-pad2">
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic8.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>Staircase to heaven</em></h4>
                                    <p>На картині, видно металеві сходи, які здається, ведуть до неба. Сходи знаходяться в середині широкого та пустого поля, в якому не видно жодного іншого живого чи рухомого об'єкту. <a href="https://openai.com/product/dall-e-2">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$1800</p>
                                        <button class="button" onclick="addToCart('Staircase to heaven', '1800$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic2.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>«Поцілунок» </em></h4>
                                    <p>Картина австрійського художника і графіка Густава Клімта (1862–1918), одного з головних представників віденської сецесії. Створена в 1908–1909 роках. Зберігається у Галереї Бельведер, Відень (інвен. номер 912). <a href="https://uk.wikipedia.org/wiki/%D0%9F%D0%BE%D1%86%D1%96%D0%BB%D1%83%D0%BD%D0%BE%D0%BA_(%D0%9A%D0%BB%D1%96%D0%BC%D1%82)">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$1500</p>
                                        <button class="button" onclick="addToCart('Поцілунок', '1500$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic3.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>«Зо́ряна ніч»</em></h4>
                                    <p>Картина голландського художника-постімпресіоніста Вінсента ван Гога, написана в червні 1889 року. Ця широко відома картина демонструє неповторну індивідуальну манеру письма ван Гога, його особливе бачення навколишнього світу. Небо, зорі і місячний серп рухаються в єдиному екстатичному хвилеподібному ритмі. <a href="https://uk.wikipedia.org/wiki/%D0%97%D0%BE%D1%80%D1%8F%D0%BD%D0%B0_%D0%BD%D1%96%D1%87">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$1200</p>
                                        <button class="button" onclick="addToCart('Зо́ряна ніч', '1200$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic4.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>"Дівчина з перлинною сережкою" </em></h4>
                                    <p>(1665) - Йоганнес Вермеер: На цій картині зображено молоду дівчину, яка озирається через плече, маючи на вуху перлову сережку. <a href="https://uk.wikipedia.org/wiki/%D0%94%D1%96%D0%B2%D1%87%D0%B8%D0%BD%D0%B0_%D0%B7_%D0%BF%D0%B5%D1%80%D0%BB%D0%BE%D0%B2%D0%BE%D1%8E_%D1%81%D0%B5%D1%80%D0%B5%D0%B6%D0%BA%D0%BE%D1%8E_(%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%B0)">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$900</p>
                                        <button class="button" onclick="addToCart('Дівчина з перловою сережкою', '900$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic5.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>Вечеря в Емаусі </em></h4>
                                    <p>Картина італійського майстра Караваджо, що зберігається в Пінакотеці Брера (Сала XXIX) в Мілані (Італія). <a href="https://uk.wikipedia.org/wiki/%D0%92%D0%B5%D1%87%D0%B5%D1%80%D1%8F_%D0%B2_%D0%95%D0%BC%D0%B0%D1%83%D1%81%D1%96_(%D0%9A%D0%B0%D1%80%D0%B0%D0%B2%D0%B0%D0%B4%D0%B6%D0%BE,_%D0%9B%D0%BE%D0%BD%D0%B4%D0%BE%D0%BD)">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$2000</p>
                                        <button class="button" onclick="addToCart('Вечеря в Емаусі', '800$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic6.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>Times Square 2077</em></h4>
                                    <p>На передньому плані картини знаходиться Таймс-сквер, який розширився і перетворився на віртуальне місто з високими будівлями, що мерехтять неоновими відблисками. <a href="https://openai.com/product/dall-e-2">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$2000</p>
                                        <button class="button" onclick="addToCart('Times Square 2077', '2000$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic7.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>Coffee cup</em></h4>
                                    <p>Картина чашки кави символізує спокій та зосередженість в середовищі, що швидко змінюється. У світі, де все прискорюється, і кожен переслідує свої цілі, чашка кави нагадує про значення сповільнення та насолоди моментом. <a href="https://openai.com/product/dall-e-2">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$500</p>
                                        <button class="button" onclick="addToCart('Coffee cup', '500$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic1.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>«Мона Ліза»</em></h4>
                                    <p>(1503-1506) – Леонардо да Вінчі: Це найвідоміший портрет у світі, на якому зображена жінка з загадковою усмішкою. Леонардо да Вінчі використовував техніку сфумато для створення м’якого переходу між тінями та світлом на обличчі Мона Лізи. <a href="https://uk.wikipedia.org/wiki/%D0%9C%D0%BE%D0%BD%D0%B0_%D0%9B%D1%96%D0%B7%D0%B0">Детальніше про цю картину</a></p>
                                    <p class="price">$1000</p>
                                    <div class="container">
                                        <button class="button" onclick="addToCart('Мона Ліза', '1000$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic9.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>"Heather portal" </em></h4>
                                    <p>На картині, зображено сталеву пустелю, в якій кількість рослин та життя мінімальна, як будь-який безводний та безлюдний простір. Портал виглядає досить реалістично, як будь-яка інша частина цієї картини.  <a href="https://openai.com/product/dall-e-2">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$1600</p>
                                        <button class="button" onclick="addToCart('Heather portal', '1600$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic10.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>"City made out of metal - 2025" </em></h4>
                                    <p>Картина, яку ви бачите, зображує майбутнє місто, яке нагадує мікросхему. Воно виглядає досить реалістично та деталізовано, немов намальоване фото реального об'єкта. <a href="https://openai.com/product/dall-e-2">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$2200</p>
                                        <button class="button" onclick="addToCart('City made out of metal - 2025', '2200$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic11.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>"Автопортрет без бороди" </em></h4>
                                    <p>Вінсент намалював цей автопортрет після того, як його стосунки з Гогеном закипіли. В результаті на цьому конкретному портреті він виглядає досить стурбованим. Смішно відзначити, що він подарував своїй матері цю приголомшливу картину на день народження <a href="https://uk.wikipedia.org/wiki/%D0%92%D1%96%D0%BD%D1%81%D0%B5%D0%BD%D1%82_%D0%B2%D0%B0%D0%BD_%D0%93%D0%BE%D0%B3">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$1400</p>
                                        <button class="button" onclick="addToCart('Автопортрет без бороди', '1400$.')">Додати</button>
                                    </div>
                                </div>
                            </li>
                            <li class="span3 thumbnail maxheight">
                                <figure><img src="img/page4_pic12.jpg" alt=""><em></em></figure>
                                <div class="caption">
                                    <h4><em>«Створення Адама»</em></h4>
                                    <p>Фреска Мікеланджело Буонарроті на стелі Сикстинської капели, створена ним близько 1511 —1512 років. Це — одна із центральних композицій, яка ілюструє створення людини Богом <a href="https://en.wikipedia.org/wiki/The_Creation_of_Adam">Детальніше про цю картину</a></p>
                                    <div class="container">
                                    <p class="price">$950</p>
                                        <button class="button" onclick="addToCart('Дівчинка зі свічкою', '950$.')">Додати</button>
                                    </div>
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
        <!-- Cart Window -->
        <div id="cart-window">
            <h2 style="font-size:34px"><b>Кошик<b/></h2>
            <ul id="cart-items"></ul>
            <p class="total-price">Загальна сума: <span id="total-price">$0</span></p>
            <div class="cart-buttons">
                <button class="button" onclick="collapseCart()">Згорнути</button>
                <button class="button" onclick="pay()">Сплатити</button>
            </div>
        </div>

        <script>
            var cartItems = [];

            function toggleCart() {
                var cartWindow = document.getElementById('cart-window');
                if (cartWindow.style.display === 'none') {
                    cartWindow.style.display = 'block';
                    renderCartItems();
                    calculateTotalPrice();
                } else {
                    cartWindow.style.display = 'none';
                }
            }

            function collapseCart() {
                var cartWindow = document.getElementById('cart-window');
                cartWindow.style.display = 'none';
            }

            function addToCart(name, price) {
                var item = {
                    name: name,
                    price: price
                };
                cartItems.push(item);
                renderCartItems();
                calculateTotalPrice();
            }

            function removeFromCart(index) {
                cartItems.splice(index, 1);
                renderCartItems();
                calculateTotalPrice();
            }

            function renderCartItems() {
                var cartItemsList = document.getElementById('cart-items');
                cartItemsList.innerHTML = '';
                cartItems.forEach(function (item, index) {
                    var listItem = document.createElement('li');
                    listItem.textContent = item.name + ' - ' + item.price;
                    var removeButton = document.createElement('span');
                    removeButton.innerHTML = '&times;';
                    removeButton.classList.add('remove-button');
                    removeButton.addEventListener('click', function () {
                        removeFromCart(index);
                    });
                    listItem.appendChild(removeButton);
                    cartItemsList.appendChild(listItem);
                });
            }

            function calculateTotalPrice() {
                var totalPrice = 0;
                cartItems.forEach(function (item) {
                    var itemPrice = parseFloat(item.price.replace('$', ''));
                    totalPrice += itemPrice;
                });
                var totalPriceElement = document.getElementById('total-price');
                totalPriceElement.textContent = '$' + totalPrice.toFixed(2);
            }

            function pay() {
                // Implement payment logic here
                alert('Покупка успішна!');
                cartItems = [];
                renderCartItems();
                calculateTotalPrice();
            }
        </script>
    </div>
</body>

</html>


