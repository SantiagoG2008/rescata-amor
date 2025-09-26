<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Noto+Sans+Hebrew:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Concert+One&family=Noto+Sans+Hebrew:wght@100..900&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Rescata Amor</title>
    <style>
        body {
            font-family: "Concert One", sans-serif;
            font-weight: 400;
            margin: 0;
            padding: 0;
        }
        header {
            line-height: 0.5;
            text-align: center;
        }
        .tit2{
            font-family: "Bad Script", cursive;
            font-size: 25px;
        }
        nav {
            display: flex;
            background-color: #f5d2f2;
            padding: 1px;
        }
        nav ul {
            list-style-type: none;
        }
        nav ul li {
            display: inline;
            margin-right: 50px;
            position: relative;
           padding: 40px;
        }
        nav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ccc; 
        }
        nav ul li:hover ul {
            display: block;
            min-width: 200px;
        }
        nav ul li ul li {
             display: block;
            margin: 0;
            white-space: nowrap;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 50px;
        }
        .container .content {
            flex: 1;
            text-align: center;
            font-family: "Bad Script", cursive;
            font-size: 25px;
        }
        .container .logo {
            width: 300px;
            text-align: right;
            margin-right:250px;
           
        }
        .container .logo img {
            width: 450px;
            margin-left: 50px;
        }
    </style>
</head>
<body>

<header>
    <h1>FUNDACION RESCATA AMOR</h1>
    <h1 class="tit2">El amor cambia vidas</h1>
</header>

<nav>
    <ul>
        <li><a href="{{ route('quienes-somos') }}">¿Quiénes somos?</a></li>
        <li><a href="#">En adopción</a>
            <ul>
                <li><a href="{{ route('casos-especiales') }}">Casos especiales</a></li>
                <li><a href="{{ route('adopta') }}">Adopta</a></li>
            </ul>
        </li>
        <li><a href="#">Voluntarios y apadrinamiento</a>
            <ul>
                <li><a href="{{ route('voluntarios') }}">¿Quieres ser voluntario?</a></li>
                <li><a href="{{ route('padrinos') }}">¿Quieres ser padrino?</a></li>
            </ul>
        </li>
        <li><a href="#">Donaciones</a>
            <ul>
                <li><a href="{{ route('donar') }}">¿Qué puedes donar?</a></li>
                <li><a href="{{ route('canales-donacion') }}">Canales de donación</a></li>
            </ul>
        </li>
        <li><a href="{{ route('contacto') }}">Contáctanos</a></li>
        <li><a href="{{ route('login') }}">Inicio sesion</a></li>
    </ul>
</nav>

<div class="container">
    <div class="content">
        <h1>Bienvenidos a Fundación Rescata Amor</h1>
        <p>En Fundación Rescata Amor creemos que el amor cambia vidas, no solo las de los animales, sino también las de las personas que deciden abrir su corazón para ayudar. Somos una organización sin ánimo de lucro dedicada al rescate, rehabilitación y reubicación de animales en situación de abandono o maltrato. Trabajamos incansablemente para ofrecerles una segunda oportunidad, brindándoles el cuidado, cariño y atención que merecen.</p>
    </div>
    <div class="logo">
        <img src="{{ asset('img/rescata_amor.png') }}" alt="Logo de Rescata Amor">
    </div>
</div>

</body>
</html>
