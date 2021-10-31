<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" value="{{ csrf_token() /* Laravel token */ }}">

        <meta property="og:description" content="Doručovací systém pre eshopy - UKF Web Kuriér">
        <meta property="og:title" content="UKF Web Kuriér - ScrumTeamOne">
        <meta property='og:site_name' content='UKF Web Kuriér - ScrumTeamOne'>
        <meta property='og:type' content='website'>
        <meta name="keywords" content="ukf, web, kurier, eshop, pravidlo">
        <meta name="author" content="ScrumTeamOneUKF">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">

        <title>UKF Web Kuriér - ScrumTeamOne</title>
    </head>
    <body>
        @if (Auth::check())
        <script>
            window.Laravel = {!!json_encode([
                   'isLoggedin' => true,
                   'user' => Auth::user()
               ])!!}
        </script>
    @else
        <script>
            window.Laravel = {!!json_encode([
                    'isLoggedin' => false
                ])!!}
        </script>
    @endif
    <div id="app">
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
    </html>
