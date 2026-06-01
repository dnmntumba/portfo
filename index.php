<?php
session_start();

if(empty($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>

  <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Dan NTUMBA",
    "jobTitle": "Développeur Web",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Kinshasa",
      "addressCountry": "RDC"}
    }
  </script>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Portfolio officiel de Dan NTUMBA, créateur digital, monteur vidéo et développeur web à Kinshasa. Création de contenus, marketing digital et développement d'applications web modernes.">
  <meta name="keywords" content="MBUYI NTUMBA DANNY, développeur web RDC, créateur digital Kinshasa, marketing digital, portfolio développeur, montage vidéo, développeur PHP, création site web">
  <meta name="author" content="Dan NTUMBA">

  <meta property="og:title" content="Portfolio - Dan NTUMBA">
  <meta property="og:description" content="Créateur digital, développeur web et expert en marketing digital à Kinshasa.">
  <meta property="og:image" content="images/client1.jpeg">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://danntumba.com">

  <script src="https://www.google.com/recaptcha/api.js?render=6Lfacf0sAAAAALCPhnkm_aJsZWyx4K8tJzGEmSHn"></script>
  

  <link rel="icon" type="image/png" href="images/favicon.png">
  
  <title>Portfolio - Dan NTUMBA</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- CSS EXTERNE -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- TRACKING CLARITY -->
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "wzplvwqv52");
</script>


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2536299783489759');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2536299783489759&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
 
</head>

<body>

<header class="navbar">

  <div class="logo">DAN.</div>

  <nav>
    <a href="#about">À propos</a>
    <a href="#skills">Compétences</a>
    <a href="#projects">Projets</a>
    <a href="#contact">Contact</a>
  </nav>

</header>

<!-- 🔵 HERO -->
<section class="hero" id="about">
  <div class="hero-text">
    <h1>
      Développeur Web & Créateur Digital à Kinshasa
    </h1>

    <p>
      Je suis Dan NTUMBA...
    </p>

    <a href="#contact" class="btn">Me contacter</a>
  </div>

  <div class="hero-card">
    <h3>Informations</h3>

    <div class="info">
      <strong>Téléphone :</strong><br>
      +243976494138
    </div>

    <div class="info">
      <strong>Email :</strong><br>
      dnmntumba@gmail.com
    </div>

    <div class="info">
      <strong>Ville :</strong><br>
      Kinshasa - RDC
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">

    <div class="title">
      <h2>Mes Compétences</h2>
      <p>Des compétences modernes adaptées au digital actuel.</p>
    </div>

    <div class="skills-grid">

      <div class="skill-card">
        <h3>Montage Vidéo</h3>
        <p>
          Création de vidéos professionnelles,
          réels TikTok, interviews,
          contenus YouTube et publicités.
        </p>
      </div>

      <div class="skill-card">
        <h3>Marketing Digital</h3>
        <p>
          Gestion des réseaux sociaux,
          stratégie de contenu,
          visibilité digitale et branding.
        </p>
      </div>

      <div class="skill-card">
        <h3>Développement Web</h3>
        <p>
          Création de sites WordPress,
          applications de gestion
          et solutions digitales modernes.
        </p>
      </div>

    </div>

  </section>

  <!-- =========================
     STATS SECTION
========================= -->

<section id="stats">

  <div class="stats-container">

    <!-- CARD -->
    <div class="stat-card">

      <h2 class="counter" data-target="100">
        0
      </h2>

      <p>Contenus Créés</p>

    </div>

    <!-- CARD -->
    <div class="stat-card">

      <h2 class="counter" data-target="20">
        0
      </h2>

      <p>Projets Réalisés</p>

    </div>

    <!-- CARD -->
    <div class="stat-card">

      <h2 class="counter" data-target="15">
        0
      </h2>

      <p>Clients Satisfaits</p>

    </div>

    <!-- CARD -->
    <div class="stat-card">

      <h2 class="counter" data-target="3">
        0
      </h2>

      <p>Ans d’Expérience</p>

    </div>

  </div>

</section>


<!-- =========================
     PROCESSUS DE TRAVAIL
========================= -->

<section id="process">

  <div class="title">
    <h2>Mon Processus de Travail</h2>
    <p>
      Une méthode claire pour transformer vos idées
      en solutions digitales modernes.
    </p>
  </div>

  <div class="process-container">

    <!-- STEP 1 -->
    <div class="process-card">

      <div class="process-number">
        01
      </div>

      <h3>Analyse</h3>

      <p>
        Compréhension du besoin du client,
        des objectifs et de la vision du projet.
      </p>

    </div>

    <!-- STEP 2 -->
    <div class="process-card">

      <div class="process-number">
        02
      </div>

      <h3>Création</h3>

      <p>
        Conception du design, du contenu
        et de l’expérience utilisateur moderne.
      </p>

    </div>

    <!-- STEP 3 -->
    <div class="process-card">

      <div class="process-number">
        03
      </div>

      <h3>Développement</h3>

      <p>
        Mise en place technique du site,
        de l’application ou du contenu digital.
      </p>

    </div>

    <!-- STEP 4 -->
    <div class="process-card">

      <div class="process-number">
        04
      </div>

      <h3>Livraison</h3>

      <p>
        Finalisation, optimisation
        et accompagnement du client.
      </p>

    </div>

  </div>

</section>


<!-- =========================
     PREMIUM PROJECTS
========================= -->

<section id="projects">

  <div class="title">
    <h2>Mes Réalisations</h2>
    <p>
      Découvrez quelques projets et contenus réalisés
      dans le développement web et la création digitale.
    </p>
  </div>

  <!-- FILTER -->
  <div class="filter-buttons">

    <button
      class="filter-btn active"
      onclick="showCategory('contenus', this)">
      Contenus Digitaux
    </button>

    <button
      class="filter-btn"
      onclick="showCategory('applications', this)">
      Applications Web
    </button>

  </div>

  <!-- =========================
       CONTENUS
  ========================= -->

  <div class="projects-category active-category" id="contenus">

    <div class="projects-grid">

      <!-- CARD -->
      <div class="premium-project-card">

        <div class="video-wrapper">

          <img
          src="images/codewave-Cover.jpg"
          class="video-thumb">

          <video class="project-video" controls preload="metadata">
            <source src="videos/video1.mp4" type="video/mp4">
          </video>

          <div class="play-button" onclick="playVideo(this)">
            <i class="fas fa-play"></i>
          </div>

        </div>

        <div class="project-overlay">

          <span class="project-tag">
            Montage Vidéo
          </span>

          <h3>Interview Sportif</h3>

          <p>
            Montage dynamique et moderne réalisé
            pour une émission sportive professionnelle.
          </p>

        </div>

      </div>

      <!-- CARD -->
      <div class="premium-project-card">

        <div class="video-wrapper">

          <img
          src="images/video-thumb2.jpg"
          class="video-thumb">

          <video class="project-video" controls preload="metadata">
            <source src="videos/video2.mp4" type="video/mp4">
          </video>

          <div class="play-button" onclick="playVideo(this)">
            <i class="fas fa-play"></i>
          </div>

        </div>

        <div class="project-overlay">

          <span class="project-tag">
            Publicité
          </span>

          <h3>Contenu Promotionnel</h3>

          <p>
            Création d’une vidéo publicitaire
            premium pour entreprise moderne.
          </p>

        </div>

      </div>

    </div>

  </div>

  <!-- =========================
       APPLICATIONS
  ========================= -->

  <div class="projects-category" id="applications">

    <div class="projects-grid">

      <!-- APP -->
      <div class="premium-project-card web-card">

        <div class="project-banner">
          <i class="fas fa-truck"></i>
        </div>

        <div class="project-overlay">

          <span class="project-tag">
            Gestion Minière
          </span>

          <h3>Application de Gestion</h3>

          <p>
            Gestion des véhicules,
            équipements et QR codes
            pour société minière.
          </p>

        </div>

      </div>

      <!-- APP -->
      <div class="premium-project-card web-card">

        <div class="project-banner">
          <i class="fas fa-qrcode"></i>
        </div>

        <div class="project-overlay">

          <span class="project-tag">
            QR Code
          </span>

          <h3>Système d’Identification</h3>

          <p>
            Génération automatique
            et impression des QR codes
            pour équipements.
          </p>

        </div>

      </div>

    </div>

  </div>

</section>


<!-- =========================
     TEMOIGNAGES CLIENTS
========================= -->

<section id="testimonials">

  <div class="title">
    <h2>Témoignages Clients</h2>
    <p>
      Ce que pensent certains clients de mes services.
    </p>
  </div>

  <div class="testimonials-container">

    <!-- TESTIMONIAL 1 -->
    <div class="testimonial-card">

      <div class="testimonial-top">

        <img src="images/client1.jpeg"
        alt="client"
        class="client-image">

        <div>
          <h3>Walker Ruzaki</h3>
          <span>Entrepreneur</span>
        </div>

      </div>

      <p class="testimonial-text">
        Danny a réalisé un excellent travail sur notre contenu vidéo.
        Le rendu était moderne, professionnel et très engageant.
      </p>

    </div>

    <!-- TESTIMONIAL 2 -->
    <div class="testimonial-card">

      <div class="testimonial-top">

        <img src="images/client2.jpg"
        alt="client"
        class="client-image">

        <div>
          <h3>Centre Médical Diamant</h3>
          <span>Entreprise</span>
        </div>

      </div>

      <p class="testimonial-text">
        Grâce à ses stratégies digitales et contenus,
        notre visibilité s’est nettement améliorée.
      </p>

    </div>

    <!-- TESTIMONIAL 3 -->
    <div class="testimonial-card">

      <div class="testimonial-top">

        <img src="images/client3.jpg"
        alt="client"
        class="client-image">

        <div>
          <h3>GrelCom</h3>
          <span>Développement Web</span>
        </div>

      </div>

      <p class="testimonial-text">
        Application moderne, rapide et très bien structurée.
        Le système de gestion fonctionne parfaitement.
      </p>

    </div>

  </div>
</section>


<!-- CONTACT -->
<section id="contact">
  <div class="contact-box premium-contact">

  <div class="contact-content">

    <!-- IMAGE -->
    <div class="contact-left">
      <img src="images/client1.jpeg" alt="contact" class="contact-image">
    </div>

    <!-- TEXT -->
    <div class="contact-right">

      <h2>Contactez-moi</h2>

      <p class="contact-text">
        Vous avez un projet ? Je suis disponible pour vous accompagner dans la création
        de solutions digitales modernes et efficaces.
      </p>

      <div class="contact-info">
        <p><strong>Email :</strong> dnmntumba@gmail.com</p>
        <p><strong>Téléphone :</strong> +243976494138</p>
      </div>

      <button class="btn" onclick="openPopup()">
        Envoyer un message
      </button>

    </div>

  </div>

</div>
</section>

<footer class="footer">

  <div class="footer-content">

    <p>
      © 2026 - DAN NTUMBA | Tous droits réservés
    </p>

    <div class="footer-links">

      <a href="politique-confidentialite.php">
        Politique de confidentialité
      </a>

    </div>

  </div>

</footer>

<!-- POPUP -->
<div class="popup-container" id="popup">
  <div class="popup-box">
    <span class="close-popup" onclick="closePopup()">&times;</span>

    <h2>Envoyer un message</h2>

    <form id="contactForm" action="send.php" method="POST">
      <input type="hidden" 
      name="csrf_token" 
      value="<?php echo $_SESSION['csrf_token']; ?>">
      <input type="text"
      name="name"
      placeholder="Votre nom"
      required>

      <input type="email"
      name="email"
      placeholder="Votre email"
      required>

      <textarea
      name="message"
      placeholder="Votre message"
      required></textarea>
      <!-- 🛑 ANTI-BOT HONEYPOT (NE PAS TOUCHER) -->
      <input type="text" name="website" style="display:none">

      <!-- reCAPTCHA -->
      <div class="g-recaptcha"
      data-sitekey="6Lf0BfwsAAAAAL0PKERGN829PZJ1thPLXHBtRBk3"></div>

      <button type="submit" class="btn">
        Envoyer
      </button>

    </form>
    <div class="form-status" id="formStatus">
  <div class="loader" id="loader"></div>
  <p id="statusText">Envoi en cours...</p>
</div>
  </div>
</div>

<!-- JS EXTERNE -->
<script src="js/script.js"></script>


<!-- FLOATING SOCIAL -->
<div class="social-floating">

  <a href="c:\Users\dnmnt\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\LocalState\sessions\9FAB23DD6710037ECEB911A1C344D3E107CF521D\transfers\2026-22\WhatsApp Image 2026-06-01 at 13.13.36.jpeg" class="social-btn instagram" target="_blank">
    <i class="fab fa-instagram"></i>
  </a>

  <a href="https://web.facebook.com/profile.php?id=61563072091555" target="_blank" class="social-btn facebook">
    <i class="fab fa-facebook-f"></i>
  </a>

  <a href="https://www.tiktok.com/@dnmntumba?_r=1&_t=ZS-96qaPpwnISD" target="_blank" class="social-btn tiktok">
    <i class="fab fa-tiktok"></i>
  </a>

  <a href="#" class="social-btn linkedin" target="_blank">
    <i class="fab fa-linkedin-in"></i>
  </a>

</div>


<script>
grecaptcha.ready(function () {
    document.getElementById("contactForm").addEventListener("submit", function (e) {
        e.preventDefault();

        grecaptcha.execute("6Lfacf0sAAAAALCPhnkm_aJsZWyx4K8tJzGEmSHn", { action: "contact" }).then(function (token) {

            let input = document.createElement("input");
            input.type = "hidden";
            input.name = "g-recaptcha-response";
            input.value = token;

            document.getElementById("contactForm").appendChild(input);

            document.getElementById("contactForm").submit();
        });
    });
});
</script>


<!-- WHATSAPP FLOATING BUTTON -->
<a href="https://wa.me/243976494138?text=Bonjour%20Dan%2C%20je%20viens%20depuis%20votre%20portfolio%20et%20j'aimerais%20discuter%20d'un%20projet."
   class="whatsapp-float"
   target="_blank"
   title="Discuter sur WhatsApp">

  <i class="fab fa-whatsapp"></i>

  <span class="whatsapp-tooltip">
    Discuter avec moi
  </span>

</a>


<script>
  // cacher après scroll initial puis réafficher
  let whatsappBtn = document.querySelector(".whatsapp-float");

  let lastScroll = 0;

  window.addEventListener("scroll", function(){

    let currentScroll = window.pageYOffset;

    if(currentScroll > lastScroll){
      // scroll down -> discret
      whatsappBtn.style.transform = "scale(0.95)";
      whatsappBtn.style.opacity = "0.85";
    } else {
      // scroll up -> visible
      whatsappBtn.style.transform = "scale(1)";
      whatsappBtn.style.opacity = "1";
    }

    lastScroll = currentScroll;
  });
</script>

</body>
</html>