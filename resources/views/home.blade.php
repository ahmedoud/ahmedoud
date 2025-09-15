@extends('layouts.app')

@section('title', 'Accueil - A² Tech')

@section('content')

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="container">
        <h1>Solutions IT Innovantes</h1>
        <p>A² Tech résout tous vos problèmes informatiques. Développement de logiciels, sites web et applications sur mesure pour faire évoluer votre entreprise.</p>
        <div class="hero-buttons">
            <a href="#services" class="primary-btn">Nos Services</a>
            <a href="#contact-section" class="secondary-btn">Nous Contacter</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-title">
            <h2>Nos Services</h2>
            <p>Nous offrons une gamme complète de services IT pour accompagner votre transformation digitale</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                <h3>Développement de Logiciels</h3>
                <p>Solutions logicielles sur mesure adaptées à vos besoins spécifiques d'entreprise.</p>
                <ul>
                    <li>Applications desktop</li>
                    <li>Logiciels métier</li>
                    <li>Intégrations API</li>
                    <li>Maintenance</li>
                </ul>
                <a href="#" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon"><i class="fas fa-globe"></i></div>
                <h3>Sites Web Professionnels</h3>
                <p>Création de sites web modernes, responsive et optimisés pour votre présence en ligne.</p>
                <ul>
                    <li>Design responsive</li>
                    <li>SEO optimisé</li>
                    <li>E-commerce</li>
                    <li>CMS personnalisé</li>
                </ul>
                <a href="#" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>Applications Mobiles</h3>
                <p>Développement d'applications iOS et Android natives et cross-platform.</p>
                <ul>
                    <li>iOS & Android</li>
                    <li>React Native</li>
                    <li>Flutter</li>
                    <li>Applications hybrides</li>
                </ul>
                <a href="#" class="service-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="additional-services">
    <div class="container">
        <div class="services-mini-grid">
            <div class="service-mini-card">
                <div class="service-icon"><i class="fas fa-headset"></i></div>
                <h4>Support IT</h4>
            </div>
            <div class="service-mini-card">
                <div class="service-icon"><i class="fas fa-cloud"></i></div>
                <h4>Solutions Cloud</h4>
            </div>
            <div class="service-mini-card">
                <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                <h4>Consulting IT</h4>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>Notre Portfolio</h2>
            <p>Découvrez quelques-unes de nos réalisations récentes</p>
        </div>
        <div class="portfolio-filters">
            <button class="filter-btn active">Tous</button>
            <button class="filter-btn">Sites Web</button>
            <button class="filter-btn">Applications</button>
            <button class="filter-btn">Logiciels</button>
            <button class="filter-btn">E-commerce</button>
        </div>
        <div class="portfolio-grid">
            <!-- Projet 1 -->
            <div class="portfolio-card">
                <div class="portfolio-img">
                    <img src="https://via.placeholder.com/400x220?text=E-commerce+B2B" alt="Plateforme E-commerce B2B">
                    <span class="portfolio-badge e-commerce">E-commerce</span>
                </div>
                <div class="portfolio-content">
                    <h3>Plateforme E-commerce B2B</h3>
                    <p>Solution complète de vente en ligne pour grossistes avec gestion avancée des stocks.</p>
                    <div class="portfolio-tags">
                        <span>React</span>
                        <span>Node.js</span>
                        <span>MongoDB</span>
                        <span>Stripe</span>
                    </div>
                    <a href="#" class="portfolio-link">Voir le projet →</a>
                </div>
            </div>
            <!-- Projet 2 -->
            <div class="portfolio-card">
                <div class="portfolio-img">
                    <img src="https://via.placeholder.com/400x220?text=App+Mobile+Gestion" alt="Application Mobile de Gestion">
                    <span class="portfolio-badge applications">Applications</span>
                </div>
                <div class="portfolio-content">
                    <h3>Application Mobile de Gestion</h3>
                    <p>App mobile pour la gestion des ressources humaines et du temps de travail.</p>
                    <div class="portfolio-tags">
                        <span>React Native</span>
                        <span>Firebase</span>
                        <span>Express.js</span>
                    </div>
                    <a href="#" class="portfolio-link">Voir le projet →</a>
                </div>
            </div>
            <!-- Projet 3 -->
            <div class="portfolio-card">
                <div class="portfolio-img">
                    <img src="https://via.placeholder.com/400x220?text=Site+Corporate" alt="Site Corporate Responsive">
                    <span class="portfolio-badge sites-web">Sites Web</span>
                </div>
                <div class="portfolio-content">
                    <h3>Site Corporate Responsive</h3>
                    <p>Site web institutionnel moderne avec système de gestion de contenu intégré.</p>
                    <div class="portfolio-tags">
                        <span>WordPress</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>
                    <a href="#" class="portfolio-link">Voir le projet →</a>
                </div>
            </div>
            <!-- Projet 4 -->
            <div class="portfolio-card">
                <div class="portfolio-img">
                    <img src="https://via.placeholder.com/400x220?text=Logiciel+Comptabilite" alt="Logiciel de Comptabilité">
                    <span class="portfolio-badge logiciels">Logiciels</span>
                </div>
                <div class="portfolio-content">
                    <h3>Logiciel de Comptabilité</h3>
                    <p>Solution desktop complète pour la gestion comptable des PME.</p>
                    <div class="portfolio-tags">
                        <span>C#</span>
                        <span>.NET</span>
                        <span>SQL Server</span>
                        <span>WPF</span>
                    </div>
                    <a href="#" class="portfolio-link">Voir le projet →</a>
                </div>
            </div>
            <!-- Projet 5 -->
            <div class="portfolio-card">
                <div class="portfolio-img">
                    <img src="https://via.placeholder.com/400x220?text=Marketplace+Multi-vendeurs" alt="Marketplace Multi-vendeurs">
                    <span class="portfolio-badge e-commerce">E-commerce</span>
                </div>
                <div class="portfolio-content">
                    <h3>Marketplace Multi-vendeurs</h3>
                    <p>Plateforme marketplace permettant à plusieurs vendeurs de commercialiser leurs produits.</p>
                    <div class="portfolio-tags">
                        <span>Laravel</span>
                        <span>Vue.js</span>
                        <span>PostgreSQL</span>
                        <span>Redis</span>
                    </div>
                    <a href="#" class="portfolio-link">Voir le projet →</a>
                </div>
            </div>
            <!-- Projet 6 -->
            <div class="portfolio-card">
                <div class="portfolio-img">
                    <img src="https://via.placeholder.com/400x220?text=App+Reservation" alt="App de Réservation">
                    <span class="portfolio-badge applications">Applications</span>
                </div>
                <div class="portfolio-content">
                    <h3>App de Réservation</h3>
                    <p>Application mobile pour la réservation de services avec système de paiement intégré.</p>
                    <div class="portfolio-tags">
                        <span>Flutter</span>
                        <span>Dart</span>
                        <span>Firebase</span>
                        <span>Stripe API</span>
                    </div>
                    <a href="#" class="portfolio-link">Voir le projet →</a>
                </div>
            </div>
        </div>
        <div class="portfolio-btn-container">
            <a href="#" class="primary-btn">Voir tous nos projets</a>
        </div>
    </div>
</section>
<!-- Fin Portfolio Section -->

<!-- Contact Section -->
<section id="contact-section" class="contact-section">
    <div class="container">
        <h2>Contactez-nous</h2>
        <p>Prêt à démarrer votre projet ? Contactez notre équipe pour discuter de vos besoins.</p>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Nos Coordonnées</h3>
                <ul>
                    <li><strong>Email :</strong> ahmedoudaa451@gmail.com</li>
                    <li><strong>Téléphone :</strong> +222 47 50 92 23</li>
                    <li><strong>Adresse :</strong> 123 Avenue des Technologies, 75001 Paris</li>
                    <li><strong>Horaires :</strong> Lun-Ven : 9h-16h</li>
                </ul>
                <div class="why-choose">
                    <h4>Pourquoi choisir A² Tech ?</h4>
                    <ul>
                        <li>✔ Expertise technique reconnue</li>
                        <li>✔ Support client personnalisé</li>
                        <li>✔ Solutions sur mesure</li>
                        <li>✔ Respect des délais</li>
                    </ul>
                </div>
            </div>
            <form class="contact-form">
                <div class="form-row">
                    <input type="text" placeholder="Nom complet *" required>
                    <input type="email" placeholder="Email *" required>
                </div>
                <div class="form-row">
                    <input type="text" placeholder="Téléphone">
                    <input type="text" placeholder="Entreprise">
                </div>
                <div class="form-row">
                    <select required>
                        <option value="">Sélectionnez un service</option>
                        <option>Développement Web</option>
                        <option>Applications Mobiles</option>
                        <option>Logiciels sur Mesure</option>
                        <option>Support IT</option>
                        <option>Solutions Cloud</option>
                    </select>
                </div>
                <textarea placeholder="Message *" required></textarea>
                <button type="submit" class="cta-button">Envoyer le message</button>
            </form>
        </div>
    </div>
</section>
<!-- Fin Contact Section -->

<!-- Newsletter -->
<section class="newsletter" id="newsletter">
    <div class="container">
        <h2>Restez informé de nos actualités</h2>
        <p>Recevez les dernières nouvelles sur nos services et les tendances IT</p>
        <form class="newsletter-form" method="POST" action="#">
            @csrf
            <input type="email" name="email" placeholder="Votre adresse email" class="newsletter-input" required>
            <button type="submit" class="newsletter-btn">S'abonner</button>
        </form>
    </div>
</section>

@endsection
