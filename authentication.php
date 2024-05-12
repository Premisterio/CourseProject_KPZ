<?php      
    session_start();
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "select *from users where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if ($count == 1) {
        $_SESSION['username'] = $username;
        echo "<h1><center> Логін успішний! </center></h1>";
;       echo "<h1><center>Зараз Ви будете перенаправлені на головну сторінку</center></h1>";
        header("refresh: 3; url=http://localhost/index.php");
    }
    else{  
        echo "<h1><center>Помилка логіну. Неправильне ім'я користувача або пароль.</center></h1>";
        echo "<h1><center><a href='index.php'>Повернутися на головну</a></center></h1>";
    }     
?>
