<?php
// ����������� � ���� ������
$servername = "localhost"; // ��� �������
$username = "����������"; // ��� ������������ ���� ������
$password = "������"; // ������ ������������ ���� ������
$dbname = "clients"; // ��� ���� ������

// �������� ����������
$conn = new mysqli($servername, $username, $password, $dbname);

// �������� ����������
if ($conn->connect_error) {
    die("������� ���������� �� ���� �����: " . $conn->connect_error);
}

// ��������� ������ ����� �����������
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// ���������� � ���������� SQL-������� ��� ������� ������
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "���������� ������ �������������!";
} else {
    echo "������� ��������� �����������!: " . $conn->error;
}

// �������� ����������
$conn->close();
?>
