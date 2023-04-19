<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<style>

.container-header div {
    height: 125px;
    padding: 15px 30px;
    background-color: #ffffff;
    color: black;
    display: flex;
    justify-content: space-between;
}

.nav-bar {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 15px;
    text-transform: uppercase;
    font-weight: 750;
}

.nav-bar li:hover {
    color: #0282f9;
}

.container-footer {
    background-color: grey;
    height: 125px;
}
</style>

<body>
    <header>
        <div class="container-header">
            <div>
                <img src="..\storage\app\public\assets\buy-comics-digital-comics.png" alt="">
                <ul class="nav-bar">
                    <li>characters</li>
                    <li>comics</li>
                    <li>movies</li>
                    <li>tv</li>
                    <li>games</li>
                    <li>collectibles</li>
                    <li>videos</li>
                    <li>fans</li>
                    <li>news</li>
                    <li>shop</li>
                </ul>
            </div>
        </div>
    </header>
    <body>
        
    </body>
    <footer>
    <div class="container-footer">
        <h1>
            Footer
        </h1>
    </div>
    </footer>
</body>

</html>