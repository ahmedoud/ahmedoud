@extends('layouts.app')

@section('title', 'Accueil - A² Tech')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Solutions IT Innovantes</h1>
            <p>A² Tech résout tous vos problèmes informatiques. Développement de logiciels, sites web et applications sur mesure pour faire évoluer votre entreprise.</p>
            <div class="hero-buttons">
                <a href="#" class="primary-btn">Nos Services</a>
                <a href="#" class="secondary-btn">Nous Contacter</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Nos Services</h2>
                <p>Nous offrons une gamme complète de services IT pour accompagner votre transformation digitale</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Développement de Logiciels</h3>
                    <p>Solutions logicielles sur mesure adaptées à vos besoins spécifiques d'entreprise.</p>
                    <ul>
                        <li>Applications desktop</li>
                        <li>Logiciels métier</li>
                        <li>Intégrations API</li>
                        <li>Maintenance</li>
                    </ul>
                    <a href="#" class="service-link">
                        En savoir plus <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Sites Web Professionnels</h3>
                    <p>Création de sites web modernes, responsive et optimisés pour votre présence en ligne.</p>
                    <ul>
                        <li>Design responsive</li>
                        <li>SEO optimisé</li>
                        <li>E-commerce</li>
                        <li>CMS personnalisé</li>
                    </ul>
                    <a href="#" class="service-link">
                        En savoir plus <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Applications Mobiles</h3>
                    <p>Développement d'applications iOS et Android natives et cross-platform.</p>
                    <ul>
                        <li>iOS & Android</li>
                        <li>React Native</li>
                        <li>Flutter</li>
                        <li>Applications hybrides</li>
                    </ul>
                    <a href="#" class="service-link">
                        En savoir plus <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="additional-services">
        <div class="container">
            <div class="services-mini-grid">
                <div class="service-mini-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Support IT</h4>
                </div>
                
                <div class="service-mini-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h4>Solutions Cloud</h4>
                </div>
                
                <div class="service-mini-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Consulting IT</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Restez informé de nos actualités</h2>
            <p>Recevez les dernières nouvelles sur nos services et les tendances IT</p>
            
            <form class="newsletter-form">
                <input type="email" placeholder="Votre adresse email" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn">S'abonner</button>
            </form>
        </div>
    </section>

@endsection
