<!doctype html>

<html lang="{{ app()->getLocale() }}">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Промислові шланги ПВХ: Роздрібно-оптовий магазин гнучких спіральних шлангів з ПВХ у Києві</title>
        <meta name="description" content="Магазин гнучких армованих шлангів з ПВХ в Києві. Ріжемо бухти під замовлення. Купівля шлангів в опт і роздріб. Висока якість, приємні ціни, знижки постійним клієнтам. Доставка по всій Україні.">
        <meta name="robots" content="index,follow">
        <link rel="shortcut icon" href="public/favicon.ico">


        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Промислові шланги ПВХ: Роздрібно-оптовий магазин гнучких спіральних шлангів з ПВХ у Києві">
        <meta name="twitter:description" content="Магазин гнучких армованих шлангів з ПВХ в Києві. Ріжемо бухти під замовлення. Купівля шлангів в опт і роздріб. Висока якість, приємні ціни, знижки постійним клієнтам. Доставка по всій Україні.">

        <!-- Open Graph data -->
        <meta property="og:title" content="Промислові шланги ПВХ: Роздрібно-оптовий магазин гнучких спіральних шлангів з ПВХ у Києві"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.cf2kyiv.com.ua/" />
        <meta property="og:image" content="http://www.cf2kyiv.com.ua/public/img/logo2.png" />
        <meta property="og:description" content="Магазин гнучких армованих шлангів з ПВХ в Києві. Ріжемо бухти під замовлення. Купівля шлангів в опт і роздріб. Висока якість, приємні ціни, знижки постійним клієнтам. Доставка по всій Україні."/>
        <meta property="og:locale" content="uk_UA" />
        <meta property="og:site_name" content="Промислові шланги" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">


        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- CF2HOSE CSS -->
        <link href="public/css/style.css" rel="stylesheet" type="text/css">

        <!-- BOOTSTRAP 4 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- POPPER JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

        <!-- CREATE MAP in CONTACT SECTION -->
        <script src="public/js/map.js"></script>

        <!-- GOOGLE MAP JS -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsuyRHfonVT07a31DbiXJvQgmBB8V8A_I&callback=initMap"></script>

    </head>

    <body>

            @include('header')

            @include('slide')

            @include('whywe')

            @include('scope')

            @include('contacts')

            @include('footer')

    </body>

</html>
