<?php 

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$telefono = $_POST['telefono'];


//echo $correo . " " . $nombre . " " . $mensaje;


$destinatario = "denarpadilla.lionel@gmail.com";
$asunto = $_POST['asunto']; 
$cuerpo = '
    <html> 
        <head> 
            <title>Prueba de envio de correo</title> 
        </head>
        <body> 
            <h3>Correo realizado desde Informatica Virtual contactos</h3>
            <p> 
                Contacto:  '.$nombre .' <br>
                Telefono: '.$telefono.' <br>
                Mensaje: '.$mensaje.'    
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "Correo enviado"; 
?> 

<a href="../index.html">Volver a inicio</a>