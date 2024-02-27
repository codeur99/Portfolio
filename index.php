<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A200%2C400%2C500"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A200%2C400%2C500"/>
    <link rel="stylesheet" href="./styles/menu.css"/>
    <link rel="stylesheet" href="./styles/logo.css"/>
    <link rel="stylesheet" href="./styles/index.css"/>
</head>

<body>

  <header>
      <?php include("logo.php");?>
      <?php include("menu.php");?>
  </header>

  <div class="nom-section">
      <span>
          A propos de moi
          <br/>
      </span>
  </div>

  <section class="premiere-section">  
      <div class="bloc-photo-et-paragraphe">  
          <img class="bloc-a-propos-image" src="Images\whatsapp-image-2024-02-12-1542-1.png"/>
          <p class="bloc-a-propos-paragraphe">
              Hello! je m’appelle Lebomo Jessy Christopher<br/> Je suis développeur d’application web et mobile, j’implemente les logiques metier ou encore la logique business, qui pour moi traduit les objectifs réels de l’application.
          </p>
      </div>
      <div class="fond-Bloc-presentation"></div>        
  </section>

  <div class="fond-Bloc-separation"></div>        

  <section class="deuxieme-section">
        <div class="nom-section">
            <span>
                Mes services
                <br/>
            </span>
        </div>

        <div class="services-groupes">    
            <div class="dev-web">
                <span class="service-nom">
                    Développement de Sites web<br/>
                </span> 
                <img class="image" src="Images\image-dvelopement-site.png"/>         
            </div>

            <div class="dev-mobile">
                <span class="service-nom">
                    Développement d'application mobile<br/>
                </span> 
                <img class="image" src="Images/image-dev-apps.png"/>
            </div>
        </div>

        <div class="services-groupes">    
            <div class="Maquettage-web-et-mobile">
                <span class="service-nom">
                    Maquettage d'application<br/>
                </span> 
                <img class="image" src="Images\image-dvelopement-site.png"/>         
            </div>

            <div class="Redaction-de-cahier-de-charges">
                <span class="service-nom">
                    Rédaction de cahier des charges<br/>
                </span> 
                <img class="image" src="Images\image-cahier-de-charge.png"/>
            </div>
        </div>
  </section>

  <div class="fond-Bloc-separation"></div>        

    <section class="troisieme-section">
        <div class="nom-section">
            <span>
                Mes compétences
                <br/>
            </span>
        </div>

        <div class="group-1-competence"> 
            <div>
                <button class="bouton-competence">Maquettage d'appliocation</button>
            </div>
            <div>
                <button class="bouton-competence">Réalisation de sites statique et dynamique</button>
            </div>
            <div>
                <button class="bouton-competence">Concevoir et déployer une base de données</button>
            </div>
        </div>

        <div class="group-2-competence">
            <div>
                <button class="bouton-competence">Développement mobile</button>
            </div>
            <div>
                <button class="bouton-competence">Assurer l'intégration et le deployement continu d'une Application Web</button>
            </div>
            <div>
                <button class="bouton-competence">Documenter le deployement d'une App Web et Mobile</button>
            </div>
        </div>
  </section>
  
   <div class="fond-Bloc-separation"></div> 



    <section class="quatrieme-section">
        <div class="nom-section">
            <span>
                Mes Travaux réalisés
                <br/>
            </span>
        </div>

        <div class="services-groupes">    
            <div class="dev-web">
                <span class="service-nom">
                 <button class="bouton-competence">Réalisation du site web du laboratoire numérique de COMILOG à Moanda</button>
                </span> 
                <img class="image" src="Images\image-dvelopement-site.png"/>         
            </div>

            <div class="dev-mobile">
                <span class="service-nom">
                   <button class="bouton-competence">Réalisation de mon site portfolio</button>
                </span> 
                <img class="image" src="Images/image-dev-apps.png"/>
            </div>
        </div>
  </section>
  
   <div class="fond-Bloc-separation"></div>  

    <section class="cinquieme-section">
        <div class="nom-section">
            <span>
                Mes Formations & Certificats
                <br/>
            </span>
        </div>

        <div class="group-formations-Certificats"> 
            <div>
                <button class="formations-Certificats">Formation certifiante COMILOG en développement web et web mobile</button>
            </div>
            <div>
                <button class="formations-Certificats">Formation cerifiante en développement back-end</button>
            </div>
            <div>
                <button class="formations-Certificats">Formation cerifiante en maquettage graphique d’application web et mobile</button>
            </div>
            <div>
                <button class="formations-Certificats">Formation cerifiante en développement agile</button>
            </div>
        </div>



  </section>
     <div class="fond-Bloc-separation"></div>  

    <section class="sixieme-section">
        <div class="nom-section">
            <span>
                Contacs
                <br/>
            </span>
        </div>

        <div class="reseau-sociaux-contact">
            <a href="mailto:Lebomojessy63@gmail.com"><img src="Images/Gmail-image-logo.png" alt="gmail"></a>
            <a href="https://web.whatsapp.com/"><img src="Images\whatsapp-image-logo.jpg" alt="hatsapp"></a>
            <a href="tel:+24165881636"><img src="Images/Gmail-image-logo.png" alt="Appel"></a>
            <a href="https://www.linkedin.com/in/jessy-christopher-lebomo-9544b513a/"><img src="Images/linkedlin-image-logo.jpg" alt="Linkedlin"></a>
        </div>

    </section>    
    
    

</body>
</html>