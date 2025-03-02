<?php
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['nombre']) && !empty($_POST['clave'])) {
            $nombre = $_POST['nombre'];
            $clave = $_POST['clave'];
            
            $_SESSION['nombreSesion'] = $nombre;
            $_SESSION['claveSesion'] = '1234';
            
            // El código original compara la clave de sesión con la entrada del formulario sin verificar realmente la clave proporcionada.
            // Es probable que quieras tener una verificación adecuada de la clave en función de tu lógica de autenticación.
            
            if ($_SESSION['nombreSesion'] == $nombre && $_SESSION['claveSesion'] == $clave) {
                header('Location: pagina_principal.php');
                exit();
            } else {
                header('Location: index.html');
                exit();
            }
        } else {
            echo "Por favor, ingresa los datos";
        }
    }
?>
