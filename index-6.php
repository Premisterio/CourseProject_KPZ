<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Реєстраційна форма</title>
    <link rel="stylesheet" type="text/css" href="style_login.css" />
  </head>
  <body>
    <div id="frm">
      <h1>Реєстрація</h1>
      <form
        name="f1"
        action="registration.php"
        onsubmit="return validation()"
        method="POST"
      >
        <p>
          <label>Ім'я користувача:</label>
          <input type="text" id="user" name="user" />
        </p>
        <p>
          <label>Email:</label>
          <input type="email" id="email" name="email" />
        </p>
        <p>
          <label>Пароль:</label>
          <input type="password" id="pass" name="pass" />
        </p>
        <p>
          <label>Підтвердження паролю:</label>
          <input type="password" id="cpass" name="cpass" />
        </p>
        <p>
          <input type="submit" id="btn" value="Зареєструватися" />
        </p>
      </form>
      <h2>Вже зареєстровані? <a href="login.html">Авторизуйтесь</a></h2>
    </div>
    <script>
      function validation() {
        var id = document.f1.user.value;
        var email = document.f1.email.value;
        var ps = document.f1.pass.value;
        var cps = document.f1.cpass.value;

        if (
          id.length == "" ||
          email.length == "" ||
          ps.length == "" ||
          cps.length == ""
        ) {
          alert("Заповність всі поля.");
          return false;
        } else if (ps != cps) {
          alert("Паролі не співпадають.");
          return false;
        } else {
          return true;
        }
      }
    </script>
  </body>
</html>
