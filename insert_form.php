<!DOCTYPE html>
<html>
<head>
    <title>Registrar usuario</title>
</head>
<body>
    <h1>Registrar usuario</h1>
    <form action="insert_user.php" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" required><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <label for="cellphone">Celular:</label>
        <input type="text" name="cellphone" required><br>

        <label for="city">Ciudad:</label>
        <input type="text" name="city" required><br>

        <label for="country">País:</label>
        <input type="text" name="country" required><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>