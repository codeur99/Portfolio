<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sticky Navbar | vanilla javascript</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <header>
        <div>
            <img class="image-du-logo" src="Images/logo-image.png" alt="logo">
        </div>
       
        <ul>
            <li> <a href="#">Accueil</a></li>
            <li> <a href="#">Compétences</a></li>
            <li> <a href="#">Mes travaux réalisés</a></li>
            <li> <a href="#">Formations</a></li>
            <li> <a href="#">Contacts</a></li>
        </ul>
    </header>

    <section class="banner"></section>
    <script type="text/javascript">
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)
        })

    </script>
</body>
</html>

