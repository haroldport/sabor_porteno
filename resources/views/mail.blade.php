<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sabor Porteño</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://file.myfontastic.com/29yB9EXvwxuGarkqP9krkC/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
</head>
<body>
<header class="main-header">
    <div class="l-container">
        <a href="/">
            <img style="width: 18%" src="http://52.26.227.120/saborportenotg/public/assets/img/logo.png" alt="" class="logo">
        </a>
        <h2>Has recibido un nuevo correo de Sabor Porteño:</h2>
        <table style="width: 100%; border: 1px solid #111">
            <tr>
                <td style="background: #D88609; color: white">Nombre:</td>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <td style="background: #D88609; color: white">Correo</td>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <td style="background: #D88609; color: white">Teléfono</td>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <td style="background: #D88609; color: white">Mensaje</td>
                <td>{{ $bodyMessage }}</td>
            </tr>
        </table>

    </div>

</header>