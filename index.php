<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stacja Benzynowa | Najtańsze ceny paliw na rynku</title>
  <meta name="description" content="Stacja Benzynowa Najtańsze ceny na rynku | tanie LPG, DIESEL (ON), Pb 95, Pb 98, artykuły spożywcze">
  <meta name="keywords" content="stacja benzynowa, lpg, diesel, on, 98, pb98, 95, pb95, paliwo, artykuły spożywcze, benzyna, tania benzyna">
  <link rel="icon" href="./assets/icon/favicon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/products.css">
  <link rel="stylesheet" href="./css/about.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
  <?php
  $conn = new mysqli('Localhost', 'View', '', 'stacjapaliw');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>
  <header>
    <span class="material-symbols-outlined menu">menu</span>
    <nav>
      <ul>
        <li><a href="#hero">Strona Główna</a></li>
        <li><a href="#products">Produkty</a></li>
        <li><a href="#about">O Firmie</a></li>
        <li><a href="#contact">Kontakt</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <!-- MAYBE: arrow to go top -->
    <!-- HERO -->
    <section id="hero">
      <div class="text">
        <h1 class="glow">Stacja Paliw</h1>
        <p>Najniższe ceny w polsce!</p>
      </div>
      <a href="#products" class="glow">Sprawdź!</a>
      <div class="bg"></div>
      <!-- <div class="fade"></div> -->
    </section>
    <!-- Products -->
    <section id="products">
      <h1 class="glow">Produkty</h1>
      <div class="wrapper">
        <button id="btn1">
          <span class="material-symbols-outlined glow">
            keyboard_arrow_left
          </span>
        </button>
        <button id="btn2">
          <span class="material-symbols-outlined glow">
            keyboard_arrow_right
          </span>
        </button>

        <div class="carousel">
          <?php
          $sql = "SELECT id, NAZWA, OPIS, CENA, IMG_PATH FROM produkty";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<div class='card'> <h2 class='glow'>" . $row['NAZWA']  . "</h2> <div class='image' style='background-image: url(" . $row['IMG_PATH'] . ")'></div> <p class='glow'> Cena: " . $row['CENA'] . "</p> </div>";
            }
          }
          $conn->close();
          ?>
        </div>
      </div>

    </section>
    <!-- About -->
    <section id="about">
          <h1 class="glow">O Nas</h1>
          <div class="opis">
            <p>Witaj na <span class="glow">naszej rewolucyjnej stacji benzynowej</span>, gdzie niskie ceny idą w parze z wysoką jakością obsługi! Jesteśmy dumni, że możemy zaoferować <span class="glow">naszym klientom</span> nie tylko najkorzystniejsze ceny paliw, ale także szeroki wybór <span class="glow">wysokiej jakości artykułów spożywczych.</span></p>
            <br>
            <p>Gdy zatrzymujesz się na naszej stacji, nie tylko tankujesz - doświadczasz <span class="glow">wyjątkowego podejścia do obsługi.</span> Nasza przyjazna i profesjonalna obsługa jest zawsze gotowa pomóc, sprawiając, że <span class="glow">Twoje</span> zakupy będą szybkie i przyjemne.</p>
            <br>
            <p><span class="glow">Co sprawia, że jesteśmy unikalni?</span> Nasze ceny paliw są najniższe na rynku, co oznacza, że możesz bez obaw zatankować swój samochód, oszczędzając jednocześnie na <span class="glow">każdym litrze!</span> Dodatkowo, nasza oferta artykułów spożywczych jest bogata i zróżnicowana, obejmując <span class="glow">świeże owoce, przekąski, napoje i wiele innych.</span> Dzięki temu, nawet gdy tankujesz, znajdziesz wszystko, czego potrzebujesz, aby uczynić podróż jeszcze bardziej komfortową.</p>
            <br>
            <p>Przyjedź do <span class="glow">naszej stacji benzynowej</span>, gdzie niskie ceny idą w parze z <span class="glow">wysoką jakością!</span> Odkryj, jak łatwo można zaoszczędzić, nie rezygnując przy tym z jakości. Czekamy na Ciebie z uśmiechem i gotowi jesteśmy sprawić, że <span class="glow">Twoje doświadczenie</span> na naszej stacji będzie niezapomniane!</p>
          </div>
    </section>
    <!-- Contact Form -->
    <section id="contact">

    </section>
  </main>
  <footer>
    <!-- Logo with copyright -->
    <!-- Get Help -->
    <!-- Social -->
  </footer>
</body>
<script src="./js/main.js" type="module"></script>
<script src="./js/slider.js"></script>

</html>