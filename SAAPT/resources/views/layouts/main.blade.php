<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="/img/fav.png">
    <!-- CSS DA APLICAÇÃO -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <!-- FONTE DA APLICAÇÃO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Convergence&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <div class="location flex">
            <p><ion-icon name="location-outline"></ion-icon>Guanambi</p>
            <div class="networks flex">
                <div class="circle-icon"><ion-icon name="logo-facebook"></ion-icon></div>
                <div class="circle-icon"><ion-icon name="logo-instagram"></ion-icon></div>
                <div class="circle-icon"><ion-icon name="mail-outline"></ion-icon></div>
                <div class="circle-icon"><ion-icon name="call-outline"></ion-icon></div>
                <div class="circle-icon"><ion-icon name="logo-whatsapp"></ion-icon></div>
            </div>
        </div>

        <div class="container container-header flex">
            <div class="img-logo">
                <a href="/"><img src="/img/logo.png" alt="Logo Caminhos Livres"></a>
            </div>
            <nav class="menu-check flex none-list">
                <input type="checkbox" id="check">
                <label for="check"><ion-icon name="menu-outline" id="icon-menu"></ion-icon></label>
                <ul class="links">
                    <li id="back"><a href="/">Avaliar</a>
                    <ion-icon name="arrow-forward-outline" id="back-icon"></ion-icon></li>
                    <li><a href="/touristPoint">Cadastrar ponto turístico</a></li>
                    <li><a href="/">Contraste</a></li>
                    <li><a href="/">+A</a></li>
                    <li><a href="/">-A</a></li>
                    <li><a href="/">Faça login</a></li>
                </ul>

            </nav>                                                                    
        </div>

    </header>

    @yield('content')

    <footer>
        <div id="footer_content">
            <div id="contacts">
                <img src="/img/logo.png" alt="">
                <div id="footer_social_media">
                    <div class="circle-footer">
                        <a href="/"><ion-icon name="logo-facebook"></ion-icon></a>
                    </div>
                    <div class="circle-footer">
                        <a href="/"><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                    <div class="circle-footer">
                        <a href="/"><ion-icon name="mail-outline"></ion-icon></a>
                    </div>
                </div>
            </div>

            <div id="footer-list">
                <ul>
                    <li>
                        <h3>Menu</h3>
                    </li>
                    <li><a href="/" class="footer-link">Avaliar pontos turísticos</a></li>
                    <li><a href="/" class="footer-link">Cadastrar um ponto turístico</a></li>
                    <li><a href="/" class="footer-link">Acessar suporte</a></li>
                </ul>
            </div>

            <div id="footer-list">
                <ul>
                    <li><a href="/" class="footer-link">Políticas de Privacidade</a></li>
                    <li><a href="/" class="footer-link"></a>Termos de uso</li>
                </ul>
            </div>
        </div>

        <div id="footer_copyright" class="flex">
            <p>&copy;2024 Caminhos Livres | Todos os direitos reservados.</p>
        </div>

    </footer>

    <!-- JS DOS ICONS-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- JS DA APLICAÇÃO -->
    <script src="/js/script.js"></script>

</body>

</html>