<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="website icon" type="png" href="logos/logo.png">
    <link rel="stylesheet"  href="style.css">
    <title>GEOMTEC</title>
</head>
<body>
    <script>
        function navigateToPage() {
          window.location.href = "index.php";
        }
      </script>
    <div class="navbar" id="myNavbar">
      <div id="imageContainer">
        <img id="myImage" src="logos/logo.png" onclick="navigateToPage()" alt="Click me to navigate">
      </div>
      
      <a href="Apropos.php">ℹ️ A propos</a>
      <a href="services.php">👨🏻‍🔧 Nos services</a>
      <a href="galerie.php">📷 Galerie</a>
      <a href="demande.php">📋 Demande de devis</a>
      <a href="contactez-nous.php"> 💬 Contactez-nous</a>
      <a style="text-decoration: none;" href="http://www.gotrack.ma/" target="_blank"> 🌐Espace Client</a>
      <a href="tel:+212522303100">📞 Appelez-nous : +212 522 303 100</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        &#9776;
      </a>
    </div>
    
    <script>
    function myFunction() {
      var x = document.getElementById("myNavbar");
      if (x.className === "navbar") {
        x.className += " responsive";
      } else {
        x.className = "navbar";
      }
    }
    </script>
   
   
    <h1 class="go">GOCHARGE</h1></br>

    <p style="font-family: 'Arial Black', sans-serif;" class="gochpara">GOCHARGE, développé par notre entreprise Geomtec, est une borne de recharge électrique domestique de haute qualité, offrant une puissance allant jusqu'à 22 kW. Conçu pour le marché européen, ce produit est doté d'une garantie de 3 ans, assurant une tranquillité d'esprit à nos clients. Notre service après-vente dédié garantit une assistance continue et efficace. Compatible avec tous les véhicules électriques, GOCHARGE offre une solution de recharge pratique et fiable pour les propriétaires de voitures électriques, contribuant ainsi à la transition vers une mobilité plus durable.</p>\
  <div class="imgb">
    <img class="gochimg" src="gocharge/post.jpg" alt="">
     <img class="gochimg2" src="gocharge/photo1.jpg" alt="">
  </div>  


<br><br>

    <a style="text-decoration: none; color: #ffffff;" href="services.php"><button class="Fermer">Retour</button></a>
    <br><br>
    <footer id="footer">

    
        <p class="r"> Restez connecté avec vos véhicules !</p>
        <p><img src="logos/localisation.png" style="height: 25px; width: 25px; margin-left: 8px;" alt="">
            <a href="https://www.google.com/maps/place/GEOMTEC/@33.5894825,-7.607346,19.35z/data=!4m6!3m5!1s0xda7cd6a21bc63f1:0x4af8984a860b981e!8m2!3d33.5893199!4d-7.6065747!16s%2Fg%2F1tl8m1fl?entry=ttu"
               target="_blank" style="font-size: 20px;" class="l">8, Khouribgua, 5ème étage N° 25, Casablanca 20250, Maroc <i
                    style="font-size: 20px; color: rgb(67, 182, 211);text-decoration: underline;">(Cliquez pour afficher en Google Maps)</i></a></p>
                    
        <a class="a" style="color: #000000;" href="https://web.facebook.com/GEOMTEC/?locale=fr_FR&_rdc=1&_rdr" target="_blank"
           rel="noopener noreferrer">
            <i  class="fab fa-facebook-square" style=" margin-left: 8px;margin-top: -8px;"> <span style=" margin-left: 8px;" >Geomtec</span>
            </i> <span  style=" color: rgb(67, 182, 211);text-decoration: underline;">  (Cliquez pour afficher en Facebook!)</span></a>
        <p > <img src="logos/gmail.png" style="height: 20px; width: 20px; margin-left: 8px;" alt="">
            <a class="a" href="mailto:contact@geomtec.com" target="_blank"
               style="font-size: 20px; color:#000000; margin-left: 9px; ">contact@geomtec.com <i style=" color: rgb(67, 182, 211);text-decoration: underline;"> (Cliquez pour envoyer un
                    Mail!)</i></a></p> 
        <p style="margin-top: 10px;"> <img src="logos/linkedin.png" style="height: 20px; width: 20px; margin-left: 8px;" alt="">
            <a class="a" href="https://www.linkedin.com/company/geomtec/" target="_blank"
                           style="font-size: 20px; color:#000000; margin-left: 9px; ">GEOMTEC<i style=" color: rgb(67, 182, 211);text-decoration: underline;"> (Cliquez pour afficher en linkedin!)</i></a></p>
        <p style="text-align: center;">Contactez-nous, nous vous répondrons en moins de 24 heures :</p>
        <p style="text-align: center; "> 📞Tel : 0522303100 / 📠 Fax : 0522301664</p>
        <div class="footer-bottom">
            <p class="ty">ALL RIGHTS RESERVED. ©2024 Geomtec</p><br>
        </div>
    </footer>
    
    
 
    
</body>
</html>
