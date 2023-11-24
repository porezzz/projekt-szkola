<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sklepik</title>
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/products.css">
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