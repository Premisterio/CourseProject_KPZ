<?php
// Подключение к базе данных
$servername = "localhost"; // Имя сервера
$username = "користувач"; // Имя пользователя базы данных
$password = "пароль"; // Пароль пользователя базы данных
$dbname = "clients"; // Имя базы данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Помилка підключення до бази даних: " . $conn->connect_error);
}

// Получение данных формы регистрации
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// Подготовка и выполнение SQL-запроса для вставки данных
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "користувач успішно зареєстрований!";
} else {
    echo "Помилка реєстрації користувача!: " . $conn->error;
}

// Закрытие соединения
$conn->close();
?>
