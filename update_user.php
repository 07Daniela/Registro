<!-- update_user.php -->
<?php
require_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cellphone = $_POST['cellphone'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    $user = new User();
    $user->update($id, $name, $email, $password, $cellphone, $city, $country);
}
?>