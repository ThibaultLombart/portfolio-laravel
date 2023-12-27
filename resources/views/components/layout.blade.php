<!doctype html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Website and Portfolio of Thibault Lombart, Junior Developper at Institute of Technology of Lens, France" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{Vite::asset("/resources/pictures/favicon.png")}}" />
    @vite(['resources/css/app.css'])
    <title>{{$titre ?? "Application Laravel"}}</title>
</head>
<body>

<header>
    <x-header></x-header>
</header>

<main class="main-container">
    {{$slot}}
</main>

<footer>
    <x-footer></x-footer>
</footer>

</body>
</html>
