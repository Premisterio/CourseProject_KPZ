<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $email = $_POST['email'];  
    $password = $_POST['pass'];  
    $cpassword = $_POST['cpass'];  
      
    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $cpassword = stripcslashes($cpassword);  
    $username = mysqli_real_escape_string($con, $username);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  
    $cpassword = mysqli_real_escape_string($con, $cpassword);  
      
    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);
    
    if (mysqli_num_rows($res_u) > 0) {
      echo "<h1><center>Помилка реєстрації. Ім'я користувача вже зайняте.</center></h1>";
      echo "<h1><center><a href='index.html'>Повернутися на головну</a></center></h1>";
    } else if (mysqli_num_rows($res_e) > 0) {
      echo "<h1><center/>Помилка реєстрації. Електронна пошта вже зареєстрована.</center></h1>";
      echo "<h1><center><a href='index.html'>Повернутися на головну</a></center></h1>";
    } else if ($password != $cpassword) {
      echo "<h1><center>Помилка реєстрації. Паролі не збігаються.</center></h1>";
      echo "<h1><center><a href='index.html'>Повернутися на головну</a></center></h1>";
    } else {
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
      if (mysqli_query($con, $sql)) {
        echo "<h1><center>Реєстрація успішна.</center></h1>";
;       echo "<h1><center>Зараз Ви будете перенаправлені на сторінку авторизації</center></h1>";
        header("refresh: 3; url=http://localhost/login.html");
      } else {
        echo "<h1><center>Помилка реєстрації. Будь-ласка спробуйте пізніше.</center></h1>";
        echo "<h1><center><a href='index.html'>Повернутися на головну</a></center></h1>";
      }
    }
?>