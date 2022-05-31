<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMKS</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<style>
    .test {
    font: 22px Arial;
    display: inline-block;
    padding: 1em 2em;
    text-align: center;
    color: white;
    background: red; /* default color */

    /* "to left" / "to right" - affects initial color */
    background: linear-gradient(to left, salmon 50%, lightblue 50%) right;
    background-size: 200%;
    transition: .5s ease-out;
}
.test:hover {
    background-position: left;
}
</style>

</head>
<body>
    @include("components.header")
    @include("components.navbar")
    @include("components.slider")
    @yield("content")

    <script src="https://kit.fontawesome.com/b595dd4b2c.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>