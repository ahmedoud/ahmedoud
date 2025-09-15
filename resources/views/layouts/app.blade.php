<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'A² Tech - Solutions IT Innovantes')</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Vite (CSS + JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="{{ url('/') }}" class="logo">A²<span>Tech</span></a>

            <nav>
                <ul class="nav-menu">
                    <li><a href="{{ url('/') }}" class="nav-link">Accueil</a></li>
                    <li><a href="#services" class="nav-link">Services</a></li>
                    <li><a href="#about" class="nav-link">À propos</a></li>
                    <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
            </nav>

            <a href="#contact-section" class="cta-button">Devis gratuit</a>

            <div class="mobile-menu-btn" aria-label="Ouvrir le menu" role="button" tabindex="0">
                <i class="fas fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Liens Rapides</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact-section">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Nos Services</h3>
                    <ul class="footer-links">
                        <li><a href="#services">Développement Web</a></li>
                        <li><a href="#services">Applications Mobiles</a></li>
                        <li><a href="#services">Logiciels sur Mesure</a></li>
                        <li><a href="#services">Support IT</a></li>
                        <li><a href="#services">Solutions Cloud</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Contact</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> 123 Avenue des Technologies<br>75001 Paris, France</p>
                        <p><i class="fas fa-phone"></i> +222 47 50 92 23</p>
                        <p><i class="fas fa-envelope"></i> ahmedoudaa451@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© {{ date('Y') }} A² Tech. Tous droits réservés.</p>
                <div class="footer-bottom-links">
                    <a href="#">Mentions Légales</a>
                    <a href="#">Politique de Confidentialité</a>
                    <a href="#">CGV</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
