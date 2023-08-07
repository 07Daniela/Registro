<!-- delete_user.php -->
<?php
require_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $user = new User();
    $user->delete($id);
}
?>