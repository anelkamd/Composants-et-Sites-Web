<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Anelka MD</title>
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/Mon Avatar.png" alt="Anelka" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick">Anelka MD</h1>

          <p class="title">Web developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Afficher les contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">E-mail</p>

              <a href="anelkamd243@gmail.com" class="contact-link">anelkamd243@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Téléphone</p>

              <a href="tel:+243999260169" class="contact-link">+243 999260169</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Anniversaire</p>

              <time datetime="1982-06-23"> 5 Avril </time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Emplacement</p>

              <address>Nord-Kivu/Goma ,DRC</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://web.facebook.com/Anelkamd1" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://x.com/Anelka_Codes" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/anelka.codes" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>A Propos</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Admin</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="A Propos">

        <header>
          <h2 class="h2 article-title">A propos de Moi</h2>
        </header>

        <section class="about-text">
          <p>
            Je suis Anelka MD, Designer UI/UX et Developpeur Web , 
            spécialisé dans le développement web et les médias imprimés. J'aime transformer des 
            problèmes complexes en designs simples, beaux et intuitifs.
            Mon travail consiste à créer des sites web fonctionnels et conviviaux tout en étant attrayants.
             J'ajoute une touche personnelle à vos produits pour les rendre accrocheurs et faciles à utiliser.
              Mon objectif est de transmettre votre message et votre identité de la manière la plus créative possible.
            J'ai réalisé des designs web pour de nombreuses marques célèbres.
          </p>

          <p>
            Mon travail consiste à créer votre site web de manière à ce qu'il soit fonctionnel et convivial tout en étant attrayant.
             De plus, j'ajoute une touche personnelle à votre produit pour m'assurer qu'il soit accrocheur et facile à utiliser.
              Mon objectif est de transmettre votre message et votre identité de la manière la plus créative possible.
             J'ai réalisé des designs web pour de nombreuses marques célèbres.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">Ce que je fais</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  Le design le plus moderne et de haute qualité réalisé à un niveau professionnel.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  Développement de sites de haute qualité au niveau professionnel.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Applications mobiles</h4>

                <p class="service-item-text">
                  Développement professionnel d'applications pour iOS et Android.
                </p>
              </div>

            </li>

            <!-- <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Photography</h4>

                <p class="service-item-text">
                  I make high-quality photos of any category at a professional level.
                </p>
              </div>

            </li> -->

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Témoignages</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="DjoDev" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>DjoDev</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    DjoDev a été embauché pour créer une identité d'entreprise. Nous avons été très satisfaits du travail réalisé. Elle a un
                    beaucoup d'expérience
                    et est très soucieux des besoins du client.
                  </p>
                </div>

              </div>
            </li>

            <!-- <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li> -->

            <!-- <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li> -->

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Promesse Mous" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Promesse M</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Promesse a été embauché pour créer une identité d'entreprise. Nous avons été très satisfaits du travail réalisé. Elle a un
                    beaucoup d'expérience
                    et est très soucieux des besoins du client.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>DjoDev</h4>

              <time datetime="2021-06-14">14 aout 2024</time>

              <div data-modal-text>
                <p>
                  DjoDev a été embauché pour créer une identité d'entreprise. Nous avons été très satisfaits du travail réalisé. Elle a un
                  beaucoup d'expérience
                  et est très soucieux des besoins du client.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/Fichier 10@4xweka.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/g-solutech.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/asha la villa.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/Logo_isig.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-5-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-6-color.png" alt="client logo">
              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Éducation</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Institut Superieur d'informatique et de Gestion/ISIG</h4>

              <span>2023 — 2025</span>

              <p class="timeline-text">
                Licence en informatique et gestion
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Universite Libre des Pays de Grand Lacs</h4>

              <span>2022</span>

              <p class="timeline-text">
                Annee Preparatoire
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">College Saint-Paul</h4>

              <span>2015 — 2021</span>

              <p class="timeline-text">
                Diplome d'Etat en Commercial et Gestion
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Developpeur web Chez Goma Solution Tech/G-SoluTech</h4>

              <span>2024 — Present</span>

              <p class="timeline-text">
                Developpeur web et Designer Ui / Ux
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web Design ( Figma , Adobe XD, PhotoShop)</h4>

              <span>2022 — 2023</span>

              <p class="timeline-text">
                Conception des Designe des Sites
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Conception 3D ( Blender )</h4>

              <span>2023 — 2024</span>

              <p class="timeline-text">
                Conception des modele 3D pour les Sites web dinamique !!
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">Mes compétences</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Designe Web</h5>
                <data value="80">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 60%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Developpement Web</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">la 3D</h5>
                <data value="90">40%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 40%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">WordPress</h5>
                <data value="50">20%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 20%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>Tout</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Designe Web</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Developpement Web</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Sélectionnez la catégorie</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>Tout</button>
              </li>

              <li class="select-item">
                <button data-select-item>Designe Web</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Developpement Web</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="Designe Web">
              <a href="https://www.figma.com/design/ab15892ym08XoOT20Ujdg7/Crampo-Nike-Landing-Page?node-id=3-2&t=9kDwMrGL9xvCWbdO-1">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Crampon Nike.png" alt="Nike" loading="lazy">
                </figure>

                <h3 class="project-title">Nike Shoe</h3>

                <p class="project-category">Designe Web</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Designe Web">
              <a href="https://www.figma.com/design/BukDwvq70ogPB358xX8lK4/Portfolio-Website-(Community)?node-id=0-1&t=9kDwMrGL9xvCWbdO-1">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Landing-page.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Portfolio</h3>

                <p class="project-category">Designe Web</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Designe Web">
              <a href="https://www.figma.com/design/DrWPd7EcypkaBUwrEmPnIO/Shop-IPad-pro?t=k1x9DpQX11GRua2R-1">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/HOME.png" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Web Site Jordan</h3>

                <p class="project-category">Designe Web</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="https://github.com/anelkamd/Gestion-Compte-Clients">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Banque.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Gestion Compte Banque</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Developpement Web">
              <a href="https://www.figma.com/design/VHRL2ikPfTMSDCIwxIx1Ua/Projets-Bagira?node-id=1-2&t=k1x9DpQX11GRua2R-1">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Cover (1).png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">Bagira Gallerie Art</h3>

                <p class="project-category">Developpement Web</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/Cover (2).png" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Developpement Application Mobile</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">23 fevrier 2024</time>
                  </div>

                  <h3 class="h3 blog-item-title">Conference d'Apple au Rwanda</h3>

                  <p class="blog-text">
                    Comment Ameliorer la performance de XCode
                  </p>

                </div>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="Admin">

        <header>
          <h2 class="h2 article-title">Connexion</h2>
        </header>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="login.php" method="POST" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="username" class="form-input" placeholder="Nom d'utilisateur" required data-form-input>
          
              <input type="password" name="password" class="form-input" placeholder="Mot de passe" required data-form-input>
            </div>
          
            <button class="form-btn" type="submit" data-form-btn>
              <ion-icon name="log-in"></ion-icon>
              <span>Connexion</span>
            </button>
          
          </form>

        </section>

      </article>

    </div>

  </main>

<?php require_once('./bd/conbd.php'); ?>
<?php
ob_start();
session_start();
?>
<?php
if(isset($_POST['connexion'])) {
    $error='';    
    if(empty($_POST['username']) || empty($_POST['password'])) {
        $error = 'Nom d\'utilisateur et mot de passe requis';
    } else {
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $sql = $pdo->prepare("SELECT * FROM user WHERE username=?");
        $sql->execute(array($username));
        $total = $sql->rowCount();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        if($total == 0) {
            $error = 'Valeurs de connexion incorrectes<br/>';
        } else {
            foreach($result as $data) {
                $password_bd = $data['pwd'];
            }

            if($password_bd == md5($password)){
                $_SESSION['user'] = $data;   
                header("location: admin/index.php");
            } else { 
                $error = 'Mot de passe incorrect<br/>';
            }
        }
    }
}
?>







  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>