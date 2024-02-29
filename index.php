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
    <link rel="stylesheet" href="Styles\premiere-section.css">
    <link rel="stylesheet" href="Styles\deuxieme-section.css">
    <link rel="stylesheet" href="Styles\troisieme-section.css">
    <link rel="stylesheet" href="Styles\quatrieme-section.css">
    <link rel="stylesheet" href="Styles\cinquieme-section.css">
    <link rel="stylesheet" href="Styles\sixieme-section.css">
</head>

<body>

    <header class="groupe-menu-logo">
      <?php include("logo.php");?>
      <?php include("menu.php");?>
    </header>


  <div class="nom-section">
      <span>
          A propos de moi
      </span>
  </div>

  <section id="premiere-section" class="premiere-section">  
          <?php include("premiere-section.php");?>
  </section>

  <div class="Bloc-de-separation"></div>        

  <section id="deuxieme-section" class="deuxieme-section">
       <?php include("deuxieme-section.php");?>
  </section>

  <div class="Bloc-de-separation"></div>        

    <section id="troisieme-section" class="troisieme-section">
        <?php include("troisieme-section.php");?>
    </section>
  
   <div class="Bloc-de-separation"></div> 



  <section id="quatrieme-section" class="quatrieme-section">
        <?php include("quatrieme-section.php");?>
  </section>
  
   <div class="Bloc-de-separation"></div>  

    <section id="cinquieme-section" class="cinquieme-section">
         <?php include("cinquieme-section.php");?>
    </section>

     <div class="Bloc-de-separation"></div>  

    <section id="sixieme-section" class="sixieme-section">
         <?php include("sixieme-section.php");?>
    </section>    
    
    

</body>
</html>