<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="/styles/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Статейник</title>
</head>

<body>
    <main class="container">
        <div class="header">
            <h1 class="header__sitename">Статейник</h1>
            <a class="header__github" href="https://github.com/kemorial">
                <img src="/img/github-mark.svg" alt="github" />
            </a>
        </div>
        @yield('content')
    </main>
    <footer class="footer">
        <h1>Статейник</h1>
        <h2>Сделано Кириллом Чубуком</h2>
        <a class="footer__link" href="https://github.com/kemorial">Github: https://github.com/kemorial</a>
    </footer>

</body>

</html>
