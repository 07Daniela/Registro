<!-- edit_user_form.php -->
<?php
require_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $user = new User();
    $userData = $user->getUserById($id);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar usuario</title>
</head>
<body>
    <h1>Editar usuario</h1>
    <form action="update_user.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $userData['id']; ?>">

        <label for="name">Nombre:</label>
        <input type="text" name="name" value="<?php echo $userData['nombre']; ?>" required><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" value="<?php echo $userData['correo']; ?>" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" value="<?php echo $userData['contrasena']; ?>" required><br>

        <label for="cellphone">Celular:</label>
        <input type="text" name="cellphone" value="<?php echo $userData['celular']; ?>" required><br>

        <label for="city">Ciudad:</label>
        <input type="text" name="city" value="<?php echo $userData['ciudad']; ?>" required><br>

        <label for="country">País:</label>
        <input type="text" name="country" value="<?php echo $userData['pais']; ?>" required><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>