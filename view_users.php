<!-- view_users.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Usuarios registrados</title>
</head>
<body>
    <h1>Usuarios registrados</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th>Celular</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Acciones</th>
        </tr>
        <?php
        require_once 'User.php';

        $user = new User();
        $user->listUsers();
        ?>
    </table>
</body>
</html>